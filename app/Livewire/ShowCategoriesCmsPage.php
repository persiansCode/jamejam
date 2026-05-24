<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use function Laravel\Prompts\title;

class ShowCategoriesCmsPage extends Component
{
     use WithPagination;
    
    // حتماً از protected استفاده کن
    protected $paginationTheme = 'tailwind'; // یا 'bootstrap'
  
    public $category_id = null;

  protected function getListeners()
    {
        return [
            'toggle-status' => 'toggleStatus',
         
        ];
    }
    
    public function mount($itemId, $checked = false)
    {
           
        $this->itemId = $itemId;
        $this->checked = $checked;
    }
     public function setCategory($id)
    {
        $this->category_id = $id;  // چون داده به صورت آرایه می‌آید
        // یا اگر مستقیم بیاید: $this->category_id = $id;
      
       
       dd("hi" . $this->category_id);  
    }
    public function toggleStatus($id)
    {
       
    
     $item =  Category::where("id" , $id)->first();
     
     if($item->status){
         $item->status = 0 ; 
     }else{
         $item->status = 1 ; 

     }
    
     $item->save();
      return redirect()->route('cms.show-caregories')
        ->with([
            'swal_title' => 'موفقیت!',
            'swal_text' => ' وضعیت دسته بندی عوض شد! ',
            'swal_icon' => 'success'
        ]);
    }

    public function deleteItem($id){
                
   
    try {
        $category = Category::find($id);
        
        if ($category) {
            // حذف عکس‌های مربوطه (اگر نیاز است)
            // Storage::delete($category->image);
            
            $category->delete();
            
            // ریست کردن صفحه به 1
            $this->resetPage();
            
            // ارسال پیام موفقیت
            $this->dispatch('show-delete-swal');
            
            // رفرش کردن صفحه‌بندی
            $this->render();
        }
    } catch (\Exception $e) {
        $this->dispatch('show-error-swal', message: $e->getMessage());
    
     }
        
    
    }
public function render()
    {
         
        
         $categories = Category::orderBy('created_at', 'asc')->paginate(10)->withQueryString();
       
         
        return view('components.show-categories-cms-page'  , compact(["categories"]))->layout('components.main-layout' , ["title" => " نمایش دسته بندی ها"]);
    }
 
}