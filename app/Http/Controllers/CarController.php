<?php
namespace App\Http\Controllers;
use App\file;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //สืบทอดคุณสมบัติ
//use Illuminate\Support\Facades\DB;//ไลบรารีเชื่อมฐานข้อมูล
use DB;
use Illuminate\Routing\UrlGenerator;
class CarController extends Controller
{
    public function show(Request $request)
    {
        $nameUser = $request->input('nameUser'); 
        $passwordUser = $request->input('passwordUser'); 
        

        $array = [
            "nameUser" => $nameUser ,
            "passwordUser"  => $passwordUser
        ];

        return view('Usedcar.login',$array);
 
    }
    
    public function form_login(Request $req){
        
        $nameUser == $req ->input('nameUser');
        $passwordUser == $req->input('passwordUser');  

        $user = DB::select('select * from users where username = ? and password = ?', 
        [$req[''],$req['']]
        );
        foreach ($nameUser as $value){
        if($nameUser==$value->nameUser){
            if($passwordUser==$value->passwordUser){
                $data['status'] ="true";
            }
        }
    }
        return view('Usedcar.login',['user'=>$user]);
        }
    

        public function form_check_login(Request $req){
            $users = DB::select('select * from users where username = ? and password = ?', 
            [$req[''],$req['']]
            );
            return view('Usedcar.home',['user'=>$user]);
            }

        

        public function profile_login(Request $res){
            $users = DB::table('user')->where([
                ['nameUser','=',$res['nameUser']],
                ['passwordUser','=',$res['passwordUser']]
            ])->get();
            $namr='';
            foreach($users as $value){
                $name = $value->id;

            }
            $res['name']=$name;

            return view('Usedcar.login',$res);

        }

}//end class