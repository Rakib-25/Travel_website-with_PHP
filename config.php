<?php
/*
This file contains database configuration
*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','TMS');

//try connect with database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

//CHECK CONNECTION

if($conn == false)
{
    echo "cant connect";

}
else
{
    echo "connect succesfully";
}

?>