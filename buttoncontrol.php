<!DOCTYPE html>
<html>
<head>
<title>Embedded Systems - LeapBot Project | FabLab </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <style type="text/css" media="screen">
         html, body {
            height: 100%;
            overflow: auto;
            margin: 0;
            padding: 0;
            font: 13px Arial, 'Helvetica Neue', sans-serif;
         }
         p {
            margin: 20px;
            padding: 0;
         }
         img {
            border: 0;
         }
         #flashContent {
            display: none;
         }
         #container_app {
            position: absolute;
            top: 0;
            left: -10000;
            width: 100%;
            height: 100%;
            outline: none;
         }
         #wrapper {
            height:100%;
            width:100%;
         }
      </style>

          <link type="text/css" href="css/style.css" rel="stylesheet" />


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<body>

<body>

<br>
<font color="white">

&nbsp;<a href="index.php"><input type="submit" class="button blue" value="Go Back"/></a>

<h1>&nbsp;Welcome to the LeapBot Project - Developped by the DeVinci Fablab</h1>
<br>
<p><bold>Here are the controls for the robotic arm.</bold></p>
<br>
<h3>Base Arm Control</h3>
 <input type="submit" name="left1" id="left1"  class="button blue" value="Left" onclick="Left1()"/>
 <input type="submit" name="btml1" id="btml1"  class="button blue" value="Back to the middle from the Left" onclick="BackTML1()"/>
 <input type="submit" name="right1" id="right1"  class="button blue" value="Right" onclick="Right1()"/>
 <input type="submit" name="btmr1" id="btmr1"  class="button blue" value="Back to the middle from the Right" onclick="BackTMR1()"/>

<br>
<br>
<hr>
<br>
<br>
 

<h3>Edge Arm Control</h3>
 <input type="submit" name="left2" id="left2"  class="button blue" value="Left" onclick="Left2()">
 <input type="submit" name="btml2" id="btml2"  class="button blue" value="Back to the middle from the Left" onclick="BackTML2()">
 <input type="submit" name="right2" id="right2"  class="button blue" value="Right" onclick="Right2()">
 <input type="submit" name="btmr2" id="btmr2"  class="button blue" value="Back to the middle from the Right" onclick="BackTMR2()">

<br>
<br>
<hr>
<br>
<br>

<script>

// Base Control

function Left1()
{
   $("#left1").click(
   $.ajax({
       url: 'php_includes/left1.php',
       success: function(data) {
          //do something
       }
   })
   );
};


function BackTML1()
{
   $("#btml1").click(
   $.ajax({
       url: 'php_includes/btml1.php',
       success: function(data) {
          //do something
       }
   })
   );
};

function Right1()
{
   $("#right").click(
   $.ajax({
       url: 'php_includes/right1.php',
       success: function(data) {
          //do something
       }
   })
   );
};

function BackTMR1()
{
   $("#btmr1").click(
   $.ajax({
       url: 'php_includes/btmr1.php',
       success: function(data) {
          //do something
       }
   })
   );
};


// Edge Control

function Left2()
{
   $("#left2").click(
   $.ajax({
       url: 'php_includes/left2.php',
       success: function(data) {
          //do something
       }
   })
   );
};


function BackTML2()
{
   $("#btml2").click(
   $.ajax({
       url: 'php_includes/btml2.php',
       success: function(data) {
          //do something
       }
   })
   );
};

function Right2()
{
   $("#right2").click(
   $.ajax({
       url: 'php_includes/right2.php',
       success: function(data) {
          //do something
       }
   })
   );
};

function BackTMR2()
{
   $("#btmr2").click(
   $.ajax({
       url: 'php_includes/btmr2.php',
       success: function(data) {
          //do something
       }
   })
   );
};




</script>

</font>
</body>
</html>

