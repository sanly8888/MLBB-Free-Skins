<?php 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $zone = $_GET['zone'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.gocode.id/mobilelegends/?id=".$id."&zone=".$zone."&key=303831323131303435313433");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $res = json_decode($result,true);
    echo $res['userNameGame'];
}

?>