<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;

class Leads extends Component
{

    public function render()
    {
        $leads = Lead::all();

        return view('livewire.leads', ['leads'=>$leads]);
    }
}
