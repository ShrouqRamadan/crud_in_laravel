<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;


class Admincontroller extends Controller
{
    
    public function index()
    {
        $admin=Admin::all();
        return view ("admin.index",compact('admin',$admin));
    }


    public function create()
    {
       return view("admin.create");
    }

   
    public function store(Request $request)
    {
       $admin=new Admin();
       $admin->name=$request->name;
       $admin->salary=$request->salary;
       $admin->save();
       return redirect('admin')->with("done","insert true");
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $admin=Admin::find($id);
        return view("admin.edit")->with('admin',$admin);

    }

   
    public function update(Request $request, $id)
    {
        $admin=Admin::find($id);
        $admin->name=$request->name;
        $admin->salary=$request->salary;
        $admin->save();
        return redirect('admin')->with("done","update true");
    }


    public function destroy($id)
    {
    $admin=Admin::find($id);
    $admin->delete();
    return redirect('admin')->with("done","delete true");

    }
}
