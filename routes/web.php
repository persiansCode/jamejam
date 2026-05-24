<?php

use App\Livewire\ConsultationCmsPage;
use App\Livewire\CraeteCategoriesCmsPage;
use App\Livewire\CraeteImagesCmsPage;
use App\Livewire\FirstPage;
use App\Livewire\LoginCmsPage;
use App\Livewire\ServicePage;

use App\Livewire\ShowCategoriesCmsPage;
use App\Livewire\ShowCategoriesPage;
use App\Livewire\ShowImagesCmsPage;
use App\Models\Consultation;
use Illuminate\Support\Facades\Route;
Route::middleware(['web'])->group(function(){
  Route::get('/', FirstPage::class);
Route::get('/service', ServicePage::class)->name('service-page');
Route::get('/categories', ShowCategoriesPage::class)->name('categories-page');

Route::get('/login', LoginCmsPage::class)->name("login-page");  
});


Route::middleware(['web' , 'auth.cms'])->prefix("cms")->group(function(){
    

    Route::get('/show-consultation', ConsultationCmsPage::class)->name("cms.show-consulation");;

    Route::get('/show-images', ShowImagesCmsPage::class)->name("cms.show-images");;
    Route::get('/show-categories', ShowCategoriesCmsPage::class)->name("cms.show-caregories");
    Route::get('/create-images', CraeteImagesCmsPage::class)->name("cms.create-images");
    
    Route::get('/create-categories', CraeteCategoriesCmsPage::class)->name("cms.create-categories");
    
});

