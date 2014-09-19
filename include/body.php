<?php

$page = $_GET['p'];

if ($page == "")
{
    @include('pages/index.php');
}

switch($page)
{    
    case "index":
        @include('pages/index.php');
        break;
    case "register":
        @include('pages/register.php');
        break;
    case "info":
        @include('pages/info.php');
        break;
    case "register_success":
        @include('pages/register_success.php');
        break;
}
?>