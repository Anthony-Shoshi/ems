<?php

$con = mysqli_connect("localhost","root","");

if($con) {
	echo "<p>Database connected.</p>";
}


$query = "drop database if exists event_management";
$result = mysqli_query($con,$query);

if ($result) {
	echo "<p>Database successfully droped.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}


$query = "create database event_management";
$result = mysqli_query($con,$query);

if ($result) {
	echo "<p>Database successfully created.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

    //========Create User Registation Table========//
    $connect=mysqli_connect("localhost","root","","event_management");
    $query="CREATE TABLE user(
    id int(20) primary key AUTO_INCREMENT,
    fullName varchar(100),
    userName varchar(50),
    email varchar(120),
    password varchar(50),
    pAddress varchar(100),
    pCode varchar(100),
    Fnamber varchar(100),
    dateBirth varchar(20),
    age varchar(20),
    gender varchar(20),
    attempts int(10), 
    time_Stamp int(10),
    userType varchar(20)    
    )";
    $result=mysqli_query($connect,$query);
    if ($result) {
        echo "Create user table successfull </p>";
    }else{
        echo "Error create user table" .mysqli_error($connect);
    }

    //========Insert Admin Values========//
   $query="insert into user values('','admin','admin123','admin@gmail.com','Admin123@','Dhaka','1207','admin','01/01/2018',25,'Male',0,0,'admin')";
    $result=mysqli_query($connect,$query);
    if ($result) {
        echo "Admin Data successfully Entered.</p>";
    }else{
        echo "Error Admin Data Entered" .mysqli_error($connect);
    }

$con = mysqli_connect("localhost","root","","event_management");
$query = "create table addevent (
				id int (11) PRIMARY KEY AUTO_INCREMENT,
				etitle varchar (50),
				etheme varchar (50),
				guestnum int (15),
				edate varchar (50),
				stime varchar (50),
				etime varchar (50),
				edes varchar (255))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>addevent Table successfully created.</p>";
}
else {
	echo "Error : ".mysql_error($con);
}

// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table addtheme (
				id int (11) PRIMARY KEY AUTO_INCREMENT,
				ttitle varchar (50),
				tdes varchar(255))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>addtheme Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

$query="insert into addtheme values ('','Wedding','w'),
									('','Meeting','m'),
									('','Birthday','b'),
									('','Seminer','s'),
									('','Workshop','wr')";
    $result=mysqli_query($connect,$query);
    if ($result) {
        echo "Theme successfully Entered.</p>";
    }else{
        echo "Error Admin Data Entered" .mysqli_error($connect);
    }


// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table other (
					oid int (11) PRIMARY KEY AUTO_INCREMENT,
					dj varchar (10),
					photo varchar (10),
					bar varchar (10),
					transport varchar (10),
					tsystem varchar (15),
					vnum int (4))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>other Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table transport (
					transid int (11) PRIMARY KEY AUTO_INCREMENT,
					transname varchar(50),
					transdes varchar(255))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>transport Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}
$query="insert into transport values ('','Private Car','pc'),
									('','Hiace','h'),
									('','Bus','b')";
    $result=mysqli_query($connect,$query);
    if ($result) {
        echo "Transport successfully Entered.</p>";
    }else{
        echo "Error Admin Data Entered" .mysqli_error($connect);
    }
// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table food (
					fid int (11) PRIMARY KEY AUTO_INCREMENT,
					fquality varchar (15),
					ftime varchar (100))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>food Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table fooditem (
					fiid int (11) PRIMARY KEY AUTO_INCREMENT,
					bitems varchar (200),
					litems varchar (200),
					ditems varchar (200))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>fooditem Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

// $con = mysqli_connect("localhost","root","","event_management");

// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table contact (
					conid int (11) PRIMARY KEY AUTO_INCREMENT,
					cname varchar (50),
					cemail varchar (100),
					cphone varchar (50),
					cmes varchar (255))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>contact Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table fooditemlist (
					item_id int (11) PRIMARY KEY AUTO_INCREMENT,
					item_name varchar (110),
					item_type varchar (50))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>fooditemlist Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}
$query="insert into fooditemlist values ('','Dal-Porata,Tea','Breakfast'),
									('','Bread,Coffee','Breakfast'),
									('','Chapati','Breakfast'),
									('','Polau','Dinner'),
									('','Biriany','Dinner'),
									('','Khicuri','Dinner'),
									('','Fried-Rice,Chicken Fry','Lunch'),
									('','Noodles,Fried Chicken','Lunch'),
									('','Bhuna Khicuri,','Lunch')";
    $result=mysqli_query($connect,$query);
    if ($result) {
        echo "Food Items successfully Entered.</p>";
    }else{
        echo "Error Admin Data Entered" .mysqli_error($connect);
    }
// $con = mysqli_connect("localhost","root","","event_management");
$query = "create table fooditemtype (
					fooditemtype_id int (11) PRIMARY KEY AUTO_INCREMENT,
					fooditemtype_name varchar (110))";
$result = mysqli_query($con,$query);
if ($result) {
	echo "<p>fooditemtype Table created successfully.</p>";
}
else {
	echo "Error : ".mysqli_error($con);
}

$query = "INSERT INTO fooditemtype VALUES ('','Breakfast'),
										  ('','Lunch'),
										  ('','Dinner')";

$result = mysqli_query($con,$query);

?>