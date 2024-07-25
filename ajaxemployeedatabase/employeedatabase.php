

<?php

$a = $_POST['t1'];
$b = $_POST['t2'];
$c = $_POST['t3'];

$con=mysqli_connect('localhost','root','seedit','ajaxemployee');
$q =" insert into info values('$a','$b', '$c')";
$res= mysqli_query($con,$q);
if($res==true){
    echo"  Successfully Saved     ";
}
else{
    echo" Error Occured   ";
}

?>

