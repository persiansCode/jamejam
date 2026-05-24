<?php

namespace App\Livewire;

use App\Http\Image\ImageService;
use App\Models\Category;
use App\Models\Images;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CraeteImagesCmsPage extends Component
{
    use WithFileUploads ;
   public $photo = null ;
   public $title = null ;
   public $description = null ;
   public $category_id = null ;
   public $status = null ;
   protected $rules = [

        'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",

        'status' => 'required|integer|in:0,1',
        'description' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
     

'category_id' => 'required|exists:categories,id|integer',

        "title" => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',

    ];
    public function submit(ImageService $imageService)
    {
  

    // حذف کدهای دیتابیس و اعتبارسنجی
    


        $this->validate();
 $user =  User::first()->toArray() ;
        $imageService->setExclusiveDirectory("images");

        $image = $imageService->createIndexAndSave($this->photo);
      $category =  Images::create(["title" => $this->title, "description" => $this->description, "image" => $image, "status" => $this->status , "arthor_id" => $user['id'] , "category_id" => $this->category_id ]);
   return redirect()->route('cms.show-images')
        ->with([
            'swal_title' => 'موفقیت!',
            'swal_text' => 'دسته‌بندی با موفقیت ثبت شد',
            'swal_icon' => 'success'
        ]);

    }

    public function render()
    {$categories = Category::orderBy("created_at" , 'asc')->get();
        return view('components.create-images-cms-page' , compact("categories"))->layout('components.main-layout' , ["title" => "صفحه ساخت عکس ها"]);
    }
}