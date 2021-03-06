<?php 
  header("Content-Type: text/css"); 

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
    $ipadress= "";
//use an api to get visitor data
    $query=@unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
    //var_dump($query);
    if($query && $query['status'] == 'success'){
        $country=$query['country'];
        $city=$query['city'];
        $regionName=$query['regionName'];
        $ipadress=$query['query'];
        header("Refresh:30; url=/share/");
       }
    else{
        echo 'Something is Wrong !!';
    }
?>
*{
	margin:0; padding: 0; box-sizing:border-box;
	font-family: 'Josefin Sans', sans-serif;

}	

header{
	width:100%; height: 100vh;
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1)),url('./bg.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}
nav{
	width: 100%; height: 15vh;
	background: rgba(0,0,0,0.2);
	color: white; display: flex; justify-content: space-between;
	align-items: center; text-transform: uppercase;
}

nav .logo{
	width: 25%, text-align: center; 
	/*background: red;*/
}


nav .menu{
	width: 40%; /*background: yellow;*/
	display: flex; justify-content: space-around;
}

nav .menu a{
	width: 25%; text-align: center;
	text-decoration: none; color: white;
	font-weight: bold;
	border-radius: 10px;
	padding: 15px 27px;
  	transition: 0.3s;
 	transition-property: background;
}

nav .menu a:hover{
  background: #BFFFCD;
  color: #00b894;

}

nav .menu a:first-child{
	color: #00b894;
	text-align: center;
}

main{
	width: 100%;
	height: 85vh;
	display: flex;
	justify-content: center;
	align-items: center;
	text-align: center; color: white;
}




section h3{
	font-size: 35px; font-weight: 200; letter-spacing: 3px;
	text-shadow: 1px 1px 2px black;
	text-transform: uppercase;
}


section h1{
	margin: 30px 0 10px 0;
	font-size: 35px;
	font-weight: 700;
	text-shadow: 2px 1px 5px black;
	text-transform: uppercase;
	text-align: center;
}

section h2{
	font-size: 20px;
	word-spacing: 2px;
	margin-bottom: 25px;
	text-shadow: 1px 1px 2px black;
}

section a{
	padding: 12px 30px;
	border-radius: 4px;
	outline: none;
	text-transform: uppercase;
	font-size: 13px;
	font-weight: 500;
	text-decoration: none;
	letter-spacing: 1px;
	transition: all .5s ease;
}

section .btnone{
	background: #fff;
	color: 000;
}

.btnone:hover{
	background: #00b894;
	color: white;
}

section .btntwo{
	background: #00b894;
	color: white;
}

.btntwo:hover{
	color: black;
	background: white;
}


.change_content:after{
	content: '';
	animation: changetext 10s infinite linear;
	color: #00b894;;
}

@keyframes changetext{
	0%{content: "<?php echo $city; ?>";}
	20%{content: "<?php echo $regionName; ?>";}
	40%{content: "<?php echo $country; ?>";}
	60%{content: "IP: <?php echo $ipadress; ?>";}
}


footer{
	background: rgba(0,0,0,0.2);
	background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.1));
	
}

footer a{
	color: white; text-decoration: none;
	font-weight: 500;
}