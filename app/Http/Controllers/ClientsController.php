<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function store(Request $request){
      Clients::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'phone'=>$request->phone,
          'file'=>$request->file 
       ]);
       return back()->with('msg', 'Your application has been sent successfully!');
      return $request->file('file')->store('public/uploads'); 
    }
}
