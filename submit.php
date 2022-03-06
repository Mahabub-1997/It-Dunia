<?php
sleep(3);

include('db.php');

$aname=$_POST['aname'];
$category=$_POST['category'];
$title=$_POST['title'];
$description=$_POST['description'];

$sql="insert into content(aname,category,title,description) values('$aname','$category','$title','$description')";
$stmt=$con->prepare($sql);
$stmt->execute();
?>