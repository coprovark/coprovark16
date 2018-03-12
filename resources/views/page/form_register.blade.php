@extends('layouts.main')
@section('content')


<h1 class="page-header">ลงทะเบียน</h1>

<form>
   

    <div>  
        <lable>
            <select id="Title" class="Title" data-live-search="true" title="Please select">
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
            </select>
        </lable>
        <label>ชื่อ-สกุล<input type="name" class="form-control" id="exampleInputName" placeholder="ชื่อ"></label>
        <label><input type="lastname" class="form-control" id="exampleInputLastName" placeholder="นามสกุล"></label>
    </div>

    <div >
            <label>เพศ</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">ชาย
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">หญิง
        
    </div>
          
    <div>  
      <label>เบอร์โทร</label>
      <input type="namber" class="form-control" id="exampleInputNumber" placeholder="Number">
    </div>    
        
    <div> 
          <label>ที่อยู่ </label><br>
          <textarea name="address" id="address" cols="28" rows="3"placeholder="address"></textarea>
    </div> 


    <div>  
            <label>Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="e-mail">
    </div>

    <div>
      <label >Password</label>
      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
    </div>
    
    <div>
            <label>Repassword</label> 
            <input type="repassword" class="form-control" id="exampleInputRepassword1" placeholder="Repassword">   
    </div>

    <div>
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
    </div>

    <div>
        <label><input type="checkbox"> ยืนยัน</label>
    </div>

    <button type="submit" class="btn btn-success">ลงทะเบียน</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>



@endsection