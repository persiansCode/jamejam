<?php

namespace App\Http\Image;
use Config;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Laravel\Facades\Image;

class ImageService extends ImageToolsService
{

   public function Save($image)
   {

      $this->setImage($image);
      $this->getExclusiveDirectory() ??  $this->setExclusiveDirectory('article-image');
      $this->provider();

      // $manager = new ImageManager(new Driver());
      $images = Image::read($image->getRealPath());

      
      $result = $images->save(public_path($this->getImageAddress()), null, $this->getImageFormat());
      return $result ? $this->getImageAddress() : false;


   }

   public function createIndexAndSave($image)
   {
      $imageSizes = Config::get('image.index-image-sizes');
      $this->setImage($image);
      
      $this->getImageDirectory() ?? $this->setImageDirectory(date("Y") . DIRECTORY_SEPARATOR . date("m") . DIRECTORY_SEPARATOR . date('d'));
      $this->setImageDirectory($this->getImageDirectory() . DIRECTORY_SEPARATOR . time());
      $this->getImageName() ?? $this->setImageName(time());
      $imageName = $this->getImageName();
      $indexArray = [];
      foreach ($imageSizes as $indexAlias => $imageSize) {
         $currentImageName = $imageName . '_' . $indexAlias;
         $this->setImageName($currentImageName);

            $this->provider() ; 
         //execute saving image


         $images = Image::read($image->getRealPath());

         $result = $images->resize($imageSize['width'], $imageSize['height'])->save(public_path($this->getImageAddress()), null, $this->getImageFormat());

         if ($result) {
            $indexArray[$indexAlias] = $this->getImageAddress();
         } else {
            return false;
         }
         ;


      }
      $images = [] ;
      $images['indexArray'] = $indexArray;
      $images['directory'] = $this->getFinalImageDirectory();
      $images['currentImage'] = Config::get('image.default-current-index-image');
   return $images ; 
   }


public function deleteImage($imagePath)
{
    if(file_exists($imagePath))
    {
        unlink($imagePath);
    }
}

public function deleteIndex($images)
{
    $directory = public_path($images['directory']);
    $this->deleteDirectoryAndFiles($directory);
}

public function deleteDirectoryAndFiles($directory)
{
    if(!is_dir($directory))
    {
        return false;
    }

    $files = glob($directory . DIRECTORY_SEPARATOR . '*', GLOB_MARK);
    foreach($files as $file)
    {
        if(is_dir($file))
        {
            $this->deleteDirectoryAndFiles($file);
        }
        else{
            unlink($file);
        }
    }
    $result = rmdir($directory);
    return $result;
}

}
