<?php

namespace App\Livewire;

use App\Http\Image\ImageService;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ConsultationCmsPage extends Component
{
    use WithPagination;
 
    public function render()
    {
        $consultations = Consultation::orderBy('created_at' , 'asc')->paginate(2)->withQueryString();
        return view('components.show-consultation-cms-page' , compact('consultations'))->layout('components.main-layout', ["title" => " نمایش مشاوره ها "]);
    }
}