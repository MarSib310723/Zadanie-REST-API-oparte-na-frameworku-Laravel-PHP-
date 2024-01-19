<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peoples;

class PeoplesController extends Controller
{
    //

    public function adding(Request $request)
    {
        $items=new Peoples();
        $items->name= $request->name;
        $items->surname= $request->surname;
        $items->phonenumb= $request->phonenumb;
        $items->street= $request->street;
        $items->city= $request->city;

        $items->save();
        return response()->json('Added Successfully');
    }
    public function edit(Request $request)
    {
        $items = Peoples::findorfail($request->id);
        $items->name= $request->name;
        $items->surname= $request->surname;
        $items->phonenumb= $request->phonenumb;
        $items->street= $request->street;
        $items->city= $request->city;

        $items->update();
        return response()->json('Edited Successfully');
    }
    public function delete(Request $request)
    {
        $items = Peoples::findorfail($request->id)->delete();
        return response()->json('Deleted Successfully');

}
    public function getdata()
    {
        $items = Peoples::all();
        return response()->json($items);
    }
    public function getPerson($id)
    {
        $items = Peoples::find($id);
        return response()->json(['person'=>$items]);
    }   
}
