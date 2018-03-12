@extends('layouts.main')

@section('title', 'เข้าสู่ระบบ')

@section('content')
<h1>เข้าสู่ระบบ</h1>
<hr>
    <form action="/form_login2" method="post">
                        <div class="form-group">
                                <label>Username :</label>
                                <input type="text" name="username">
                        </div>
                        <div class="form-group">
                                <label>Password :</label>
                                <input type="password" name="password">
                        </div>
                        <button type="submit" >เข้าสู่ระบบ</button>
    </form>
<hr>

<h2>User name</h2>  
<h5>{{$username}}</h5>
<h2>ID</h2>  
<h5>{{$name}}</h5>

@endsection
