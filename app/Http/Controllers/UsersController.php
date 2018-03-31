<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class UsersController extends Controller
{
    public function list_users()
    {
      $find = '';
      $users = DB::table('users')->select('*')->get();
      return view('page.list_users',[
        'data_list' => $users,
        'find'      => $find
      ]);
    }
    public function list_users_find(Request $req){
      $find = $req->find;
      $users = DB::table('users')
                  ->select('*')
                  ->where('id','=',$find)
                  ->get();
      return view('page.list_users',[
        'data_list' => $users,
        'find'      => $find
      ]);
    }
    public function delete_users($id){
      DB::table('users')->where('id', '=', $id)->delete();
      return redirect('list_users');
    }
    public function list_users_edit(Request $req){
      $find = $req->id;
      $user = DB::table('users')
                       ->select('*')
                       ->where('id','=',$find)
                       ->get();
      return view('page.list_users_edit',[
              'user'=>$user
      ]);
  }

  public function list_user_update(Request $req){
    $user_code      = $req->user_code;
    $user_name      = $req->user_name;
    $user_password  = $req->user_password;
    $data = [
        'username'=>$user_name,
        'password'=>$user_password,
    ];
    $status = DB::table('users')
                ->where('id', $user_code)
                ->update($data);
    return redirect('list_users');
}



    public function form_register_save(Request $req){
      
      $status = DB::table('users')->insert(
        //<input type="text" name="USERNAME" class="form-control">
        //<select name="STATUS" class="form-control">
        [
          'id'      => $req->ID,
          'username'=> $req->USERNAME,
          'password'=> $req->PASSWORD,
          'status'  => $req->STATUS
        ]
      );
      if($status){
         return redirect('list_users');
      }else{
         return "เกิดข้อผิดพลาด";
      }
     
    }
}