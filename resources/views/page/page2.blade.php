@extends('layouts.main')
@section('title','Page Title')
<h1>Page</h1>
@section('content')

    <p>This is my body content.</p>
    User:Jutamatm Gunkam<br>
    CO Provark16<br>
    <h1>page3</h1>
    <form action="/page11" method="post">
    <!-- <input type="text" name="name"> -->
            
           
            <input type="password" name="passwords"><br>


    <input type="submit"value="ส่งค่า">
    </from>
@endsection