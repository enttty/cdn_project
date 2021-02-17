<!DOCTYPE html>
<html>
<head>
    <title>CDN_App</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="styleload.css">
    <link rel="stylesheet" type="text/css" href="style.php"/>
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
            <?php
    //get visitor ip
    function get_ip()
    {
        if(isset($_SERVER['HTTP_CLIENT_IP']))
        {
            return $_SERVER['HTTP_CLIENT_IP'];

        }
        elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else{
            return (isset($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR'] : '');
        }
    }
    $ip=get_ip();
    $country = "";
    $city = "";
    $regionName = "";
//use an api to get visitor data
    $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    //var_dump($query);
    if($query && $query['status'] == 'success'){
        $country=$query['country'];
        $city=$query['city'];
        $regionName=$query['regionName'];
       }
    else{
        echo 'Something is Wrong !!';
    }
?>
            <h3>Welcome To Our CDN_App</h3>
            <h1>You are from <?php echo $country; ?>, <span class="change_content"> </span></h1>
            <h2>Based on your location we are redirecting you to <br>nearest located server in next 30 seconds</h2>
        <script type = "text/javascript">
            var status="<?php echo $query['status']; ?>"
            if(status=="success"){
               function Redirect() {
               window.location = "/httb";
                }            
            setTimeout('Redirect()',30000);
         }
        </script>
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
            <!-- <a href="./about.html" class="btntwo">Learn more about</a> -->
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