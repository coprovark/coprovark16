@extends('layouts.main')
@section('content')


<h1 class="page-header">ลงทะเบียน</h1>


<form action="/form_register_save" method="post">
    
    
    <div class="radio">
        
        <b> ประเภทผู้ใช้งาน : 
        
        
         <label>   <input type="radio" name="users_id" id="1" value="1" checked>
             นักเรียน
        </label>
    
        <label>
            <input type="radio" name="users_id" id="2" value="2">
            นักศึกษา
        </label>
    
        <label>
            <input type="radio" name="users_id" id="3" value="3" >
            ครู/อาจารย์
        </label>
        
    </div>
    <div class="form-group">
            <label>รหัสนักศึกษา : </label> 
            <label><input type="int" name="User_code" class="form-control"  placeholder="รหัสนักศึกษา"></label>    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>เลขที่บัตรประจำตัวประชาชน : </label> 
            <label><input type="int" name="User_idcode" class="form-control"  placeholder="เลขที่บัตรประจำตัวประชาชน"></label>    
    </div>
    <div class="form-group">
            <label>ชื่อ-นามสกุล : </label> 
            <label><input type="varchar" name="User_fullname" class="form-control"  placeholder="รหัสนักศึกษา"></label>    
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>ชื่อเล่น : </label> 
            <label><input type="varchar" name="User_name" class="form-control"  placeholder="เลขที่บัตรประจำตัวประชาชน"></label>    
    </div>
    <div class="form-group">
        <label>สาขา :</lable> 
        <label>
            <select id="Title" name="major_code" class="form-control input-sm" data-live-search="true" title="Please select">
                    <option value="1">มัลติมีเดียและแอนิเมชันเทคโนโลยี</option>
                    <option value="2">วิศวกรรมซอฟต์แวร์</option>
                    <option value="3">วิทยาการคอมพิวเตอร์</option>      
            </select>
        </lable>
    </div> 
    <div class="form-group"> 
        <label>คณะ :</lable> 
        <label>
            <select id="Title" name="faculty_code" class="form-control input-sm"  title="Please select">
                    <option value="1">วิทยาการคอมพิวเตอร์</option>
                    <option value="2">เทคโนโลยีอุตสาหกรรม</option>
                    <option value="3">ครุศาสตร์</option>      
            </select>
        </lable>
    </div>
    
    <div class="form-group">
            <label>ชั้นปี : </label> 
            <label><input type="varchar" name="level_di" class="form-control"  placeholder="ชั้นปี"></label>    
            &nbsp;&nbsp;&nbsp;
            <label>เกรดเฉลี่ย : </label> 
            <label><input type="varchar" name="copro_grade" class="form-control"  placeholder="เกรดเฉลี่ย"></label>
            <label>สถาบัน : </label> 
            <label><input type="varchar" name="institution_code" class="form-control"  placeholder="สถาบัน"></label>
    </div> 
    <div class="radio">
        
        <b> ประเภทนักศึกษา : 
        
        <label>
            <input type="radio" name="userstype_id" id="1" value="1" checked>ปกติ
        </label>
    
        <label>
            <input type="radio" name="userstype_id" id="2" value="2">กศ.บป
        </label>
    
        <label>
            <input type="radio" name="userstype_id" id="3" value="3" >กศ.อศ
        </label>
    </div>  
        <div class="mtm mbs _2_68">
        <label>วันเกิด : </label>
        <span class="_5k_4" data-type="selectors" data-name="copro_Bdate" id="u_0_11">
         <span>
            <select aria-label="&#xe27;&#xe31;&#xe19;" name="brithDay_day" id="day" title="&#xe27;&#xe31;&#xe19;" class="_5dba">
                <option value="0">วัน</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
            <select aria-label="&#xe40;&#xe14;&#xe37;&#xe2d;&#xe19;" name="brithDay_month" id="month" title="&#xe40;&#xe14;&#xe37;&#xe2d;&#xe19;" class="_5dba">
                <option value="0">เดือน</option>
                <option value="1">ม.ค.</option>
                <option value="2">ก.พ.</option>
                <option value="3">มี.ค.</option>
                <option value="4">เม.ย.</option>
                <option value="5">พ.ค.</option>
                <option value="6">มิ.ย.</option>
                <option value="7">ก.ค.</option>
                <option value="8">ส.ค.</option>
                <option value="9">ก.ย.</option>
                <option value="10">ต.ค.</option>
                <option value="11">พ.ย.</option>
                <option value="12">ธ.ค.</option>
            </select>
            <select aria-label="&#xe1b;&#xe35;" name="brithDay_year" id="year" title="&#xe1b;&#xe35;" class="_5dba">
                <option value="0">ปี</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
            </select>
        </span>
        </span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>อายุ : </label>
      <label><input type="varchar" name="copro_Age" class="form-control"  placeholder="อายุ"></label> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b> Learning Style : 
        
        <label>
            <input type="radio" name="copro_learn" id="1" value="1" checked>V
        </label>
    
        <label>
            <input type="radio" name="copro_learn" id="2" value="2">A
        </label>
    
        <label>
            <input type="radio" name="copro_learn" id="3" value="3" >R
        </label>

         <label>
            <input type="radio" name="copro_learn" id="3" value="4" >K
        </label>

         <label>
            <input type="radio" name="copro_learn" id="3" value="5" >Model
        </label>
    </div>
    


    <div>  
            <label>Username</label>
            <input type="text" name="username" class="form-control"  placeholder="Username">
    </div>
    <div>
      <label >Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
    </div>
    <div>  
        <lable>
            <select id="Title" name="status" class="Title" data-live-search="true" title="Please select">
                    <option value="1">admin</option>
                    <option value="2">ceo</option>
                    
            </select>
        </lable>
    </div>

    <button type="submit" class="btn btn-success">ลงทะเบียน</button>
    <button type="reset" class="btn btn-default">Reset</button>
</form>



@endsection
