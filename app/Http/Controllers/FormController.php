<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\UserFormRequest;
use App\Models\Form as FormModel;

class FormController extends Controller
{
    public function index()
    {
        $messages = FormModel::all();
        return view('base',compact('messages'));
    }

    public function store(UserFormRequest $request)
    {
        $message = FormModel::create($request->all());
        if($message){
            return redirect()->route('form')->with('success', 'Form submitted successfully');
        }

        return redirect()->route('form')->with('error','Unexpected error!');
    }

    public function edit($id){
        $message = FormModel::findOrFail($id);
        if($message){
            return view('base',compact('message'));
        }

        return redirect()->route('form')->with('error','Unexpected error!');
    }

    public function update(UserFormRequest $request){
        $message = FormModel::findOrFail($request->id);

        if($message){
            $message->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
            ]);

            return redirect()->route('form')->with('success','Message updated successfuly!');
        }

        return redirect()->route('form')->with('error','Unexpected error!');
    }

    public function destroy($id){
        $message = FormModel::findOrFail($id);
        if($message){
            $message->delete();
            return redirect()->route('form')->with('success','Message deleted successfuly!');   
        }

        return redirect()->route('form')->with('error','Unexpected error!');
    }
}
