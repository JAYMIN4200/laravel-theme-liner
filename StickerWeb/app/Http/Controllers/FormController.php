<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'address' => 'required|string',
            'address2' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|numeric',
            'date' => 'required|date',
            'remember_me' => 'sometimes|boolean',
        ]);

        // dd($request->all());
        $form = new Form();
        $form->email = $validatedData['email'];
        $form->password = $validatedData['password'];
        $form->address = $validatedData['address'];
        $form->address2 = $validatedData['address2'];
        $form->city = $validatedData['city'];
        $form->state = $validatedData['state'];
        $form->zip = $validatedData['zip'];
        $form->date = $validatedData['date'];
        $form->remember_me = $request->has('remember_me');
        $form->save();

        return redirect()->route('form.view')->with('success', 'Data Registered Successfully');
    }

    public function view(){
        $forms = Form::orderby('created_at','DESC')->get();
        return view('view',compact('forms'));
    }

    public function edit(Request $request,$id){
        $form = Form::findorfail($id);
        return view('form',compact('form'));
    }

    public function update(Request $request,$id){

        $form = Form::findorfail($id);
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
            'address' => 'required|string',
            'address2' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|numeric',
            'date' => 'required|date',
            'remember_me' => 'sometimes|boolean',
        ]);

        // dd($request->all());
        $form->email = $validatedData['email'];
        $form->password = $validatedData['password'];
        $form->address = $validatedData['address'];
        $form->address2 = $validatedData['address2'];
        $form->city = $validatedData['city'];
        $form->state = $validatedData['state'];
        $form->zip = $validatedData['zip'];
        $form->date = $validatedData['date'];
        $form->remember_me = $request->has('remember_me');
        $form->save();

        return redirect()->route('form.view')->with('success', 'Data Updated Successfully');

    }

    public function delete($id){
        $form = Form::findorfail($id);
        $form->delete();
        return redirect()->route('form.view')->with('success', 'Data Deleted Successfully');
    }
}

