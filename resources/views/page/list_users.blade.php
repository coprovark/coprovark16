@extends('layouts.main')

@section('title', 'Page Title')

@section('content')

<h1>List User</h1>
<hr>
<table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>User Name</td>
        <td>Password</td>
        <td>Status</td>
    </tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->status}}</td>
    </tr>
    @endforeach
</table>
@endsection