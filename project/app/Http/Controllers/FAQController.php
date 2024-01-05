<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\FAQ_answers;
class FAQController extends Controller
{
    //

    public function index(){
        $categories = FAQ::all();
        return view('FAQ.FAQsPage' ,['categories' => $categories]);
    }

    public function adminPage(){

        $categories = FAQ::all();
        return view('FAQ.FAQ_Admin',['categories' => $categories]);
    }

    public function store(Request $request){
       
        
        $data = $request -> validate([
            'category' => 'required'
        ]);

       
        $newFAQ = FAQ::create($data);
        return redirect(route('FAQ_Admin'))->with('success', 'FAQ is toegevoegd');

    }

    public function update(Request $request, FAQ $FAQ){

     
        $data = $request -> validate([
            'category' => 'required'
        ]);

        
        $FAQ->update($data);
        
        return redirect(route('FAQ_Admin'))->with('success', 'FAQ is geupdate');
    }

    public function destroy(FAQ $FAQ){
        FAQ_answers::where('id', $FAQ->id)->delete(); 

        $FAQ->delete();
        return redirect(route('FAQ_Admin'))->with('success', 'FAQ is verwijderd');
    }
}
