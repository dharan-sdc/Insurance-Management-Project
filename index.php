<?php
session_start();

if(isset($_SESSION["username"])){
	header("Location: home.php");
	}
?>

<head>
<style>

body{
  background: #ADD8E6;
  background-repeat:no-repeat;
  background-image:url(trail/l1.jpg);
  background-size:cover;
}

.container{
	width: 450px;
  height: 500px;
display:inline-block;
  margin-left:35px;
	padding-top: 1px;
}

.login-page {
  width: 360px;
  padding: 0 0 0;
  margin: auto;
 
  
}
.form {
  padding-top: 30px;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 349px;
  max-height: 489px;
  margin: 0 auto 100px;
  padding: 45px 45px 40px 45px;
   border:2px;
  border-radius:12px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius:12px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  border-radius:12px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}

.imgs{
	  margin-top: 0%;
	  margin-left: 37%;
		weight: 40%;
		height: 38%;
    display:block;
   
}

p{
  margin-top:12px;
  bottom:0;
  font-size:12px;
  font-weight:700;
  left:0;
}

img{
    margin-top: 0;
		weight: 150px;
		height: 150px;
    margin-left:220px;
}

</style>
<title>Login Page</title>
</head>
<body>
  <img class="imgs" src="trail/logo4.png" alt="Login Logo">
  
  <div class="container">
    
	  <div class="login-page">
	    <div class="form">
         <h3 style="color:blue;  margin-top:0; margin-bottom:25px;">JARVIS LIFE INSURANCE CORPORATION</h3>
		    <form class="login-form" action="login.php" method="POST">
         
          <input type="text" name="username" id="" placeholder="Username"/>
          <input type="password" name="password" id="" placeholder="Password" />
          <button>log in</button>
          <p>By clicking on "View Term Quotes" you agree to our Privacy Policy
          and Terms of use..</p>
          <p>Tax benefit is subject to changes in tax laws</p>
		    </form>
	    </div>
      
	  </div>
  </div>
  <img src="trail/l3.png" alt="">
  <img src="trail/l4.png" alt="">
  <img src="trail/l5.png" alt="">
  
</body>

