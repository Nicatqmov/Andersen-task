<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Requests\UserFormRequest;
use App\Models\Form as FormModel;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserFormRequest $request)
    {
        $request = FormModel::create($request->all());
        return redirect()->route('form')->with('success', 'Form submitted successfully');
    }
}
