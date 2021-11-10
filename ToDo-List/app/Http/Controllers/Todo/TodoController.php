<?php

namespace App\Http\Controllers\Todo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $veriler = Todo::get();
        return view('index',compact('veriler'));
    }

    public function todoCreate(Request $request)
    {
        $todo = new Todo;
        $todo->gorev = $request->gorev;
        $todo->save();

        return redirect()->route('index');
    }

    public function todoOkey(Request $request,$id)
    {   
        $güncel = Todo::findOrFail($id);
        $güncel->durum = "okey";
        $güncel->update();

        return redirect()->route('index');

    }
    public function todoLater(Request $request,$id)
    {   
        $güncel = Todo::findOrFail($id);
        $güncel->durum = "later";
        $güncel->update();

        return redirect()->route('index');

    }
    public function todoGerial(Request $request,$id)
    {   
        $güncel = Todo::findOrFail($id);
        $güncel->durum = "none";
        $güncel->update();

        return redirect()->route('index');

    }




    public function todoDelete($id)
    {
        $delete = Todo::find($id);
        Todo::where('id',$id)->delete();

        return redirect()->route('index');
    }
}
