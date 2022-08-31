<?php

$con=new mysqli("localhost","root","","crud");
if($con){
    echo "Connection Succesful";
}else{
    die(mysqli_error($con));

}
?>