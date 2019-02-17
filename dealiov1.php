<?php

$ref = $_GET['ref'];
$y = 1;
$x = $_GET["x"];

while($y <= $x) {
	
$ch = curl_init();
$random = rand(10000000,99999999);
$randomip1 = rand(1,254);
$randomip2 = rand(2,254);
$randomip3 = rand(3,254);
$randomip4 = rand(4,254);
curl_setopt($ch, CURLOPT_URL, 'http://api.dealioapps.com/api/users/edit/0?access_token=no&app=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "firstname=Muhammad+Raisya&lastname=Zhaafir$random&username=Muhammad$random%40gmail.com&password=Muhammad$random%40&email=Muhammad$random%40gmail.com&phone=%2B62812$random&dob=17-Aug-1945&smoker=ya&gender=pria&roles%5B%5D=&active=1&player_id=&avatar=&state=Bengkulu&country_code=%2B62&register_type=custom&referred_by=$ref&app_version=5&ip_address=$randomip1.$randomip2.$randomip3.$randomip4");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Api_signature: {\"signature\":\"QjlqZHM1ZnA5dTFmYmRmSuKv4ZLsX1W4M844AkVqIPTiJMUzm2UrteI2y4MX/5a1ehvCT2TLZTrAnDhJb9UcqrIT398+EiiIbVJlo4BaX+aUvYpL/DMpXb1UwloPCnFRrIdihBLtlhp+6vxz6HhzAog==n\"}';
$headers[] = 'Content-Type: multipart/form-data; boundary=604e32d6-2310-4ded-ad4b-6d408e9ac207';
$headers[] = 'Host: api.dealioapps.com';
$headers[] = 'User-Agent: okhttp/3.10.0';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo "$y";
echo $result;
echo "<br>";
$y++;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

}
?>