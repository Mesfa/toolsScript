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
$requests = '请求:pass={}';
$response = '响应,去除前后16位字符';
echo "<br/><br/>=============================================request==================================================<br/>";
echo encode(base64_decode(urldecode($requests)),$key);
echo "<br/><br/>=============================================response(gzip)==================================================<br/>";
echo encode(base64_decode($response),$key);
?>
