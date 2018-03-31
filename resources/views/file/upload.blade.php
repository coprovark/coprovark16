<style>
    body{
        background-image:url('img/back.jpg');
        background-size:cover;
        background-attachment:fixed;
    
    }  
</style>   


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<br><bR><br>
<div class="container">
<div><a type="button" class="btn btn-primary" href="/upload1">Primary</a><div>
<br><br>
<div>
<form action="/upload_find" method="post">
<label><input type="text" name="find" value="" class="form-control mr-sm-2" type="search" placeholder="Search"></label>
      <button class="btn btn-info" type="submit">Search</button>
</form><br>
</div>

<div="row">
    <div class="col-sm-3" style="background-color:#ffffff;" >
        @if(count($edit) == 0  )
        <form action="/upload1" method="post" enctype="multipart/form-data">
            <center><h3>บันทึกรูปภาพ</h3></center>
            <input type="text" name="uploadfilename" class="form-control"><br>
            <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
            <center> 
                <img id="view" src="img/40974-200.png" style="width: 120px;"  />
            </center>
            <br><br>
            <input type="submit" value="upload" class="btn btn-primary btn-block">
        </form>
        @elseif(count($edit) > 0)
            @foreach($edit as $row)
            <form action="/update123" method="post" enctype="multipart/form-data">
                <center><h3>บันทึกรูปภาพ</h3></center>
                <input type="hidden" name="ID" value="{{$row->ID}}">
                <input type="text" name="uploadfilename" class="form-control" value="{{$row->FileName}}"><br>
                <input type="file" id="pathphoto" name="uploadfile" class="form-control" accept="image/*"><br>
                <center>
                    <img id="view" src="{{asset('upload/'.$row->FilePath)}}" style="width: 120px;" class="img-thumbnail"/>
                </center>
                <br><br>
                <input type="submit" value="upload" class="btn btn-success btn-block">
            </form>
            @endforeach
        @endif
    </div>
    <div class="col-md-8 col-md-offset-1" style="background-color:#eeeeee;">

        <table class="table">
            <thead>
                <tr>
                 <th></th>
                    <th><h3>ชื่อไฟล์</th>
                    <th><h3>ขนาดไฟล์</th>
                    <th><h3>ประเภทไฟล์</th>
                    <th><h3>Path File</th>
                    <th><h3>Downalod</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datatable as $row)
                <tr>
                    <td>
                        @if($row->FileType == 'png' OR $row->FileType == 'jpeg')
                            <!-- <img src="upload/{{$row->FilePath}}" width="60px"> -->
                            <img src="{{ asset('upload/'.$row->FilePath)}}" width="60px">
                            
                        @endif
                    </td>
                    <td>{{ $row->FileName }}</td>
                    <td>{{ $row->FileSize }} KB</td>
                    <td>{{ strtoupper($row->FileType) }}</td>
                    <td>{{ $row->FilePath }}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="dl/{{$row->FilePath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new">Download</a>
                        <a class="btn btn-xs btn-danger" href="rm/{{$row->ID}}">Delete</a>
                        <a class="btn btn-xs btn-warning" href="{{url('ed/'.$row->ID)}}">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    </div><br>
@foreach($datatable as $row)
    <div ="row" >
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
            @if($row->FileType == 'png' OR $row->FileType == 'jpeg')
                            <!-- <img src="upload/{{$row->FilePath}}" width="200px"> -->
                            <img src="{{ asset('upload/'.$row->FilePath)}}" width="300px"  height="300px">
                            
              @endif
      <div class="caption">
        <h3>{{ $row->FileName }}</h3>
        <p><b>ขนาดไฟล์ :</b> {{ $row->FileSize }} KB<br>
        <b>ประเภทไฟล์ :</b> {{ strtoupper($row->FileType) }}<br>
        <b> Path File :</b> {{ $row->FilePath }}
        </p>
        <p><a class="btn btn-xs btn-info" href="dl/{{$row->FilePath}}/{{ $row->FileName }}.{{ $row->FileType }}" target="new">Download</a> 
        <a class="btn btn-xs btn-danger" href="rm/{{$row->ID}}">Delete</a>
        <a class="btn btn-xs btn-warning" href="{{url('ed/'.$row->ID)}}">Edit</a>
        </p>
      </div>
    </div>
  </div>
</div>
@endforeach