<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TechLaneBD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Customized style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Additional style modifications -->
    <style>
        span {
    margin-left: 10px;
}
      .header__right {
        margin: 0px -74px 0 0;
      }
      a.meanmenu-reveal {
    margin-right: 5px;  
      }
      span.brd-separetor {
    margin: 12px;
    }
    /*.ht__pro__desc {
      margin: 18px;
  }*/
  a.breadcrumb-item {
    color: aliceblue;
}
span.breadcrumb-item.active {
    color: aliceblue;
}
  i.zmdi.zmdi-chevron-right {
    color: aliceblue;
}
/*.header__right {
    display: flex;
    justify-content: flex-end;
    height: 80px;
    align-items: center;
}*/
ul.main__menu {
    margin-right: 80px;
}
.logo {
    margin-left: -40px;
}
.sin__desc {
    margin-left: -27px;
}

select#qty {
    margin: 5px 0 0 10px;
}

.sin__desc.align--left {
    margin: 15px 0 0 -28px;
}
a.fr__btn {
    margin-top: -1px;
}

      </style>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo"><p style="font-family: cabin;"><span>TechLaneBD</span></p></div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Home</a></li>
                                      <!-- Associative array -->
                                      <?php
									                    	foreach($cat_arr as $list){
											                ?>
										               	<li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
											              <?php
										                }
										              ?>
                                     
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <?php
                                          foreach($cat_arr as $list){
                                              ?>
                                            <li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
                                          <?php
                                          }
                                          ?>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__account">
                                        <?php if(isset($_SESSION['USER_LOGIN'])){
											echo '<a href="logout.php">Logout</a> <a href="my_order.php">My Order</a>';
										}else{
											echo '<a href="login.php">Login/Register</a>';
										}
										?>
										
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="cart.php"><span class="htc__qua"><?php echo $totalProduct?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </header>