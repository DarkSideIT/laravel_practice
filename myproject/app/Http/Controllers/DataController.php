<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DataController extends Controller
{
    public function showForm(){
        return view('form');
    }


    public function processData(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer',
            'univercity' => 'required|string|max:255',
            'faculty' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/form')
                ->withErrors($validator)
                ->withInput();
        }


        $data = $request->all();
        $fileName = uniqid('data_') . '.json';
        Storage::put('data/' . $fileName, json_encode($data));

        
        return redirect('/form') -> with('success', 'Data uploaded successfully!');
    }


    public function showDataTable(){
        $files = Storage::files('data');
        $data = [];


        foreach ($files as $file) {
            $data[] = json_decode(Storage::get($file), true);
        }


        return view('data_table', ['data' => $data]);
    }
}
