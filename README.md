# toolsScript
哥斯拉4.0.1流量解密
pass=fL1tMGI4YTljMTj%2Fgz6jA3M2teC3p2kg2S8PCIpAECNqLq0sTC8a6ai0rbDMifztm2aXs0l1oCHgoxiSR0zxnjiYhZmw0AiJNTkIp%2FAsNYRsgtCNpKYe2YwP2XEJk2xR79YDXsqNkeK6%2BlgMObk0wFA%2FKJfBmE7YwROc1A3W6mxXTGUwYg%3D%3DHTTP/1.1 200 OK
Date: Mon, 22 Aug 2022 07:11:52 GMT
Server: Apache/2.4.23 (Win32) OpenSSL/1.0.2j PHP/5.4.45
X-Powered-By: PHP/5.4.45
Expires: Thu, 19 Nov 1981 08:52:00 GMT
Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0
Pragma: no-cache
Set-Cookie: PHPSESSID=2o0jh131mh8m2607sj2ec94mi1; path=/
Content-Length: 332
Keep-Alive: timeout=5, max=94
Connection: Keep-Alive
Content-Type: text/html

11cd6a8758984163fL1tMGI4YTljOtbXOPuteKoZSmaSNDEBmdXvU2wacY8X06na0QcvpFnL0epFMbah7+LHjLYqYhLzpbew8PVUSEyp3IEP/bcaaR9L8ziPX2y8k8W3YJV1S5GiJkFgxhIgUMWlSlTWukOA0aOPpbWXp/ofCY0TVdon5a+BZjk3Shgg/VETSQvqrTcaxhZBN0ogcP1BZSFr0RgjjBNSjz6JqXKwfWp40XijOtlsKtot+6nggziPHs6m/Di2axnS5QdXCZxi82RYPH61rQ1NxPOvKNvCxWkE/Ko8Y2iw+dx5YDNj6c37ac826a2a04bc



<?php
function encode($D,$K){
    for ($i=0;$i<strlen($D);$i++){
        $c = $K[$i+1&15];
        $D[$i] = $D[$i]^$c;
    }
    return $D;
}
$pass='pass';
$payloadName='payload';
$key='3c6e0b8a9c15224a';
$requests = 'fL1tMGI4YTljMTj%2Fgz6jA3M2teC3p2kg2S8PCIpAECNqLq0sTC8a6ai0rbDMifztm2aXs0l1oCHgoxiSR0zxnjiYhZmw0AiJNTkIp%2FAsNYRsgtCNpKYe2YwP2XEJk2xR79YDXsqNkeK6%2BlgMObk0wFA%2FKJfBmE7YwROc1A3W6mxXTGUwYg%3D%3D';
$response = 'fL1tMGI4YTljOtbXOPuteKoZSmaSNDEBmdXvU2wacY8X06na0QcvpFnL0epFMbah7+LHjLYqYhLzpbew8PVUSEyp3IEP/bcaaR9L8ziPX2y8k8W3YJV1S5GiJkFgxhIgUMWlSlTWukOA0aOPpbWXp/ofCY0TVdon5a+BZjk3Shgg/VETSQvqrTcaxhZBN0ogcP1BZSFr0RgjjBNSjz6JqXKwfWp40XijOtlsKtot+6nggziPHs6m/Di2axnS5QdXCZxi82RYPH61rQ1NxPOvKNvCxWkE/Ko8Y2iw+dx5YDNj';
echo "<br/><br/>=============================================request==================================================<br/>";
echo encode(base64_decode(urldecode($requests)),$key);
echo "<br/><br/>=============================================response(gzip)==================================================<br/>";
echo encode(base64_decode($response),$key);
?>
