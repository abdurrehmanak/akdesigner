<?php

namespace App\Http\Controllers;

use App\Employ;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\QueryException;

class WelcomeController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $employ = Employ::all();

        return view('crud', compact('employ'));
    }

    function add()
    {
        try {
            $employ = new Employ();
            $employ->emp_name = request('emp_name');
            $employ->salary = request('salary');
            $employ->save();
        } catch (QueryException $ex) {
            Session::flash('message', 'This is a message!');
        }

        return redirect('/welcome');
    }

    function edit($id)
    {
        $employ = Employ::find($id);
        $emp_name = $employ->emp_name;
        $salary = $employ->salary;
        $id = $employ->id;

        return view('edit', compact('emp_name', 'salary', 'id'));
    }

    function update($id)
    {
        try {
            $employ = Employ::find($id);
            $employ->emp_name = request('emp_name');
            $employ->salary = request('salary');
            $employ->save();
        } catch (QueryException $ex) {
            Session::flash('message', 'This is a message!');
        }
        return redirect('/welcome');

    }

    function delete($id)
    {
        $employ = Employ::find($id);
        $employ->delete($employ->id);

        return redirect('/welcome');
    }
}
