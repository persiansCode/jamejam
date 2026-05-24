<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Images;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCategoriesPage extends Component
{
    use WithPagination; 
 #[Url]
  public $category_id = null;
   
    public function render()
    {
   $categories = Category::orderBy('created_at' , 'asc')->get();
        if($this->category_id){
                        $selectedCategory = Category::where('id' , $this->category_id)->first();
         

        }else{
 $selectedCategory = Category::orderBy('created_at' , 'asc')->first();
          
        }
      
        
         
       
        return view('components.show-categories-page' , compact(['categories' , 'selectedCategory']))->layout('components.main-layout' , ["title" => "صفحه نمایش عکس ها"]);
    }
}

