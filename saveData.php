<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'uesrname'     => $_POST['text'],
         'email'      => $_POST['email'],
        'password'    => $_POST['password'],
        
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>