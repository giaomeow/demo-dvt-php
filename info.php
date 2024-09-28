<?php 
//   $bien_a = 5;
//   $bien_b = 10;
//   $bien_c = 15;
    // $tong= $bien_a + $bien_b + $bien_c;
    // echo ($tong);

$bien_a = 5;

function Test(){
    global $bien_a;
    $bien_b = 10;
    $bien_c = 15;
    $tong= $bien_a + $bien_b + $bien_c;
    echo ($tong);
};

Test();
echo ($bien_a);

$NN_1="Xin chào";
$NN_2="Các bạn";
$NN_3="Các bạn lalal";


echo $NN_1, " và ", $NN_2;

?>

