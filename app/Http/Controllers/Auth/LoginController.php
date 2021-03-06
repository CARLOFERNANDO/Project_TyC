<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    //use AuthenticatesUsers;
    
    //protected $redirectTo = '/home';

    /*public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/

    function __construct(){ //MIDDLEWARE para que verifique si esta autenticado y lo redireccione donde queramos
        $this->middleware('guest',['only'=>'showLoginForm']); //solo iran al login los usuarios no autenticados
        // el guest es un namespace de app\http\middleware\RedirectIfAuthenticated
    }
    function showLoginForm(){
        return view('login');
    }

    function login(){

        //nos devuelve en un ARRAY los datos de usuario y contraseña
        $credentials= $this->validate(request(),[ // tal ves no es muy importante ya que es requerido en el front
            'email'=>'email|required|string',
            'password'=>'required|string'
        ]);
        
        //devuelve un boolean accediando a la tabla users , si es que el usuario existe o no 
        if(Auth::attempt($credentials)){ //intentaremos iniciar la sesion del usuario
           
        }
        
        //retornar hacia atras con los errores si el usuario no es correcto
        return back()
        ->withErrors(['email'=>trans('auth.failed')])
        ->withInput(request(['email'])); //para pasarle al 'old' del html 
    }

    function logout(){
        Auth::logout();

        return redirect('/');
    }
}
