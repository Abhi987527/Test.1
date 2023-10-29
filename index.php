<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Tricks Master [ Script ] </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://i.ibb.co/g4N3gfr/20210922-214515.png" rel="icon" type="image/x-icon"/>
  <meta name="description" content="Online Refer Bypass Script. Refer Bypass Script. Task Bypass Script.">
  <meta name="author" content="Online Refer Script, Refer Bypass Script, Task Bypass Script.">
  <meta name="keywords" content="Online Refer Script, Refer Bypass Script, Task Bypass Script.">
</head>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Poppins');
@import url('https://fonts.googleapis.com/css2?family=Solway&display=swap');

/* BASIC */

*{ 
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: "Poppins", sans-serif;
}

*:focus {
    outline: none;
} 

:root { 
 --main-color: #FF0001;
 --shadow-color: rgba(93, 38, 193, 0.4);
}

body { 
 width: 100%;
 height: 100vh;
 background-image: linear-gradient(45deg, var(--main-color) 45%, #ffffff 0%);
 background-repeat: no-repeat; 
}


/* STRUCTURE  */

.wrapper {
 width: 100%;
 min-height: 100%;
 padding: 80px 20px 20px 20px;
}

/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  animation-name: fadeInDown;
  animation-duration: 2s;
  animation-fill-mode: both;
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}


#formContent {
  border-radius: 10px;
  background: #fff;
  width: 95%;
  max-width: 400px;
  min-height: 350px;
  max-height: 450px;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
}

#navbarId { 
  text-align: center;   
}

img {
  width: 25%;
  margin: 20px auto 5px auto;
  padding-top: 30px;
  display: block;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display: inline-block;
  letter-spacing: 0.4px;
  margin: 5px 8px 20px 8px; 
  color: #636e72;
  border-bottom: 1px solid #636e72;
}


input[type=url],select {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 12px 32px;
  text-align: left;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=url]:focus {
  background-color: #fff;
  border-bottom: 2px solid var(--main-color);
}

input[type=url]:placeholder {
  color: #cccccc;
  }
  
  input[type=number],select {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 12px 32px;
  text-align: left;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=number]:focus {
  background-color: #fff;
  border-bottom: 2px solid var(--main-color);
}

input[type=number]:placeholder {
  color: #cccccc;
}


/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: var(--main-color);
  border: none;
  color: white;
  letter-spacing: 1px;
  padding: 12px 80px;
  text-align: center;
  text-decoration: none;
  display: block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 var(--shadow-color);
  box-shadow: 0 10px 30px 0 var(--shadow-color);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px auto 35px auto;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: var(--main-color);
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}


#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  border-radius: 0 0 10px 10px;
}

a {
  color: var(--main-color);
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: var(--main-color);
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

.small_text_msg {
  margin: 0px 0px 10px 25px;
  color: #636e72;
  font-size: 12px;
  display: block;
  text-align: left;
}

.BoxContent {
  background-color: #f6f6f6;
  width: 85%;
  min-height: 30px;
  padding: 15px;
  margin: 5px auto 20px auto;
  border-radius: 5px;
}

.BoxContent p {
  padding: 10px 0px;
  border-top: thin solid #ffffff;
  text-align: center;
  font-size: 12px;
  color: #636e72;
  font-family: 'Solway', serif;
}

pre {
  font-size: 13px;
}

</style>

</style>
<body>
 
        <div class="wrapper fadeInDown"> <div id="formContent"> <div class="fadeIn first" id="navbarId">
       <img src="https://i.giphy.com/media/gJ1zlEIw4c30qpyooF/giphy.webp" alt="Icon">
        
        
        <h2 class="active"><font color='orange'>All </font><font color='red'>Power</font><font color='black'>Bank </font><font color='green'>Refer </font><font color='blue'>Script </font></h2><br><br>
        
        
      </div>


 

<center>
    
<?php

  if(!isset($_POST['submit'])){
    
echo" <form action='' method='POST' accept-charset='utf-8'>
          
         <center>
           <input type='number' class='num' name='number' placeholder='Enter Unregistered Number' required>
         </center>
         <center>
           <input type='url' class='refer' name='refer' placeholder='Enter Your Referral Link' required>
         </center>
         <center>
           <input type='submit' class='sub' name='submit' value='SEND OTP'>
         </center>
        </form>";
            
}

 #PHP File Created By Tricks Master #
    
  error_reporting(0);
   if (isset($_POST['submit'])) {
   $number=$_POST['number'];
   $refer=$_POST['refer'];

$url = "https://m.tm1.fun/aio.php?num=$number&refer=".urlencode($refer)."";

$ch = curl_init("$url");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

  if($output=="OTP Send Successfully !!"){
	
  echo "<center><font color='green'>$output</font></center>";
 
  echo "<form action='otp.php' method='POST'>
          <input type='hidden' name='number' value='$number'>
          <input type='hidden' name='refer' value='$refer'>
          
         <center>
           <input type='number' class='otp' name='otp' placeholder='Enter Your OTP Code' required>
         </center>
  
         <center>
           <input type='submit' class='sub' name='submit' id='submit' value='Verify'>
         </center>
        </form>";
    
}else{
	
	echo "<br><br><center><font color='red'>$output</font></center><br><br><br>";
	
} 
  }  

?>

</center>

<br><div id="formFooter">
        <a class="underlineHover" href="https://telegram.me/tricksmaster111">Jᴏɪɴ Oᴜʀ Tᴇʟᴇɢʀᴀᴍ Cʜᴀɴɴᴇʟ</a>
      </div>
</body> 
 </html>             