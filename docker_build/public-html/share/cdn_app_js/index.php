<!DOCTYPE html>
<html>
<head>
    <title>CDN_App</title>
    <style type='text/css'>
   	*.change_content:after{
	content: '';
	animation: changetext 10s infinite linear;
	color: #00b894;;
	}

	@keyframes changetext{
	0%{content: "Please" ;}
	20%{content: "Wait";}
	40%{content: "For A While" ;}
	60%{content: "We are redirecting you " ;}
	80%{content: "In one of our nearest servers :)" ;}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="styleload.css">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
<nav>
    <div class="logo"><h1 class="animate__animated animate__shakeY animate__infinite infinite">CDN_App <img src="https://img.icons8.com/plasticine/64/000000/cloud.png" width="40" height="40"  /></h1></div>
    <div class="menu">
        <a href="./index.php">Home</a>
        <a href="https://github.com/enttty/cdn_project">Source</a>
        <a href="./credits.html">Credits</a>
    </div>
</nav>
    <main>
     <section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
	<script> 
		$.getJSON("http://ip-api.com/json/",function(data) { 
			$('#city').html(data.city);
			$('#ipadress').html(data.query);
			$('#regionName').html(data.regionName);
			$("#location").html(data.country);
			$("#stat").html(data.status);
		}) 
	</script>
	<?php
		$ip="<span id='ipadress'></span>";
		$city="<span id='city'></span>";
		$regionName="<span id='regionName'></span>";
	?>
            <h3>Welcome To Cloud Computing Project: CDN_App</h3>
            <h1>You are from <span id="location"></span>, <span><?php echo $city; ?>, <?php echo $regionName; ?>, with IP: <?php echo $ip; ?></span>
            </br>
            	<span class="change_content"></span>
            </h1>
            <h2>Based on your location we are redirecting you to <br>nearest located server in next 30 seconds</h2>
        <?php 
		
		$val_status="<p id='stat'></p>"; 

		$val_success="success";
		if(strcmp($val_status, $val_success)!== 0){
		echo "<script type = 'text/javascript'>
          {
            function Redirect() {
               window.location = './httb/';
                }            
            setTimeout('Redirect()',30000);
         }
        </script>";
		}
		else{
			echo "Something is Wrong !!";
		}
		?>
            <div class="loading">
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div>
                <div class="obj"></div> 
            </div>
            <br>
            <br>
            <br>
            <br>
            <!-- In our CDN_App, The homepage wave animation CSS available in the styleload.css file, The bouncing logo, and the text animation CSS is available in the index.php file and it is using animate.min.css file from external source, we are using IP API in JSON format to find location info in javascript then showing that using PHP as well as plain HTML, based on this IP location we are redirecting user to our nearest server/node, we tried PHP at the beginning for redirecting our user but it was some issues for rendering in the cloud server after deployment, so we converted the PHP code to javascript which takes information from user browser and doesn't need to rely on the server end. All the images that have been used in our project are referenced from their source links. -->
        </section>
    </main>

</header>
<footer>
       <center>
        <a> Made with <img src="https://img.icons8.com/plasticine/100/000000/like--v1.png" width="20" height="20" /> in Germany <img src="https://img.icons8.com/color/64/000000/germany.png" width="20" height="20"/></a>
        </center>
</footer>

</body>
</html>
