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
                        <div class="form-check">
                                 <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                 <label class="form-check-label" for="dropdownCheck"> Remember me</label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
    </form>
<hr>

<h3>User name</h3>  <h5>{{$username}}</h5>
<h3>ID</h3>         <h5>{{$name}}</h5>

@endsection
