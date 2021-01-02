<?php

echo "<title>Tutorial and Example </title>";
 // form_open() function
 echo form_open();
 // form_fieldset() function
 echo form_fieldset('Student Registration form'); 
 echo "<h2> <center> Enter your Details </center> </h2>";
 echo "<hr></hr>";
 $data = array(
     'name'          => 'uname',
     'id'            => 'uname',
     'value'         => '',
     'maxlength'     => '100', 
     'size'          => '50',
     'style'         => 'width:50%',
     'placeholder' => 'ENTER YOUR NAME',
     'title' => 'Please Provide your name',
 );
 echo "NAME :  ". "   ".form_input($data). "<br> <br>";
 //echo "PASSWORD :". form_password
 echo form_label('Password :'); 
  $password = array('name'=>'passowrd', 'id'=>'password', 'style' => 'width:50%', 'maxlength'=>'11', 
  'placeholder'=> 'ENTER YOUR PASSWORD');
 // form_password() function
  echo form_password($password). "<br> <br>";
  echo form_label('Email :');
  echo form_input(array('id' => 'email', 'type' => 'email', 'name' => 'email', 'value'=>'',
  'style' => 'width:50%', 'border' => '1',
 'placeholder' => 'ENTER YOUR EMAIL-ID')); 
 echo "<br><br>";
 echo form_label('Address :'); 
 // form_textarea() function 
 
  echo form_label('Php :');
  $data = array('name'=>'sunject', 'id'=>'php', 'value'=>'accept',
 'checked'=>false, 'style'=>'margin:20px');
  echo form_checkbox($data);
  echo form_label('java :'); 
  $data = array('name'=>'subject', 'id'=>'Java', 'value'=>'java',
 'checked'=> TRUE, 'style'=>'margin:20px');
  echo form_checkbox($data);
  echo form_label('.Net :');
  $data = array('name'=>'subject', 'id'=>'.Net', 'value'=>'dotNET', 
 'checked'=> false, 'style'=>'margin:20px');
  echo " ".form_checkbox($data);
  echo form_label('C Programming :');
  $data = array('name'=>'subject', 'id'=>'C', 'value'=>'C',
  'checked'=> false, 'style'=>'margin:20px');
 // form_checkbox() function
   echo " ".form_checkbox($data); 
   echo form_label('CODEIGNITER :');
   $data = array('name'=>'subject', 'id'=>'CODEIGNITER', 'value'=>'code',
   'checked'=> TRUE, 'style'=>'margin:20px');
    echo " ". form_checkbox($data). "<br>";
 echo form_label('Gender :');
 $data = array(
   'name'          => 'gender',
   'id'            => 'male', 
   'value'         => 'M',
  // 'checked'       => TRUE,
   'style'         => 'margin:10px'
 ); 
 $data2 = array(
   'name'          => 'gender',
   'id'            => 'female',
   'value'         => 'F',
  // 'checked'       => TRUE,
  'style'         => 'margin:10px'
 );
 // form_radio() function
  echo form_label( form_radio($data)."Male");
  echo form_label(form_radio($data2). "Female"."<br>" );
  // form_label() and form_input() function
  echo form_label('Mobile No.: ');
  echo form_input(array('id' => 'mobile', 'name' => 'mobile',  'maxlength' => '10'))."<br></br>"; 
 // form_dropdown() function
 echo form_label('Country');
  $cname = array(
    'USA' => 'UNITED STATE AMERICA',
    'IN' => "INDIA", 
    'AUS' => 'AUSTRALIA',
    'UK' => 'UNITED KINGDOM',
    'NP' => 'NEPAL'
  );
  echo form_dropdown("Show", $cname);
  echo "<br> <br>"; 
 // form_multiselect() function
  echo form_label('Select Multiple Languages '. " ");
 $language = array(
    'eng' => 'ENGLISH', 
    'hn' => "HINDI",
    'jp' => 'JAPANESE',
    'cn' => 'CHINESE',
    'NP' => 'FRENCH',
    'sp' => 'SPANISH'
  );
  //$selected = array ('IN', 'USA');
  echo " ".form_multiselect("Show[]", $language);
  echo "<br> <br>";
 // form_upload() function
 echo form_label("Upload file:");
 $upload_file = array(
 'type' => 'file', 
  'name' => 'upload_file'
  );
   echo form_upload($upload_file)."<br> <br>";
  // form_submit() function
  echo form_submit('Sub', 'SAVE');
 // form_reset() function 
   $data = array('name'=>'resetbutton', 'id'=>'button', 'value'=>'RESET',
 'content'=>'Reset');
  echo form_reset($data);
  echo form_fieldset_close();
 echo form_close();
 ?> 
 