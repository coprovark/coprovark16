@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>สมาชิก</h1>
<hr>

<div>
<label>
<form action="/list_users_find" method="post">
<label><input type="text" name="find" value="{{ $find }}" class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></label>
</form><br>
<button type="button" class="btn btn-primary" ><i class="glyphicon glyphicon-plus"></i>เพิ่ม</button>


</div>

<table width="50%">
    <tr>
        <td bgcolor="878787"><i class="glyphicon glyphicon-inbox"></i>ID</td>
        <td><i class="glyphicon glyphicon-user"></i>User Name</td>
        <td><i class="glyphicon glyphicon-lock"></i>Password</td>
        <td><i class="glyphicon glyphicon-inbox"></i>Status</td>
        <td> &nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-cog"></i></td>
    </tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->status}}</td>
        <td><div class="btn-group"><P Align=center>
        <div class="btn-group">
  <button class="btn btn-primary" onclick="return _confirm('{{ $item->id }}')" type="button" >ลบ</button>
  <a href="/list_users_edit/{{ $item->id }}" class="btn btn-info">แก้ไข</a>
        </td>
    </tr>
    @endforeach
</table>

<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_users/'+id;
        }
    }
</script>

@endsection