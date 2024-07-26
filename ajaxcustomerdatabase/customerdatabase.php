

<?php

$a = $_POST['t1'];
$b = $_POST['t2'];
$c = $_POST['t3'];
$d = $_POST['t4'];
$e = $_POST['t5'];
$f = $_POST['t6'];

$con=mysqli_connect('localhost','root','seedit','customerajax');
$q =" insert into info values('$a','$b', '$c','$d','$e', '$f')";
$res= mysqli_query($con,$q);
if($res==true){
    echo" saved successfully    ";
}
else{
    echo" error  ";
}

?>

