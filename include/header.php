<?php
include('/config/vars.php');
?>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <meta name="description" content="Web Design">
  <meta name="author" content="Tim Levinsson and Nirelz">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" type="image/png" href="images/favicon.ico">
  <script type="text/javascript" src="./jquery/jquery-1.2.6.min.js"></script>
    <script type="text/javascript">
    function slideSwitch() {
        var $active = $('#slideshow IMG.active');

        if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

        var $next =  $active.next().length ? $active.next()
            : $('#slideshow IMG:first');

        $active.addClass('last-active');

        $next.css({opacity: 0.0})
            .addClass('active')
            .animate({opacity: 1.0}, 1000, function() {
                $active.removeClass('active last-active');
            });
    }

    $(function() {
        setInterval( "slideSwitch()", 5000 );
    });

  </script>
</head>
<body>
<div id="navs">