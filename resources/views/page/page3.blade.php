@extends('layouts.main')
@section('title','Page Title')
<h1>Page</h1>
@section('content')
<form action="/page12" method="post">
<select name="select">
                <option value="MR">นาย
                <option value="MRS">นาง
                <option value="MISS">นางสาว
</select> 
<input type="submit"value="ส่งค่า">           
    <p>This is my body content.</p>
    User:Jutamatm Gunkam<br>
    CO Provark16<br>
    <h1>page3</h1>
</from>
@endsection