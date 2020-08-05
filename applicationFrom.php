<?php require_once("header.php")?>

<div class="container p-5 bg-primary"> 
  
   <form>
     <div class="row pb-3">  
      <div class="col-md-3"> 
        <h5 class="eng"> Application Name :  <span class="red" >* </span> </h5>
      </div>
      <div class="col-md-8"> 
        <input class="form-control-lg  form-control" placeholder="প্রার্থীর নাম" type="text" required>
      </div>
      </div>
<div class="row pb-3">    
      <div class="col-md-3"> 
        <h5 class="eng"> Father's Name :  <span class="red" >* </span></h5>
      </div>
      <div class="col-md-8"> 
        <input class="form-control-lg form-control" placeholder="পিতার নাম" type="text" required>
      </div>
 </div>

 <div class="row pb-3">   
      <div class="col-md-3"> 
        <h5 class="eng"> Mother's Name :<span class="red" >* </span> </h5>
      </div>
      <div class="col-md-8 pb-3"> 
        <input class="form-control-lg form-control" placeholder="মাতার নাম" type="text" required>
      </div>
 </div>
 
 <div class="row pb-3">   
      <div class="col-md-3"> 
        <h5 class="eng"> Date of Birth :<span class="red" >* </span> </h5>
      </div>

      <div class="col-md-2 pb-3"> 

     
            <select name="b_day" class="form-control" id="b_day">
              <option value="0" selected="selected">দিন</option>
				<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>
      </div>

      <div class="col-md-2 pb-3"> 
<select name="Month" class="form-control" id="b_day">
  <option value="0" selected="selected">মাস</option>
  <option value="01">01 - জানুয়ারী</option>
				<option value="02">02 - ফেব্রুয়ারি</option>
				<option value="03">03 - মার্চ</option>
				<option value="04">04 - এপ্রিল</option>
				<option value="05">05 - মে</option>
				<option value="06">06 - জুন</option>
				<option value="07">07 - জুলাই</option>
				<option value="08">08 - আগস্ট</option>
				<option value="09">09 - সেপ্টেম্বর</option>
				<option value="10">10 - অক্টোবর</option>
				<option value="11">11 - নভেম্বর </option>
				<option value="12">12 - ডিসেম্বর</option>
</select>
</div>

<div class="col-md-2 pb-3"> 
<select name="b_year" class="form-control" id="b_year">
              <option value="0" selected="selected">জন্ম সাল</option>
				<option value="1974">1974</option>
        <option value="1975">1975</option>
        <option value="1976">1976</option>
        <option value="1977">1977</option>
        <option value="1978">1978</option>
        <option value="1979">1979</option>
        <option value="1980">1980</option>
        <option value="1981">1981</option>
        <option value="1982">1982</option>
        <option value="1983">1983</option>
        <option value="1984">1984</option>
        <option value="1985">1985</option>
        <option value="1986">1986</option>
        <option value="1987">1987</option>
        <option value="1988">1988</option>
        <option value="1989">1989</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
            </select>
</div>

 </div>

<div class="row"> 
<div class="col-md-3"> 
        <h5 class="eng"> Gender :<span class="red" >*</span> </h5>
      </div>

    <div class="col-md-2">  
    <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="option1" required>
          <label class="form-check-label eng" for="male">
            Male
          </label>
        </div>
    </div>

    <div class="col-md-2">  
    <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="option1" required >
          <label class="form-check-label eng" for="female">
            Female
          </label>
        </div>
    </div>

    <div class="col-md-2">  
    <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="others" value="option1" required >
          <label class="form-check-label eng" for="others">
            Others
          </label>
        </div>
    </div>

 <div class="row pb-4"> 
 <div class="col-md-6"> 
        <h5 class="eng"> Religion :<span class="red" >* </span> </h5>
      </div>
      <div class="col-md-5">  
      <select name="religion" class="form-control" id="religion">
                <option value="0" selected="selected">নির্বাচন করুন</option>
                <option value="Islam">ইসলাম</option>
                <option value="Hinduism">হিন্দু</option>
                <option value="Christianity">খ্রিষ্টান</option>
                <option value="Buddhism">বুদ্ধ</option>
                <option value="Others">অন্যন</option>
              </select>
      </div>
 </div>
</div>

<div class="row pb-3">   
  <div class="col-md-3"> 
    <h5 class="eng"> Place of brith :</h5>
  </div>
  <div class="col-md-3"> 
    <input class="form-control-md form-control" placeholder="জন্ম স্থান" type="text">
  </div>
  <div class="col-md-2 "> 
    <h5 class="eng"> Blood Group :</h5>
  </div>
  <div class="col-md-3">   
    <input class="form-control-md form-control" placeholder=" রক্তের গ্রুপ" type="text">
  </div>
</div>


<div class="row pb-3">   
  <div class="col-md-3"> 
    <h5 class="eng"> National ID:</h5>
  </div>
  <div class="col-md-3"> 
    <input class="form-control-md form-control" placeholder=" জাতীয় পরিচয়পত্র নম্বর" type="text">
  </div>
  <div class="col-md-2 "> 
    <h5 class="eng"> Passport ID :</h5>
  </div>
  <div class="col-md-3">   
    <input class="form-control-md form-control" placeholder=" পাসপোর্ট নম্বর" type="text">
  </div>
</div>


<div class="row pb-3">   
  <div class="col-md-3"> 
    <h5 class="eng"> Birth Registration:</h5>
  </div>
  <div class="col-md-3"> 
    <input class="form-control-md form-control" placeholder=" জন্ম নিবন্ধন নম্বর" type="text">
  </div>
  <div class="col-md-2 "> 
    <h5 class="eng"> Marital Staus :<span class="red" >* </span> </h5>
  </div>
  <div class="col-md-3" id="degree"> 

    <select name="marital" class="form-control " id="rell" require> 
    <option value="0" selected="selected">Select One</option>
    <option id="hello" value="01"> Married </option>
    <option value="02"> Single</option>
    </select>
   
  </div>
</div>
<script type="text/javascript">
     $(document).ready(function(){
         $("#hello").click(function(){
            
                 $('#degree').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="wife_name" class="form-control" type="text" placeholder="স্ত্রীর নাম" require></div>');
         });
     });
 </script>


<div class="row pb-3">   
  <div class="col-md-3"> 
    <h5 class="eng"> Quota: <span class="red"> *</span> </h5> 
  </div>
  <div class="col-md-3"> 
  <select name="qta" class="form-control" id="rel" require> 
  <option value="0" selected="selected">Select One</option>
  <option value="1">Freedom Fighter</option>
				<option value="2">Child of Freedom Fighter</option>
				<option value="3">Grand Child of Freedom Fighter</option>
     <option value="4">Physically Handicapped</option>
				<option value="5">Orphan</option>
				<option value="6">Ethnic Minority</option>
				<option value="7">Ansar-VDP</option>
				<option value="8">Non Quota</option>
				<option value="9">Women Quota</option>
    </select>
  </div>
  <div class="col-md-1 "> 
    <h5 class="eng"> Email : </h5>
  </div>
  <div class="col-md-4">   
  <input class="form-control-md form-control" placeholder="আপনার ইমেল দিন" type="email" require>
  </div>
</div>



<div class="row pb-3">   
  <div class="col-md-3"> 
    <h5 class="eng"> Mobile Number: <span class="red"> *</span> </h5> 
  </div>
  <div class="col-md-3"> 
  <input class="form-control-md form-control" placeholder="আপনার  মোবাইল নম্বর দিন" type="text" require>
  </div>
  <div class="col-md-2"> 
    <h5 class="eng"> Confirm Mobile : <span class="red"> *</span> </h5> 
  </div>
  <div class="col-md-3"> 
  <input class="form-control-md form-control" placeholder="আপনার  মোবাইল নম্বর দিন" type="text" require>
  </div>
</div>
    


<div class="row p-4 bg-success"> 
     <div class="col-md-6"> <h5 class="eng pb-3">Mailing/Present Address <span class="red"> *</span> </h5>
      <div class="row"> 
        <div class="col-md-4"> <h5 class="eng">Care of </h5> </div>
        <div class="col-md-8"> 
        <input id="homeaddress" type="text" name="homeaddress" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3"> 
        <h5 class="eng">Village/Town/road/House/Flat</h5> </div>
        <div class="col-md-8"> 
      <textarea class="form-control mt-3" name="homeaddress2" id="homeaddress2" cols="15" rows="4"></textarea>
        </div>
        <div class="col-md-4 mt-3">  
        <h5 class="eng"> District : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="homeaddress3" name="district" class="form-control-md form-control" require></div>
        
        <div class="col-md-4 mt-3">  
        <h5 class="eng"> P.S/Upazila : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="homeaddress4" name="upzila" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3">  
        <h5 class="eng"> Post Office : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="homeaddress5" name="post_office" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3">  
        <h5 class="eng"> Post Code : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="homeaddress6" name="post_code" class="form-control-md form-control" require></div>

      </div>
     </div>
<!----left side address box  start here------->
     <div class="col-md-6"> <h5 class="eng pb-3">Parmanent Address <span class="red"> *</span> <div>
      <input type="checkbox" name="homepostalcheck" id="homepostalcheck"> 
      <label for="homepostalcheck"> Same as Present address</label></div> </h5>
     
      <div class="row"> 
        <div class="col-md-4"> <h5 class="eng">Care of </h5> </div>
        <div class="col-md-8"> 
        <input type="text" id="billingaddress" name="billingaddress" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3"> 
        <h5 class="eng">Village/Town/road/House/Flat</h5> </div>
        <div class="col-md-8"> 
      <textarea class="form-control mt-3" name="billingaddress2" id="billingaddress2" cols="15" rows="4"></textarea>
        </div>
        <div class="col-md-4 mt-3">  
        <h5 class="eng"> District : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="billingaddress3" name="billingaddress3" class="form-control-md form-control" require></div>
        
        <div class="col-md-4 mt-3">  
        <h5 class="eng"> P.S/Upazila : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="billingaddress4" name="upzila_b" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3">  
        <h5 class="eng"> Post Office : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="billingaddress5" name="Post_officeb" class="form-control-md form-control" require></div>

        <div class="col-md-4 mt-3">  
        <h5 class="eng"> Post Code : </h5>
        </div>
        <div class="col-md-8 mt-3"> 
        <input type="text" id="billingaddress6" name="Post_codeb" class="form-control-md form-control" require></div>

      </div>
     </div>
</div>

<div class="row bg-primary text-light"> 
<div class="col-md-12 text-center py-3"> <h4> Academic Qualifications</h4></div>

<div class="col-md-12 text-center pb-4"> <h5> JSC or Equalvalent Level<span class="red"> *</span> </h5></div>

<div class="col-md-4"> 
     <div class="row"> 
       <div class="col-md-6"><h5> Examination</h5> </div>
       <div class="col-md-6"> 
       <select name="exam1" class="form-control" id="exam1" require>
                            <option value="0" selected="selected">Select One</option>
                     <option value="1">S.S.C</option>
                     <option value="2">Dakhil</option>
                     <option value="3">S.S.C Vocational</option>
                     <option value="4">O Level/Cambridge</option>
                     <option value="5">S.S.C Equivalent</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Board</h5> </div>
       <div class="col-md-6"> 
       <select name="institute1" class="form-control" id="institute1" require>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Roll No</h5> </div>
       <div class="col-md-6"> 
         <input class="form-control form-control-md" type="text" require>
       </div>
     </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6"><h5> Group/Subject</h5> </div>
    <div class="col-md-6"> 
      <select name="subject1" class="form-control" id="subject1">
        <option value="0"selected="selected">Select One</option>
        <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
      </select>
    </div>
  </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Result :</h5>
    </div>
    <div class="col-md-6" id="resultdiv"> 
    
    <select name="result2" class="form-control" id="result2"  >
                                <option value="0"selected="selected">Select</option>
											        	<option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option id="result" value="4">GPA(out of 4)</option>
											        	<option id="result3" value="5">GPA(out of 5)</option>
												
                              </select>
     
    </div>
    
    <script type="text/javascript">
       $(document).ready(function(){
           $("#result").click(function(){
              
                   $('#resultdiv').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-4" class="form-control" type="text" placeholder="Gpa" require></div>');
           });
           $("#result3").click(function(){
              
              $('#resultdiv').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-5" class="form-control" type="text" placeholder="Gpa" require></div>');
      });
       });
    </script>
  </div>
</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Passing Year :</h5>
    </div>
    <div class="col-md-6" id="passing year"> 
    
      <select name="year2" class="form-control" id="year2">
        <option value="0" selected="selected">Select One</option>
        <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
      </select>
     
    </div>
  </div>
</div>




<div class="col-md-12 text-center py-5"> <h5> SSC or Equalvalent Level<span class="red"> *</span> </h5></div>

<div class="col-md-4"> 
     <div class="row"> 
       <div class="col-md-6"><h5> Examination</h5> </div>
       <div class="col-md-6"> 
       <select name="exam1" class="form-control" id="exam1" require>
                            <option value="0" selected="selected">Select One</option>
                     <option value="1">S.S.C</option>
                     <option value="2">Dakhil</option>
                     <option value="3">S.S.C Vocational</option>
                     <option value="4">O Level/Cambridge</option>
                     <option value="5">S.S.C Equivalent</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Board</h5> </div>
       <div class="col-md-6"> 
       <select name="institute1" class="form-control" id="institute1" require>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Roll No</h5> </div>
       <div class="col-md-6"> 
         <input class="form-control form-control-md" type="text" require>
       </div>
     </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6"><h5> Group/Subject</h5> </div>
    <div class="col-md-6"> 
      <select name="subject1" class="form-control" id="subject1">
        <option value="0"selected="selected">Select One</option>
        <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
      </select>
    </div>
  </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Result :</h5>
    </div>
    <div class="col-md-6" id="sscresultbox"> 
    
    <select name="sscresult" class="form-control" id="sscresult"  >
                                <option value="0"selected="selected">Select</option>
											        	<option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option id="ssc4" value="4">GPA(out of 4)</option>
											        	<option id="ssc5" value="5">GPA(out of 5)</option>
												
                              </select>
     
    </div>
    
    <script type="text/javascript">
       $(document).ready(function(){
           $("#ssc4").click(function(){
              
                   $('#sscresultbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-4" class="form-control" type="text" placeholder="Gpa" require></div>');
           });
           $("#ssc5").click(function(){
              
              $('#sscresultbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-5" class="form-control" type="text" placeholder="Gpa" require></div>');
      });
       });
    </script>
  </div>
</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Passing Year :</h5>
    </div>
    <div class="col-md-6" id="passing year"> 
    
      <select name="year2" class="form-control" id="year2">
        <option value="0" selected="selected">Select One</option>
        <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
      </select>
     
    </div>
  </div>
</div>



<div class="col-md-12 text-center py-5"> <h5> HSC or Equalvalent Level<span class="red"> *</span> </h5></div>

<div class="col-md-4"> 
     <div class="row"> 
       <div class="col-md-6"><h5> Examination</h5> </div>
       <div class="col-md-6"> 
       <select name="exam1" class="form-control" id="exam1" require>
                            <option value="0" selected="selected">Select One</option>
                     <option value="1">S.S.C</option>
                     <option value="2">Dakhil</option>
                     <option value="3">S.S.C Vocational</option>
                     <option value="4">O Level/Cambridge</option>
                     <option value="5">S.S.C Equivalent</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Board</h5> </div>
       <div class="col-md-6"> 
       <select name="institute1" class="form-control" id="institute1" require>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Roll No</h5> </div>
       <div class="col-md-6"> 
         <input class="form-control form-control-md" type="text" require>
       </div>
     </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6"><h5> Group/Subject</h5> </div>
    <div class="col-md-6"> 
      <select name="subject1" class="form-control" id="subject1">
        <option value="0"selected="selected">Select One</option>
        <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
      </select>
    </div>
  </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Result :</h5>
    </div>
    <div class="col-md-6" id="hscresultbox"> 
    
    <select name="sscresult" class="form-control" id="sscresult"  >
                                <option value="0"selected="selected">Select</option>
											        	<option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option id="hsc4" value="4">GPA(out of 4)</option>
											        	<option id="hsc5" value="5">GPA(out of 5)</option>
												
                              </select>
     
    </div>
    
    <script type="text/javascript">
       $(document).ready(function(){
           $("#hsc4").click(function(){
              
                   $('#hscresultbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-4" class="form-control" type="text" placeholder="Gpa" require></div>');
           });
           $("#hsc5").click(function(){
              
              $('#hscresultbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-5" class="form-control" type="text" placeholder="Gpa" require></div>');
      });
       });
    </script>
  </div>
</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Passing Year :</h5>
    </div>
    <div class="col-md-6" id="passing year"> 
    
      <select name="year2" class="form-control" id="year2">
        <option value="0" selected="selected">Select One</option>
        <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
      </select>
     
    </div>
  </div>
</div>




<div class="col-md-12 text-center py-5"> <h5> Degree/honars or Equalvalent Level<span class="red"> *</span> </h5></div>

<div class="col-md-4"> 
     <div class="row"> 
       <div class="col-md-6"><h5> Examination</h5> </div>
       <div class="col-md-6"> 
       <select name="exam1" class="form-control" id="exam1" require>
                            <option value="0" selected="selected">Select One</option>
                     <option value="1">S.S.C</option>
                     <option value="2">Dakhil</option>
                     <option value="3">S.S.C Vocational</option>
                     <option value="4">O Level/Cambridge</option>
                     <option value="5">S.S.C Equivalent</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Board</h5> </div>
       <div class="col-md-6"> 
       <select name="institute1" class="form-control" id="institute1" require>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Roll No</h5> </div>
       <div class="col-md-6"> 
         <input class="form-control form-control-md" type="text" require>
       </div>
     </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6"><h5> Group/Subject</h5> </div>
    <div class="col-md-6"> 
      <select name="subject1" class="form-control" id="subject1">
        <option value="0"selected="selected">Select One</option>
        <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
      </select>
    </div>
  </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Result :</h5>
    </div>
    <div class="col-md-6" id="dgreebox"> 
    
    <select name="sscresult" class="form-control" id="sscresult"  >
                                <option value="0"selected="selected">Select</option>
											        	<option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option id="degree1" value="4">GPA(out of 4)</option>
											        	<option id="degree2" value="5">GPA(out of 5)</option>
												
                              </select>
     
    </div>
    
    <script type="text/javascript">
       $(document).ready(function(){
           $("#degree1").click(function(){
              
                   $('#dgreebox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-4" class="form-control" type="text" placeholder="Gpa" require></div>');
           });
           $("#degree2").click(function(){
              
              $('#dgreebox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-5" class="form-control" type="text" placeholder="Gpa" require></div>');
      });
       });
    </script>
  </div>
</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Passing Year :</h5>
    </div>
    <div class="col-md-6" id="passing year"> 
    
      <select name="year2" class="form-control" id="year2">
        <option value="0" selected="selected">Select One</option>
        <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
      </select>
     
    </div>
  </div>
</div>





<div class="col-md-12 text-center py-5"> <h5> Master Equalvalent Level<span class="red"> *</span> </h5></div>

<div class="col-md-4"> 
     <div class="row"> 
       <div class="col-md-6"><h5> Examination</h5> </div>
       <div class="col-md-6"> 
       <select name="exam1" class="form-control" id="exam1" >
                            <option value="0" selected="selected">Select One</option>
                     <option value="1">S.S.C</option>
                     <option value="2">Dakhil</option>
                     <option value="3">S.S.C Vocational</option>
                     <option value="4">O Level/Cambridge</option>
                     <option value="5">S.S.C Equivalent</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Board</h5> </div>
       <div class="col-md-6"> 
       <select name="institute1" class="form-control" id="institute1" require>
                            <option value="0" selected="selected">Select One</option>
                            <option value="1">Dhaka</option><option value="2">Cumilla</option><option value="3">Rajshahi</option><option value="4">Jashore</option><option value="5">Chittagong</option><option value="6">Barishal</option><option value="7">Sylhet</option><option value="8">Dinajpur</option><option value="9">Madrasah</option><option value="10">Technical</option><option value="15">Cambridge International - IGCE</option><option value="16">Edexcel International</option><option value="17">Bangladesh Technical Education Board (BTEB)</option><option value="20">Others</option>
                          </select>
       </div>
     </div>

</div>
<div class="col-md-4"> 
<div class="row"> 
       <div class="col-md-6"><h5> Roll No</h5> </div>
       <div class="col-md-6"> 
         <input class="form-control form-control-md" type="text" require>
       </div>
     </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6"><h5> Group/Subject</h5> </div>
    <div class="col-md-6"> 
      <select name="subject1" class="form-control" id="subject1">
        <option value="0"selected="selected">Select One</option>
        <option value="1">Science</option><option value="2">Humanities</option><option value="3">Business Studies</option><option value="12">Agriculture Technology</option><option value="13">Architecture and Interior Design Technology</option><option value="15">Automobile Technology</option><option value="16">Civil Technology</option><option value="20">Computer Science & Technology</option><option value="21">Chemical Technology</option><option value="22">Electrical Technology</option><option value="23">Data Telecommunication and Network Technology</option><option value="24">Electrical and Electronics Technology</option><option value="27">Environmental Technology</option><option value="31">Instrumentation & Process Control Technology</option><option value="32">Mechanical Technology</option><option value="34">Mechatronics Technology</option><option value="36">Power Technology</option><option value="38">Refregeration & Air Conditioning Technology</option><option value="41">Telecommunication Technology</option><option value="42">Electronics Technology</option><option value="43">Library Science</option><option value="44">Survey</option><option value="45">General Mechanics</option><option value="46">Firm Machinery</option><option value="47">Textile Technology</option><option value="99">Others</option>
      </select>
    </div>
  </div>

</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Result :</h5>
    </div>
    <div class="col-md-6" id="masterbox"> 
    
    <select name="sscresult" class="form-control" id="sscresult"  >
                                <option value="0"selected="selected">Select</option>
											        	<option value="1">1st Division</option>
                                <option value="2">2nd Division</option>
                                <option value="3">3rd Division</option>
                                <option id="master1" value="4">GPA(out of 4)</option>
											        	<option id="master2" value="5">GPA(out of 5)</option>
												
                              </select>
     
    </div>
    
    <script type="text/javascript">
       $(document).ready(function(){
           $("#master1").click(function(){
              
                   $('#masterbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-4" class="form-control" type="text" placeholder="Gpa" require></div>');
           });
           $("#master2").click(function(){
              
              $('#masterbox').append('<div style="margin-top:10px;"><label for="college_name"></lable><input name="gpa-5" class="form-control" type="text" placeholder="Gpa" require></div>');
      });
       });
    </script>
  </div>
</div>

<div class="col-md-4 mt-3"> 
  <div class="row"> 
    <div class="col-md-6 "> 
      <h5 class="eng"> Passing Year :</h5>
    </div>
    <div class="col-md-6" id="passing year"> 
    
      <select name="year2" class="form-control" id="year2">
        <option value="0" selected="selected">Select One</option>
        <option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option>
      </select>
     
    </div>
  </div>
</div>





</div>

<div class="row bg-primary text-light"> 
  <div class="col-md-12 py-5 text-center"> 
    <h4> Professional Experince</h4>
  </div>
    <div class="col-md-3"><h5> Designation/Post name</h5> </div>
    <div class="col-md-3"> <input class="form-control form-control-md" placeholder="পদবী/পদের নাম" type="text"></div>
    <div class="col-md-3"><h5> Organization Name</h5> </div>
    <div class="col-md-3"> <input class="form-control form-control-md" placeholder="প্রতিষ্ঠানের নাম" type="text"></div>
    <div class="col-md-3 mt-3 "><h5> Service Start Date</h5> </div>
    <div class="col-md-3 mt-3"> <input class="form-control form-control-md" placeholder="সার্ভিস শুরুর তারিখ" type="text"></div>
    <div class="col-md-3 mt-3"><h5> Service End date</h5> </div>
    <div class="col-md-3 mt-3"> <input class="form-control form-control-md" placeholder="সার্ভিস সমাপ্তির তারিখ" type="text"></div>

    <div class="col-md-6 mt-5"><h5 class="text-center"> Responsibilities</h5> </div>
    <div class="col-md-6 mt-5"> <input class="form-control form-control-md" placeholder="দায়িত্ব" type="text"></div>
</div>

<div class="row mt-4 bg-primary text-light"> 
       <div class="col-md-4"><h5 class=""> Depermenttal Candidate Status</h5> </div>
       <div class="col-md-3"> 
       <input class="form-control form-control-md" placeholder="বিভাগীয় প্রার্থীর অবস্থা" type="text">
       </div>
       <div class="col-md-5"> 
        <div class="row"> 
          <div class="col-md-6"> <h5> Do you Minimum weight </h5></div>
          <div class="col-md-6"> <input class="form-control form-control-md" placeholder="" type="text"> </div>
        </div>   
      </div>

      <div class="col-md-3 mt-3"><h5> Do you Minimum Height (Feet --inc)</h5> </div>
    <div class="col-md-3 mt-3"> <input class="form-control form-control-md" placeholder="  " type="text"></div>
    <div class="col-md-3 mt-3"><h5> Do you Minimum Chest Size </h5> </div>
    <div class="col-md-3 mt-3"> <input class="form-control form-control-md" placeholder=" " type="text"></div>

    <div class="col-md-6 text-center mt-4 "><h5> Computer Training instute services </h5> </div>
    <div class="col-md-6 mt-4"> <input class="form-control form-control-md" placeholder=" " type="text"></div>

    <div class="col-md-3 mt-4"> 
       <h5> Upload photo <span class="red">*</span></h5>
     </div>
    <div class="col-md-3 mt-4"> 
       <input class="" type="file" require >
    </div>

    <div class="col-md-3 mt-4"> 
       <h5> Upload Signuture <span class="red">*</span></h5>
     </div>
    <div class="col-md-3 mt-4"> 
       <input class="" type="file" require >
    </div>

</div>

<div class="col-md-12 mt-5 text-center"> 
<input class="btn btn-warning px-5" value="Submit here" type="button">
</div>

  </form>



</div>
</body>
<script type="text/javascript">
function setBillingAddress(){
  if ($("#homepostalcheck").is(":checked")) {
    $('#billingaddress').val($('#homeaddress').val());
    $('#billingaddress').attr('disabled', 'disabled');
    $('#billingaddress2').val($('#homeaddress2').val());
    $('#billingaddress2').attr('disabled', 'disabled');
    $('#billingaddress3').val($('#homeaddress3').val());
    $('#billingaddress3').attr('disabled', 'disabled');
    $('#billingaddress4').val($('#homeaddress4').val());
    $('#billingaddress4').attr('disabled', 'disabled');
    $('#billingaddress5').val($('#homeaddress5').val());
    $('#billingaddress5').attr('disabled', 'disabled');
    $('#billingaddress6').val($('#homeaddress6').val());
    $('#billingaddress6').attr('disabled', 'disabled');
  } else {
    $('#billingaddress').removeAttr('disabled');
    $('#billingaddress2').removeAttr('disabled');
    $('#billingaddress3').removeAttr('disabled');
    $('#billingaddress4').removeAttr('disabled');
    $('#billingaddress5').removeAttr('disabled');
    $('#billingaddress6').removeAttr('disabled');
  }
}

$('#homepostalcheck').click(function(){
  setBillingAddress();
})

</script>
</html>