<?php
	session_start();
	include'connection.php';
	$username = $_SESSION["username"];

	$sql = "SELECT agent_id FROM agent WHERE agent_id = '$username'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
     
    }
    else {
	header("Location: clientHome.php");
   }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/basic.css" rel="stylesheet" />
   <style>
    .navbar-cls-top .navbar-brand {
    color: #fff;
    background: #556b2f;
    width: 260px;
    text-align: center;
    height: 75px;
    font-size: 20px;
    letter-spacing: 1px;
    font-weight: 900;
    padding-top: 25px;
    text-transform: uppercase;
}


.header-right {
    color: #fff;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;
}

.navbar-cls-top .navbar-brand:hover {
    background: #ab0003;
    color: #fff;
}

.user-img-div {
    min-height: 140px;
    padding: 20px;
    background-color: #1077f2;
}

.user-img-div img {
    max-height: 60px;
}

.user-img-div .inner-text {
    text-align: right;
    position: relative;
    color: #fff;
    font-weight: 800;
    line-height: 25px;
}

.active-menu {
    background-color: #000000 !important;
}

.active-menu-top {
    background-color: #000 !important;
}

.arrow {
    float: right;
}

.fa.arrow:before {
    content: "\f104";
}

.active>a>.fa.arrow:before {
    content: "\f107";
}


.nav-second-level li,
.nav-third-level li {
    border-bottom: none !important;
}

.nav-second-level li a {
    padding-left: 37px;
}

.nav-third-level li a {
    padding-left: 55px;
}

.sidebar-collapse,
.sidebar-collapse .nav {
    background: none;
}

.sidebar-collapse .nav {
    padding: 0;
}

.sidebar-collapse .nav>li>a {
    color: #fff;
    background: #004953;
    text-shadow: none;
    padding: 15px 40px;
    border-bottom: 1px solid #7cb9e8;
}

.sidebar-collapse>.nav>li>a {
    padding: 15px 10px;
}

.sidebar-collapse .nav>li>a:hover,
.sidebar-collapse .nav>li>a:focus {
    background: #0A0A0A;
    outline: 0;
}



.nav-second-level>li:last-child>a:after,
.nav-third-level>li:last-child>a:after {
    height: 50%;
}

.nav-third-level>li>a:after,
.nav-third-level>li>a:before {
    left: 40px;
}

.navbar-side {
    border: none;
    background-color: #202020;
}

.navbar-cls-top {
    background: #7cb9e8;
    border-bottom: none;
}


.navbar-default {
    border: 0px solid black;
}

.navbar-header {
    background: #000000;
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
    background-color: #3075d7;
}

.navbar-default .navbar-toggle {
    border-color: #fff;
}

.navbar-default .navbar-toggle .icon-bar {
    background-color: #FFF;
}

.nav>li>a>i {
    margin-right: 10px;
}
    </style>
</head>



<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
	
            <div class="navbar-header">
                	
                <a class="navbar-brand" href="index.php">Life Better Save You</a>
            </div>

            <div class="header-right">
			
                 <a href="<?php echo "logout.php" ?>" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php
									if(!isset($_SESSION["username"])){
										header("Location: index.php");
									}else {
										echo "welcome, ".$_SESSION["username"];
									}
								?>
                            <br />
                              
                            </div>
                        </div>

                    </li>


                 <li>
                      <a href="client.php"><i class="fa fa-users "></i>CLIENTS</a >  
                 </li> 
                 <li>
                      <a href="agent.php"><i class="fa fa-life-saver "></i>AGENTS</a>
                            
                 </li>   
                 <li>
                      <a href="policy.php"><i class="fa fa-pencil-square-o "></i>POLICY</a>
                          
                 </li>     
                 <li>
                      <a href="nominee.php"><i class="fa fa-heart "></i>NOMINEE</a>
                            
                 </li> 
                 <li>
                      <a href="payment.php"><i class="fa fa-credit-card "></i>PAYMENTS</a>
                            
                 </li>    
                    
                     
                </ul>

            </div>
		

        </nav>
     </div>
                                </body>
                                </html>
                                
		 
		  
	
   