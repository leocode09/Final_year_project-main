<?php
$phone = $_POST['phone'];
$message =$_POST['message'];

  $data=array(
  "sender"=>'',
   "recipients"=> $phone,
    "message"=> $message,
  );

  $url="https://www.intouchsms.co.rw/api/sendsms/.json";
  $data=http_build_query($data);
  $username="";
  $password="";

  $ch=curl_init();
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_USERPWD,$username.":".$password);
  curl_setopt($ch,CURLOPT_POST,true);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  $result=curl_exec($ch);
  $httpcode=curl_getinfo($ch,CURLINFO_HTTP_CODE);
  curl_close($ch);

  echo $result;

  echo $httpcode;
  ?>