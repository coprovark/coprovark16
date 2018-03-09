@extends('layouts.main')
@section('content')


<h1 class="page-header">Tran</h1>

<form>
     <div>
        <lable>
            <select id="Title" class="Title" data-live-search="true" title="Please select">
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
            </select>
        </lable>
    </div>
    <div>  
        <label>ชื่อ-สกุล
            <input type="name" class="form-control" id="exampleInputName" placeholder="ชื่อ-สกุล">
    </label>
    </div>

    <div >
            <label>เพศ</label>
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">ชาย</label>
        
        
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">หญิง</label>
        
          </div>
          
          <div>  <label>เบอร์โทร
                <input type="namber" class="form-control" id="exampleInputNumber" placeholder="Number">
        </label>
        <div> 
          <label>ที่อยู่ </label>
          <textarea name="address" id="address" cols="50" rows="2"placeholder="address"></textarea>
        </div> 


        <div>  
            <label>Email
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="e-mail">
        </label>
        </div>

    <div class="form-group">
      <label >Password
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </label>
    </div>
    
    <div>
            <label>Repassword
            <input type="repassword" class="form-control" id="exampleInputRepassword1" placeholder="Repassword">
        </label>  
        </div>

    <div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" id="exampleInputFile">
      <p class="help-block">Example block-level help text here.</p>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox"> Check me out
      </label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset" class="btn btn-default">Reset</button>
  </form>



@endsection