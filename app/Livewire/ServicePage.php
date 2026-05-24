<?php

namespace App\Livewire;
use Livewire\Attributes\Url;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ServicePage extends Component
{
    use WithPagination; // 🔴 این خط را اضافه کنید
 #[Url]
  public $category_id = null;
   
    public function setCategory($id)
    {
        $this->category_id = $id;  // چون داده به صورت آرایه می‌آید
        // یا اگر مستقیم بیاید: $this->category_id = $id;
      
       
       dd("hi" . $this->category_id);
        // برای دیباگ (بعداً حذف کن)
        session()->flash('message', 'دسته بندی با ID ' . $this->category_id . ' انتخاب شد');
    }
    public function render()
    {
        $allCategories = Category::orderBy('created_at' , 'asc')->get();
        if($this->category_id){
                        $slider1Category = Category::where('id' , $this->category_id)->first();
            $slider2Category = $allCategories->where('id' ,'>' ,  $this->category_id)->sortBy('id')
                                     ->first();
           

        }else{
              $slider1Category = $allCategories->first();
            $slider2Category = $allCategories->skip(1)->first();
        }
      
        return view('components.service-page' , compact(['allCategories' , 'slider1Category' , 'slider2Category']))->layout('components.main-layout' , ["title" => "صفحه خدمات"]);
    }
}