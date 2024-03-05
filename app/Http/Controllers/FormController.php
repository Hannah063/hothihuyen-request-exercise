<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public $data = [];
    public function post(Request $request){
        $this->data['name'] = $request->input('name');
        $this->data['userName'] = $request->input('username');
        $this->data['password'] = $request->input('password');
        return view('result', $this->data);
    } 

    public function store(Request $request){
        dd($request->query('id'));
    } 

}
