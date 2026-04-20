<?php
if (!isset($base_path) || $base_path === '') {
	$script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
	$script_dir = str_replace('\\', '/', $script_dir);
	$script_dir = rtrim($script_dir, '/');
	$base_path = ($script_dir === '' || $script_dir === '.') ? '/' : $script_dir . '/';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo isset($page_title) ? $page_title : 'VHS Engineering | Comprehensive Structural Engineering Solutions'; ?></title>
<!-- Stylesheets -->
<link href="<?php echo $base_path; ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/meanmenu.min.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/responsive.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="<?php echo $base_path; ?>assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="<?php echo $base_path; ?>assets/css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo $base_path; ?>images/LOGO.png" type="image/x-icon">
<link rel="icon" href="<?php echo $base_path; ?>images/LOGO.png" type="image/x-icon">

<!-- SEO Meta Tags -->
<meta name="description" content="<?php echo isset($page_description) ? $page_description : 'VHS Engineering provides comprehensive structural engineering solutions including steel detailing, BIM services, connection design, and structural consultancy worldwide.'; ?>">
<meta name="keywords" content="structural engineering, steel detailing, BIM services, connection design, structural design consultancy, estimodelling, pre-bid services, deputation services">
<meta name="author" content="VHS Engineering">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

<!-- Cursor -->
<div class="cursor"></div>
<div class="cursor-follower"></div>
<!-- Cursor End -->

<!-- Main Header -->
<header class="main-header header-style-one">

<!-- Header Lower -->
<div class="header-lower">
<div class="auto-container">
<div class="inner-container">
<div class="d-flex justify-content-between align-items-center">

<div class="logo-box">
<div class="logo"><a href="<?php echo $base_path; ?>index.php"><img src="<?php echo $base_path; ?>images/LOGO.png" alt="" title="VHS Engineering"></a></div>
</div>

<div class="nav-outer d-flex flex-wrap">
<!-- Main Menu -->
<nav class="main-menu navbar-expand-md">
<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
<ul class="navigation clearfix">
<li><a href="<?php echo $base_path; ?>index.php">Home</a></li>
<li><a href="<?php echo $base_path; ?>about.php">About</a></li>
<li class="dropdown"><a href="<?php echo $base_path; ?>services.php">Services</a>
<ul>
<li><a href="<?php echo $base_path; ?>structural-design-and-consultancy.php">Structural Design &amp; Consultancy</a></li>
<li><a href="<?php echo $base_path; ?>bim-services.php">BIM Services</a></li>
<li><a href="<?php echo $base_path; ?>Estimodelling-and-Pre-Bid-Services.php">Estimodelling &amp; Pre-Bid Services</a></li>
<li><a href="<?php echo $base_path; ?>Connection-Design-Services.php">Connection Design Services</a></li>
<li><a href="<?php echo $base_path; ?>Steel-Detailing-Services.php">Steel Detailing Services</a></li>
<li><a href="<?php echo $base_path; ?>Deputation-Services.php">Deputation Services</a></li>
<li><a href="<?php echo $base_path; ?>Other-Engineering-Services.php">Other Engineering Services</a></li>
</ul>
</li>
<li><a href="<?php echo $base_path; ?>projects.php">Projects</a></li>
<li><a href="<?php echo $base_path; ?>blog.php">Blog</a></li>
<li><a href="<?php echo $base_path; ?>contact.php">Contact</a></li>
</ul>
</div>
</nav>
</div>

<!-- Main Menu End-->
<div class="outer-box d-flex align-items-center flex-wrap">
<div class="main-header_button">
<a href="<?php echo $base_path; ?>contact.php" class="theme-btn btn-style-three">
<span class="btn-wrap">
<span class="text-one">GET A QUOTE <i><img src="<?php echo $base_path; ?>assets/images/icons/arrow-1.svg" alt="" /></i></span>
<span class="text-two">GET A QUOTE <i><img src="<?php echo $base_path; ?>assets/images/icons/arrow-1.svg" alt="" /></i></span>
</span>
</a>
</div>
<div class="mobile-nav-toggler"><span class="icon fa-classic fa-solid fa-bars fa-fw"></span></div>
</div>

</div>
</div>
</div>
</div>
<!--End Header Lower-->

<!-- Mobile Menu  -->
<div class="mobile-menu">
<div class="menu-backdrop"></div>
<div class="close-btn"><span class="icon fa-xmark"></span></div>
<nav class="menu-box">
<div class="nav-logo"><a href="<?php echo $base_path; ?>index.php"><img src="<?php echo $base_path; ?>assets/images/mobile-logo.svg" alt="" title=""></a></div>
<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
</nav>
</div>
<!-- End Mobile Menu -->

</header>
<!-- End Main Header -->

