<?php

namespace App\Http\Controllers;

// incluir input y validator
use Input;
use Validator;

use App\Models\User;
use App\Models\Login;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\RedirectResponse;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //Cuando pulsas el botón de registrarse, primero, dejamos un validador de datos. mientras puedes dejarlo opcional.
        $validator = Validator::make(Request::all(), 
        [
            'username' => 'required|max:100',
            'password' => 'required|min:6'
        ]);
        //Preguntamos si el validador falla.
        if ($validator->fails()) 
        {
            return "Los datos ingresados fallan";
        }
        //Si los datos están buenos
        //Los guardamos.
        
        \App\User::create([
            'name'=> $request["username"],
            'password'=> bcrypt($request["password"]),
            ]);

        return "Los datos serán guardados";

        //Tu tarea acá, será investigar cómo guardar los datos en la base de datos que configures.
        
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
        return "Edit";
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
