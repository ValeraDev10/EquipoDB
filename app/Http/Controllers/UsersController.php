<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function usindex()
    {
       //$usser = Users::all();
       $usser = Users::orderBy('id','asc')->paginate(5);
        return view('/auth/Usuarios', compact('usser')); 
    }

   
    public function uscreate()
    {
        return view('/auth/NewUser'); 
    }

    
    public function usstore(Request $request)
    {
        $users = new Users();
        $users->name = $request->post('name');
        $users->email = $request->post('email');
        $users->username = $request->post('username');
        $users->password = $request->post('password');
        $users->save();

        return redirect()->route("users.usindex")->with("success","El Usuario ha sido Creado");
    }

    
    public function usshow($id)
    {
        $users =  Users::find($id);
        return view('/auth/DeletUser', compact('users'));
    }

    
    public function usedit($id)
    {
        $users =  Users::find($id);
        return view('/auth/UpdateUser', compact('users')); 
        
    }

    
    public function usupdate(Request $request, $id)
    {
        $users =  Users::find($id);
        $users->name = $request->post('name');
        $users->email = $request->post('email');
        $users->username = $request->post('username');
        $users->updated_at = $request->post('updated_at');
        $users->save();

        return redirect()->route("users.usindex")->with("success1","El Usuario ha sido Actualizado");
    }

    
    public function usdestroy($id)
    {
        $users =  Users::find($id);
        $users->delete(); 
        return redirect()->route("users.usindex")->with("success2","El Usuario ha sido Eliminado");
    }
}
