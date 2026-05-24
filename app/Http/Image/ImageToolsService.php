<?php


namespace App\Http\Image;

class ImageToolsService
{

 protected $image;
 protected $exclusiveDirectory;
 protected $imageDirectory;

 protected $imageName;

 protected $imageFormat;

 protected $finalImageDirectory;
 protected $finalImageName;

 public function setImage($image)
 {
  $this->image = $image;
 }

  public function getExclusiveDirectory (){
   return $this->exclusiveDirectory ;
  }

  public function setExclusiveDirectory ($exclusiveDirectory){
    $this->exclusiveDirectory = trim($exclusiveDirectory , '/\\') ;
  }


  public function getImageDirectory(){
   return $this->imageDirectory ;
  }

  public function setImageDirectory($imageDirectory){
   return $this->imageDirectory = trim($imageDirectory , '/\\') ;
  }

 public function getImageName () {
  return $this->imageName ;

 }

 public function setImageName ($imageName)  {

  $this->imageName = $imageName ;

 }

  public function setCurrentImageName () {
   return !empty($this->image) ? $this->setImageName
   (pathinfo($this->image->getClientOriginalName() , PATHINFO_FILENAME)) : false ;
  }

 public function getImageFormat() {
  return $this->imageFormat ;
 }
 public function setImageFormat($imageFormat) {
  $this->imageFormat =$imageFormat ;
 }

public function getFinalImageDirectory() {
 return $this->finalImageDirectory ;
}
public function setFinalImageDirectory($finalImageDirectory) {
 $this->finalImageDirectory = $finalImageDirectory ;
}
public function getFinalImageName() {
 return $this->finalImageName ;
}
public function setFinalImageName($finalImageName) {
 $this->finalImageName = $finalImageName ;
}

protected function checkDirectory($directory){
 if(!file_exists($directory)) {
     mkdir($directory , 0777 ,  true) ;
 }
}
public function getImageAddress(){
 return $this->finalImageDirectory . DIRECTORY_SEPARATOR . $this->finalImageName ;
}
public function provider() {
 $this->imageDirectory ?? $this->setImageDirectory(date('Y') . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
 $this->imageName ?? $this->setImageName(time());

 $this->imageFormat ?? $this->setImageFormat($this->image->extension()) ;

  $finalDirectory =  empty($this->exclusiveDirectory) ? $this->getImageDirectory() : $this->getExclusiveDirectory() . DIRECTORY_SEPARATOR . $this->getImageDirectory() ;
 $this->setFinalImageDirectory($finalDirectory) ;


 $this->setFinalImageName($this->imageName . '.' . $this->imageFormat) ;

 $this->checkDirectory($this->getFinalImageDirectory());
}
}
