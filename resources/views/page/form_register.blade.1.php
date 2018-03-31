@extends('layouts.main')
@section('content')


<h1 class="page-header">ลงทะเบียน</h1>

<form action="/form_register_save" method="post">
    
    
    <div class="radio">
        <label>
            ประเภทผู้ใช้งาน
        </label>
        <label>
            <input type="radio" name="users_id" id="1" value="1" checked>
             นักเรียน
        </label>
    
        <label>
            <input type="radio" name="users_id" id="2" value="2">
            นักศึกษา
        </label>
    
        <label>
            <input type="radio" name="users_id" id="3" value="3" >
            ครู/อาจารย์
        </label>
    </div>
    <div class="form-group">
            <label>รหัสนักศึกษา</label> 
            <input type="int" name="User_code" class="form-control"  placeholder="ID">   
    </div>
    <div class="form-group">
            <label>เลขที่บัตรประจำตัวประชาชน</label> 
            <input type="int" name="User_idcode" class="form-control"  placeholder="ID">   
    </div>
    <div>  
            <label>Username</label>
            <input type="text" name="username" class="form-control"  placeholder="Username">
    </div>
    <div>
      <label >Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
    </div>
    <div>  
        <lable>
            <select id="Title" name="status" class="Title" data-live-search="true" title="Please select">
                    <option value="1">admin</option>
                    <option value="2">ceo</option>
                    
            </select>
        </lable>
    </div>
    <button type="submit" class="btn btn-success">ลงทะเบียน</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>



@endsection
