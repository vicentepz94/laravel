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
        $user = User::all();
        return view('registration.list' ,compact('user'));
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
        $user = new User(Request::all());
        $user->username = Input::get('username');
        //Si los datos están buenos
        //Los guardamos.

        //Para guardar el password, se debe, o se recomienda encriptarlo, y para laravel 5.1 se encripta así :
        $user->password = bcrypt(Input::get('password'));
         //Guardamos el usuario.
        $user->save();
        //Si los datos están buenos
        //Los guardamos.     
        return redirect()->route('login');
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

        $user = User::find($id);
        if (is_null($user))
       {
            return Redirect::route('registration.index');
        }
        //enviar info de la variable a la vista de registration/edit con compact('user')
         return view('registration.edit',compact('user'));
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
        $user = User::find($id);
        $user->username=Input::get('username');

        $password =Input::get('password');
        if($password!=null)
        {
            $user->password=Input::get('password');
        }
        
        $user->update(); 
        
        return redirect('registration');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = User::find($id);

        $u->delete();

        return redirect('registration');
    }
}
