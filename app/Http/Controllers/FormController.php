<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request){
        $request->validate([
            'name' => 'required|string',
            'birthday' => 'required|date',
            'weight' => 'required|numeric|between:2.5,99.99',
            'email' => 'required|email',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048'
        ]);

        $request->photo->storeAs('public/photos', $request->photo->getClientOriginalName());
        
        $result = [
            'name' => $request->name,
            'birthday' => $request->birthday,
            'weight' => $request->weight,
            'email' => $request->email,
            'photo' => $request->photo->getClientOriginalName()
        ];

        return redirect('/result')->with(['result' => $result, 'status' => 'Form submitted']);
    }

    public function result(){
        $result = session()->get('result');
        return view('result', ['result' => $result]);
    }
}
