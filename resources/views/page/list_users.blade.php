@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List User</h1>
<hr>




<table width="50%">
    <tr border="1">
        <td><i class="glyphicon glyphicon-inbox"></i>ID</td>
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
        <td><div class="btn-group">
                <button type="button" class="btn btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="glyphicon glyphicon-option-horizontal"></i>
                </button>
                <div class="dropdown-menu">
                <h4>
                <div><a class="dropdown-item" href="#"><P Align=center><i class="glyphicon glyphicon-pencil"></i> เพิ่ม</p></a></div>
                <br>
                <div><a class="dropdown-item" href="#"><P Align=center><i class="glyphicon glyphicon-erase"></i> แก้ไข</p></a></div>
                <hr>
                <div><a class="dropdown-item" href="#"><P Align=center><i class="glyphicon glyphicon-trash"></i> ลบ</p></a></div>
                </h4>
            </div>
        </td>
    </tr>
    @endforeach
</table>
@endsection