<?php

namespace App\Livewire;

use App\Models\Consultation;
use Livewire\Component;

class FirstPage extends Component
{
    public $phone = null ;
    public $description = null ;
    public $full_name = null ;
 protected $rules = [

        
        'description' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
     

'phone' => 'required|max:14|min:2|regex:/^[0-9+]+$/u',

        "full_name" => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',

    ];
        public function submit(){
                
      $this->validate();
        $consultation = Consultation::create(['full_name'=>$this->full_name , 'phone' => $this->phone , 'description' =>$this->description]);
       return $this->dispatch('create_consultation');
    }
    public function render()
    {
        return view('components.first-page')->layout('components.main-layout' , ["title" => "صفحه اصلی"]);
    }
}