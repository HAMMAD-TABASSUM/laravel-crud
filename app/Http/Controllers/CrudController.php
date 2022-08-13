<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    public function create(Request $request)
    {
        $create = new Crud;
        $create->name=$request->input('name');
        $create->image=$request->input('image');
        $create->save();
        return $create;
    }

    public function read()
    {
        return Crud::all();
    }

    public function update($id, Request $request)
    {
        $update = Crud::find($id);
        $update->name=$request->input('name');
        $update->image=$request->input('image');
        $update->save();
        return $update;
    }

    public function delete($id)
    {
        $delete=Crud::find($id);
        $delete->delete();
    }
}
