<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\FAQ_answers;

class EditFAQController extends Controller
{
    //

    public function index($id){   
        $categories = FAQ::find($id);
        return view('FAQ.editFAQ', ['categories' => $categories]);
    }
}
