<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\UserControler;
use Auth;

class UserControler extends Controller
{
    public function mostrar(){
        $id = Auth::id();
        $res = User::where('id',$id)->get();
        return view("perfil", ["res"=>$res, "id"=>$id]);
    }
    public function mostrarusuarios(){
        $id = Auth::id();
        $res = User::where('id',$id)->get();
        $user = User::get();
        return view("usuarios", ["res"=>$res, "id"=>$id,"user"=>$user]);
    }
    
    public function mostraradm(){
        $id = Auth::id();
        $res = User::where('id',$id)->get();
        $user = User::get();
        return view("vadmi", ["res"=>$res, "id"=>$id,"user"=>$user]);
    }

  /**
 *   public function fotoperfil(Request $data){
  *      $data->validate(
   *         [
    *            'txtName'=>'required | min:3 | max:50',
     *           'txtMsg'=>'required | min:3 | max:500',
      *          'img' =>'mimes:jpeg,bmp,png,jpg | max:2048',
       *     ]


 */


    
    
}
    