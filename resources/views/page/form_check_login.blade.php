@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <form action="/form_check_login" method="post">
                        <div class="form-group">
                                <label>username</label>
                                <input type="text" name="username">
                        </div>
                        <div class="form-group">
                                <label>password</label>
                                <input type="password" name="password">
                        </div>
                        <button type="submit" >login</button>
    </form>
<hr>
@foreach ($users as $user) 
    {{ $user->id}}
@endforeach
@endsection
