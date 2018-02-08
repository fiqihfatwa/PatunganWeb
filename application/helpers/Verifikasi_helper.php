<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function generateCURL(){
		$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.mainapi.net/token",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "grant_type=client_credentials",
	  CURLOPT_HTTPHEADER => array(
	    "authorization: Basic b3dIQ1E4X1lZX3REQ0FUMGNHb09ERDlsT25BYTpudGtBOW0ySzJpMVY0TXZQWTJWU0dBU3o0RUFh",
	    "cache-control: no-cache",
	    "content-type: application/x-www-form-urlencoded"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {	
	  $hasil = json_decode($response);
	  return $hasil->access_token;
	}
}


function verifikasi_sms($kode, $hp,$token){	
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.mainapi.net/smsotp/1.0.1/otp/".$kode,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "PUT",
	  CURLOPT_POSTFIELDS => "{\r\n  \"phoneNum\": \"".$hp."\",\r\n  \"digit\": 5\r\n}",
	  CURLOPT_HTTPHEADER => array(
	    "accept: application/json",
	    "authorization: Bearer $token",
	    "cache-control: no-cache",
	    "content-type: application/json"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}
}


function cek_sms($kode, $kode2, $token){
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.mainapi.net/smsotp/1.0.1/otp/$kode/verifications",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{\r\n  \"otpstr\": \"".$kode2."\",\r\n  \"digit\": 5\r\n}",
	  CURLOPT_HTTPHEADER => array(
	    "accept: application/json",
	    "authorization: Bearer $token",
	    "cache-control: no-cache",
	    "content-type: application/json"	   
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  $hasil = json_decode($response);
	  return $hasil->status;
	}
}



function generateRandomString($length = 5) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function sms_ke_user($hp,$pesan,$token){
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.mainapi.net/smsnotification/1.0.0/messages",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n$hp\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"content\"\r\n\r\n$pesan\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
	  CURLOPT_HTTPHEADER => array(
	    "accept: application/json",
	    "authorization: Bearer $token",
	    "cache-control: no-cache",
	    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}
}