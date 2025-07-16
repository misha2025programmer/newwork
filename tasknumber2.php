<?php
$connect=mysqli_connect("localhost","root","","shop19");
header("Content-Type: text/html; charset=UTF-8");
$sqlnew1="SELECT `id` FROM `categories`";
$result=mysqli_query($connect,$sqlnew1);
$amount=mysqli_num_rows($result);
$result=mysqli_fetch_all($result);
for($i=0;$i<$amount;$i++)
{
    $m=$result[$i][0];
    $sqlnew2="SELECT `category_id` FROM `products` WHERE `category_id`='$m'";
    $sqlnew3="DELETE FROM `categories` WHERE `id`='$m'";
    if(mysqli_num_rows(mysqli_query($connect,$sqlnew2))==0)
    {
        mysqli_query($connect,$sqlnew3);
    }
}
$sqlnew4="SELECT `id` FROM `products`";
$result=mysqli_query($connect,$sqlnew4);
$amount=mysqli_num_rows($result);
$result=mysqli_fetch_all($result);
for($i=0;$i<$amount;$i++)
{
    $m=$result[$i][0];
    $sqlnew5="SELECT `product_id` FROM `availabilities` WHERE `product_id`='$m'";
    $sqlnew6="DELETE FROM `products` WHERE `id`='$m'";
    if(mysqli_num_rows(mysqli_query($connect,$sqlnew5))==0)
    {
        mysqli_query($connect,$sqlnew6);
    }
}
$sqlnew7="SELECT `id` FROM `stocks`";
$result=mysqli_query($connect,$sqlnew7);
$amount=mysqli_num_rows($result);
$result=mysqli_fetch_all($result);
for($i=0;$i<$amount;$i++)
{
    $m=$result[$i][0];
    $sqlnew8="SELECT `stock_id` FROM `availabilities` WHERE `stock_id`='$m'";
    $sqlnew9="DELETE FROM `stocks` WHERE `id`='$m'";
    if(mysqli_num_rows(mysqli_query($connect,$sqlnew8))==0)
    {
        mysqli_query($connect,$sqlnew9);
    }
}