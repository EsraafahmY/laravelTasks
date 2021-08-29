<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public $name ;
    public $email;
  public function Message(){
      return 'From Controller';
  }


  public function register(){

    return view('register');
  }



  public function saveData(Request $request){
      $name = $request->name;
      $email = $request->mail;
        $data = $request->except('_token');

        foreach($data as $key => $value){

            echo '* '.$key.' : '.$value.'<br>';
        }

        
        
  
    }

    public function UserData(){

        return view('showData',compact($name , $email));
    }
}
