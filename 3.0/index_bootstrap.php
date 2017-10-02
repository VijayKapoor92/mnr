<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vijay
 * Date: 25/09/17
 * Time: 16:37
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../../library/bootstrap4/css/bootstrap.min.css" />
    <style>
        .list-group{
            width: 10%;
        }
    </style>
</head>
<body>
<!-- List group -->
<div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active border-right-0 border-left-0 border-top-0" data-toggle="list" href="#home" role="tab"><i class="fa fa-home"></i><span class="ml-4">Home</span></a>
    <a class="list-group-item list-group-item-action border-right-0 border-left-0" data-toggle="list" href="#profile" role="tab"><i class="fa fa-user"></i><span class="ml-4">Profile</span></a>
    <a class="list-group-item list-group-item-action border-right-0 border-left-0" data-toggle="list" href="#messages" role="tab">Messages</a>
    <a class="list-group-item list-group-item-action border-right-0 border-left-0" data-toggle="list" href="#settings" role="tab">Settings</a>
</div>
</body>
</html>
<script src="../../../library/jquery/jquery-3.2.1.min.js"></script>
<script src="popper.js"></script>
<script src="../../../library/bootstrap4/js/bootstrap.min.js"></script>
