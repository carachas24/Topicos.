<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index(Request $request)
    {   

        //return User::where('id', auth()->id())->get();

        if($request->ajax()){
            return User::where('id', auth()->id())->get();
        }else{
            return view('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->name = $request->name;
        $users->lastname = $request->lastname;
        $users->cedula = $request->cedula;
        $users->telefono = $request->telefono;
        $users->email = $request->email;
        $users->avatar = $request->avatar;
        $users->id = auth()->id();

        $users->save();
    
        return $users;
    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $users = User::find($id);
    $users->name = $request->name;
    $users->lastname = $request->lastname;
    $users->cedula = $request->cedula;
    $users->telefono = $request->telefono;
    $users->email = $request->email;
    $users->avatar = $request->avatar;
    $users->save();
    return $users;
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
