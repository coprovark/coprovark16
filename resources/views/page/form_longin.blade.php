@extends('layouts.main')
@section('content')


<h1 class="page-header">เข้าสู่ระบบ</h1>

<form>

        <div>  
            <label>User
                <input type="user" class="form-control" id="exampleInputUser" placeholder="User">
        </label>
        </div>

    <div class="form-group">
      <label >Password
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </label>
    </div>
    
    <button type="submit" class="btn btn-default">Longin</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>



@endsection