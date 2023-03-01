<?php


$data =  array();

$data = array(array("Bhargav Nixon",
        "tiger@example.com",
        "System Architect",
        "Edinburgh",
        "2011/04/25",
        "$320,800","$320,800"));
$data[] = array("Garrett Winters",
        "garrett@example.com",
        "Accountant",
        "Tokyo",
        "2011/07/25",
        "$170,750","$320,800");
$data[] = array("brij lathiya",
        "brij@example.com",
        "Accountant",
        "surat",
        "20222/08/15",
        "$1700,750","$3200,800");        

$arr = array("draw"=>1,"recordsTotal"=>10,"recordsFiltered"=>10,"data"=>$data);

echo json_encode($arr);
die;
?>