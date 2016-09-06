<?php
    $recipient = "Heather";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "13 SW 2nd Ave, Portland, OR 97201";
    $west_address = "417 W 6th Ave, Conshohocken, PA 19104";
    $downtown_order = "20 gallons of milk, 10 cartons of cream";
    $northwest_order = "50 lbs dark roast";
    $south_order = "40 lbs light roast";
    $west_order = "20 kilos of special roast";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <p>Hi <?php echo $recipient; ?>, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><?php echo $downtown_order; ?></p>
    <p><?php echo $downtown_address; ?></p>
    <p><?php echo $northwest_order; ?></p>
    <p><?php echo $northwest_address; ?></p>
    <p><?php echo $south_order; ?></p>
    <p><?php echo $south_address; ?></p>
    <p><?php echo $west_order; ?></p>
    <p><?php echo $west_address; ?></p>
    <p>Thanks,</p>
    <p>Diane</p>
</body></html>
