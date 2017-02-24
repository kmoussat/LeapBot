<!doctype html>
<html lang="de">
	<head>
    <meta charset="UTF-8">
    <title>Embedded Systems - LeapBot Project | FabLab</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style2.css"/>
	</head>
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


	<body>
		
		<div id="wrapper">
			<font color="white">

&nbsp;<a href="index.php"><input type="submit" class="button blue" value="Go Back"/></a>


<h1>&nbsp;Welcome to the LeapBot Project - Developped by the DeVinci Fablab</h1>
<br>
<p><bold>Here are the controls for the robotic arm.</bold></p>
<ul>
<li>Base Arm</li>
<ul>
<li>Right => Swipe Right</li>
<li>Left => Swipe Left</li>
<li>Back to the middle => Fist or Show Fingers</li>
</ul>
<li>Edge Arm</li>
<ul>
<li>Right => Swipe Up</li>
<li>Left = Swipe Down</li>
<li>Back to the middle => Circle or clap</li>
</ul>
</ul>
<br>
<center>

                         <h2>Status:</h2>
                        <div id="statusIndicator">&nbsp;</div>&nbsp;<div id="status"></div>
<br>

			<h2>Your movements:</h2>
			<div id="log"></div>
		
		
		</div>
		
</center>
		<script src="js/leap-0.6.0.min.js"></script>
		<script src="js/leap-gestures.js"></script>

		<script>
			
			var indicatorTimeout;
			
			/*
			 *  The "status changed" function gets fired everytime one of the following happens:
			 *  
			 *  * The Leap gets connected / disconnected
			 *  * A gesture is not detected (= confidence under the threshold)
			 *  * A gesture is detected
			 */
			function statusChanged(e) {
				if(e.type == "gesture") {
					if(e.recognized) {
						document.getElementById("statusIndicator").style.background = "green";
					} else {
						console.log(e.message);
						document.getElementById("statusIndicator").style.background = "orange";
						indicatorTimeout = setTimeout(function() {
							if(leapGestures.isConnected()) {
								document.getElementById("statusIndicator").style.background = "green";
							} else {
								document.getElementById("statusIndicator").style.background = "red";
							}
						}, 2000);
					}
				}
				
				if(e.type == "connection") {
					if(e.connected) {
						console.log("Leap has been connected!");
						document.getElementById("statusIndicator").style.background = "green";
					}
					else {
						console.log("Leap has been disconnected!");
						document.getElementById("statusIndicator").style.background = "red";
					}
				}
				
				document.getElementById("status").innerHTML = e.message;
			}
			
			function swipeLeft(e) {
				console.log("--- SWIPE LEFT ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Base Arm On the Left<br/>";
				  $.ajax({
       url: 'php_includes/left1.php',
       success: function(data) {
          //do something
       }
   });

			}
			
			function swipeRight(e) {
				console.log("--- SWIPE RIGHT ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Swipe Right<br/>";
							  $.ajax({
       url: 'php_includes/right1.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Base Arm On the Right<br/>";
			}
			function swipeUp(e) {
				console.log("--- SWIPE UP ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Swipe Up<br/>";
                                                          $.ajax({
       url: 'php_includes/right2.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Edge Arm On the Rightt<br/>";

			}
			function swipeDown(e) {
				console.log("--- SWIPE DOWN ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Swipe Down<br/>";
                                                          $.ajax({
       url: 'php_includes/left2.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Edge Arm On the Left<br/>";

			}
			function circle(e) {
				console.log("--- CIRCLE ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Circle<br/>"
                                                          $.ajax({
       url: 'php_includes/btmr2.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Edge Arm on the Middle<br/>";
;
			}
			function clap(e) {
				console.log("--- CLAP ---");
				console.log(e);
				document.getElementById("log").innerHTML += "Clap<br/>";
                                                          $.ajax({
       url: 'php_includes/right1.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Edge Arm On the Middle<br/>";

			}
			function hand(e) {
				if(e.fingers == 0) {
					console.log("--- FIST ---");
					document.getElementById("log").innerHTML += "Fist<br/>";
                                                          $.ajax({
       url: 'php_includes/btmr1.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Base Arm On the Middle<br/>";

				} else {
					console.log("--- "+e.fingers + " FINGERS ---");
					document.getElementById("log").innerHTML += e.fingers +" Fingers<br/>"
                                                            $.ajax({
       url: 'php_includes/btml1.php',
       success: function(data) {
          //do something
       }
   });
   document.getElementById("log").innerHTML += "Base Arm On the Middle<br/>";
;
				}
				console.log(e);
			}

			/*
			 * Another way to achieve the same is to use controller events: 
			 
			var config = {
				useControllerEvents: true,
				preventBackForth: true,
				confidenceThreshold: 0.15,
				handDuration: 1500
			}
			var leapGestures = new LeapGestures(config);
			var c = leapGestures.getLeapController();
			c.on("gestureSwipeLeft", swipeLeft);
			c.on("gestureSwipeRight", swipeRight);
			c.on("gestureSwipeDown", swipeDown);
			c.on("gestureSwipeUp", swipeUp);
			c.on("gestureClap", clap);
			c.on("gestureHand", hand);
			c.on("gestureCircle", circle);
			c.on("statusChanged", statusChanged);
	
			*/
			
			config = {
				// Event handles for recognized gestures
				swipeLeft: swipeLeft,
				swipeRight: swipeRight,
				swipeUp: swipeUp,
				swipeDown: swipeDown,
				circle: circle,
				hand: hand,
				clap: clap,
				statusChanged: statusChanged, // gets called when the status changes
				
				preventBackForth: true, // This enables users to continuously swipe in one direction.
				confidenceThreshold: 0.15, // Gestures with a confidence lower than this are ignored
				handDuration: 1500, // How long a fist has to be kept to trigger the event (in ms)
			};

			var leapGestures = new LeapGestures(config);
		</script>

	</body>
</html>
