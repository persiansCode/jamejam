<?php

namespace App\Livewire;

use App\Http\Image\ImageService;
use App\Models\Category;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class CraeteCategoriesCmsPage extends Component
{
    use WithFileUploads;
    public $title = '';

    public $description = '';

    public $status = '';
    public $photo;
    protected $rules = [

        'photo' => "mimes:jpg,bmp,png,gif,application/octet-stream|required",

        'status' => 'required|integer|in:0,1',
      'description' => 'required|min:2|max:1000|regex:/^[\p{Arabic}a-zA-Z0-9۰-۹ءي.,:؛\-\s‌]+$/u',


        "title" => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',

    ];
    public function submit(ImageService $imageService)
    {
  

    // حذف کدهای دیتابیس و اعتبارسنجی
    


        $this->validate();
 $user =  User::first()->toArray() ;
        $imageService->setExclusiveDirectory("category-image");

        $image = $imageService->createIndexAndSave($this->photo);
      $category =  Category::create(["title" => $this->title, "description" => $this->description, "image" => $image, "status" => $this->status , "arthor_id" => $user['id'] ]);
   return redirect()->route('cms.show-caregories')
        ->with([
            'swal_title' => 'موفقیت!',
            'swal_text' => 'دسته‌بندی با موفقیت ثبت شد',
            'swal_icon' => 'success'
        ]);

    }

    public function render()
    {
        return view('components.create-categories-cms-page')->layout('components.main-layout', ["title" => " ساخت دسته بندی ها"]);
    }
}