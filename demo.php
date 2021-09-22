<?php

if( $_REQUEST["textnames"] ) {

    $name = $_REQUEST['textnames'];
    echo "FirstName is : ". $name;

    $lastname = $_REQUEST['lastname'];
    echo "Lastname is : ". $lastname;


    $gender = $_REQUEST['gender'];
    echo "<br />Your gender : ". $gender;

    $personaladdress = $_REQUEST['personaladdress'];
    echo "<br />Your Address : ". $personaladdress;


    $country = $_REQUEST['country'];
    echo "<br />Your Country : ". $country;

    $state = $_REQUEST['state'];
    echo "<br />Your State : ". $state;

    $city = $_REQUEST['city'];
    echo "<br />Your City : ". $city;


    $pincode = $_REQUEST['pincode'];
    echo "<br />Your pincode : ". $pincode;

    $dob = $_REQUEST['dob'];
    echo "<br />Your dob : ". $dob;

    $mobi = $_REQUEST['phone'];
    echo "<br />Your Mobile No. : ". $mobi;

    $email = $_REQUEST['emailid'];
    echo "<br />Your Email : ". $city;

    $course = $_REQUEST['course'];
    echo "<br />Your course : ". $city;
}
?>