@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

page1


<form action="/page" method="post" >

    <input type="text" name="name" >

    <input type="hidden" name="hidden" value="1001">

    <input type="radio" name="radio" value="M"> ชาย 
    <input type="radio" name="radio" value="F"> หญิง 

    <br>
    <input type="submit" value="ส่งค่า">
    
</form>

<h2>แสดงค่า</h2>
ชื่อ = {{ $NAME }}<br>
รหัส = {{ $ID }}<br>
เพศ = {{ $GEN }}







@endsection