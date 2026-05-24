<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Images;
use Livewire\Component;
use Livewire\WithPagination;

class ShowImagesCmsPage extends Component
{
    use WithPagination; // 🔴 این خط را اضافه کنید
        protected $paginationTheme = 'tailwind'; // یا 'bootstrap'
        public $search = "" ; 

          public function updatedSearch()
    {
        // این متد بعد از هر بار بروزرسانی $search اجرا می‌شود
        $this->resetPage(); // صفحه‌بندی را ریست می‌کند
    }
    
  protected function getListeners()
    {
        return [
            'toggle-status' => 'toggleStatus',
         
        ];
    }
    
    public function toggleStatus($id)
    {
       
     $item =  Images::where("id" , $id)->first();
     
     if($item->status){
         $item->status = 0 ; 
     }else{
         $item->status = 1 ; 

     }
    
     $item->save();
      return redirect()->route('cmd.show-images')
        ->with([
            'swal_title' => 'موفقیت!',
            'swal_text' => ' وضعیت  عکس عوض شد! ',
            'swal_icon' => 'success'
        ]);
    }

    public function deleteItem($id){
                
     $item =  Images::where("id" , $id)->delete();
     if($item){
      return $this->dispatch("show-delete-swal");
     }}
    public function render()
    {

        $images = Images::when($this->search , function($query){
            $query->where("title" , 'like' , '%' . $this->search . '%');
        })->paginate(10)->withQueryString();
         $categories = Category::orderBy('created_at', 'asc')->get();
          
        

        return view('components.show-images-cms-page' , compact(['images', 'categories']))->layout('components.main-layout' , ["title" => "صفحه نمایش عکس ها"]);
    }
}

