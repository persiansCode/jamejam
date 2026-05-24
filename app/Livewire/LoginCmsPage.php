<?php

namespace App\Livewire;

use App\Models\Consultation;
use Illuminate\Container\Attributes\Auth;
use Livewire\Component;

class LoginCmsPage extends Component
{
    public $password= null ; 
    public $email= null ; 
 protected $rules = [

     'email' => 'required|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
       'password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/'

    ];
     protected $messages = [
        'password.required' => 'رمز عبور الزامی است',
        'password.min' => 'رمز عبور باید حداقل ۸ کاراکتر باشد',
        'password.regex' => 'رمز عبور باید شامل حروف بزرگ، حروف کوچک، اعداد و کاراکترهای خاص (@$!%*#?&) باشد',
    ];
    public function submit(){
        $this->validate();
       $login =  \Auth::attempt(['email' => $this->email, 'password' => $this->password]);
      if($login){
          return redirect()->route('login-page')
        ->with([
            'swal_title' => 'موفقیت!',
            'swal_text' => ' شما با موفقیت وارد شدید هم اکنون از دکمه پنل مدیریت بالای صفحه میتوانید به پنل ادمین وارد شوید ',
            'swal_icon' => 'success'
        ]);
      }
    }

    public function render()
    {
        return view('components.login-cms-page')->layout('components.main-layout' , ["title" => "صفحه ورود"]);
    }
}