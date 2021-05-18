<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function index(){
        $users = DB::table('usersplayed')->get();
        return view('gewinner',['users'=>$users]);
    }
    
    public function check(){
        $userID = Auth::user()->id;
         $users = DB::select('SELECT *
            FROM
                users
                LEFT JOIN geschenkliste ON users.id = geschenkliste.id
            where
            users.id='.$userID.'');
        return view('gift',['users'=>$users]);
        
    }
    public function update(){
        $userID = Auth::user()->id;
        DB::update('update users set hat_gespielt = 1 where users.id = '.$userID.'');
        $users = DB::select('SELECT *
            FROM
                users
                LEFT JOIN geschenkliste ON users.id = geschenkliste.id
            where
            users.id='.$userID.'');
        sleep(8);
        return view('gift',['users'=>$users]);
    } 
    
    
}
