<?php

$from=$_POST['from'];
$amt=$_POST['amount'];
$to=$_POST['to'];


$url="https://api.exchangeratesapi.io/latest?base=$from";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
   curl_setopt($ch, CURLOPT_AUTOREFERER, true); 
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

$response = curl_exec($ch);
$arr_result = json_decode($response,true);

foreach($arr_result['rates'] as $key => $value)
{
if($key==$to)
{
//echo $key;
	$v1=$value * $amt;
        header('location:index.php?output='.$amt.' '.$from.' = '.$v1.' '.$to);
}
}


?>




