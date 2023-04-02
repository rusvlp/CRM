<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function leads(){


        $leads = Lead::all();
        return view('leads.leads', ['leads'=>$leads]);
    }

    public function createPage()
    {
        return view('leads.create');
    }

    public function createLead(Request $request){
        $lead = new Lead();
        $lead-> created_at = Carbon::now();
        $lead-> user_id = $request -> input("user_id");
        $lead-> department_id = $request -> input("user_id");
    }

    public function create(Request $request){

    }
}
