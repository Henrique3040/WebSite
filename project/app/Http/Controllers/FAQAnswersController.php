<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ_answers;
use App\Models\FAQ;

class FAQAnswersController extends Controller
{
    //

    public function store(Request $request){

       

        $data = $request -> validate([
            'answer' => 'required',
            'FAQ_id' => 'required'
        ]);

        $data['FAQ_id'] = $request->FAQ_id;
        $newanswer = FAQ_answers::create($data);

        return redirect(route('FAQ_Admin'));
    }

    public function destroy($id){
        FAQ_answers::where('id', $id)->delete(); 
        return redirect(route('FAQ_Admin'));
    }

    public function update(Request $request, FAQ_answers $answer){

        $data = $request -> validate([
            'answer' => 'required'
        ]);

        $answer->update($data);
        return redirect(route('FAQ_Admin'));
    }
}
