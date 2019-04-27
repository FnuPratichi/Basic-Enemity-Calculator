<?php

$yname = $_POST['yname'];
$fname = $_POST['fname'];

$per = mt_rand(0,100);

echo'<br>Enemity between '.$yname.' and '.$fname.'<br>';
echo'is '.$per.'% strong';

?>