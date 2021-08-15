<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\People;
use Redirect;

class CrudController extends Controller
{

    public function index()
    {
        if (Auth::check()) {
            return Redirect::to('/peoples');
        }else{
            return view('auth.login');
        }
    }

    public function list()
    {
    	$peoples = People::get();
        return view('peoples.list', ['peoples' => $peoples]);
    }

    public function new()
    {
        return view('peoples.form');
    }

    public function edit( $id )
    {
        $people = People::findOrFail($id);
        return view('peoples.form', ['people' => $people]);
    }

    public function add( Request $request )
    {
        $request -> validate([
             'username' => 'required|unique:people',
           'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $people = new People;
        $people = $people->create( $request->except(['_token']) );
        return Redirect::to('/peoples');
    }
    
    public function update( $id, Request $request )
    {
        $request -> validate([
           'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $people = People::findOrFail($id);
        $people->update( $request->except(['_token']) );
        return Redirect::to('/peoples');
    }

    public function delete( $id )
    {
        $people = People::findOrFail($id);
        $people->delete();
        return Redirect::to('/peoples');
    }

}
