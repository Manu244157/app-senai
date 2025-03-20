<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        //Mostrar a lista List pela Ordem Crescene de id
        $user = User::orderByDesc('id')->get();

        //Mostrar a lista List pela Ordem Crescene de id
        // $user = User::orderBy('id')->get();


        //Retorna a lista do user no index
        return view('user.valter', ['user' => $user]);
        
    }

    public function produtos(){

        
        $user = User::orderByDesc('id')->get();
        return view('user.produtos', ['user' => $user]); 
    }

    public function mali(){

        $user = User::orderByDesc('id')->get();
        return view('user.mali', ['user' => $user]);
        
    }

    public function inseticida(){

        $user = User::orderByDesc('id')->get();
        return view('user.inseticida', ['user' => $user]);
        
    }

    public function carregador(){

        $user = User::orderByDesc('id')->get();
        return view('user.carregador', ['user' => $user]);
        
    }
        
public function carrinhoMali(User $user){

    return view('user.carrinhoMali', ['user'=> $user]);
    
}

public function carrinhoInse(User $user){

    return view('user.carrinhoInse', ['user'=> $user]);
    
}

public function carrinhoCarre(User $user){

    return view('user.carrinhoCarre', ['user'=> $user]);
    
}
public function compra(User $user){

    return view('user.compra', ['user'=> $user]);
    
}
public function carrinhoVazio(User $user){

    return view('user.carrinhoVazio', ['user'=> $user]);
    
}

public function suporte(User $user){

    return view('user.suporte', ['user'=> $user]);
    
}
    public function create(){

        return view('user.create');
        
    }

    public function edite(User $user){

        return view ('user.edite', ['user' => $user]);

    }

    public function show(User $user){

        return view('user.show', ['user'=> $user]);
        
    }

    public function update(UserRequest $request , User $user){
        $request->validated();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('user.valter')->with('sucess', 'Usuário atualizado com sucesso');
    }


    public function valter(){
        $user = User::orderbyDesc('id')->get();

        return view('user.valter', ['user' => $user]);
        
    }
    
    //Validar formulário
    public function store(UserRequest $request){

    $request->validated();

    // Depurar valores do request
    // dd($request);
    
    //Inserir informações no BD
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);

    // Redirecionar para página e retornar mensagem ao cadastrar usuário
    return redirect()->route('user.valter')->with('sucess', 'Usuário cadastrado com sucesso!');
    
    }
}

?>

