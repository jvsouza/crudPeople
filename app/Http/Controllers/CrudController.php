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

    public function edit( $username )
    {
        $people = People::where('username', $username) -> first();
        return view('peoples.form', ['people' => $people]);
    }

    public function add( Request $request )
    {
        $request -> validate([
             'username' => 'required|unique:People',
           'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $people = new People;
        $people = $people->create( $request->except(['_token']) );
        return Redirect::to('/peoples');
    }
    
    public function update( $username, Request $request )
    {
        $request -> validate([
           'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $people = People::where('username', '=', $username);
        $people->update( $request->except(['_token']) );
        return Redirect::to('/peoples');
    }

    public function delete( $username )
    {
        $people = People::where('username', '=', $username);
        $people->delete();
        return Redirect::to('/peoples');
    }

}
