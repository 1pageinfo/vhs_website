<?php
if (!isset($base_path) || $base_path === '') {
	$script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
	$script_dir = str_replace('\\', '/', $script_dir);
	$script_dir = rtrim($script_dir, '/');
	$base_path = ($script_dir === '' || $script_dir === '.') ? '/' : $script_dir . '/';
}

if (!isset($site_url) || $site_url === '') {
	$site_url = 'https://vhsengg.com';
}

$site_url = rtrim($site_url, '/');
$request_uri = $_SERVER['REQUEST_URI'] ?? '/index.php';
$request_path = parse_url($request_uri, PHP_URL_PATH);
$request_path = $request_path ? trim(str_replace('\\', '/', $request_path), '/') : 'index.php';

if ($request_path === '') {
	$request_path = 'index.php';
}

$script_name = strtolower(basename($request_path));
$is_home = ($script_name === 'index.php');
$canonical_path = $is_home ? '' : $request_path;

$seo_map = [
	'index.php' => [
		'title' => 'VHS Engineering | Structural Engineering, Steel Detailing & BIM Services',
		'description' => 'VHS Engineering delivers structural design, steel detailing, BIM coordination, connection design, and engineering deputation services for global projects.',
		'keywords' => 'VHS Engineering, structural engineering company, steel detailing, BIM coordination, connection design, estimodelling, engineering deputation',
		'type' => 'website',
	],
	'about.php' => [
		'title' => 'About VHS Engineering | Structural Engineering Team',
		'description' => 'Learn about VHS Engineering, our quality-first process, technical capabilities, and commitment to accurate, coordinated engineering deliverables.',
		'keywords' => 'about VHS Engineering, structural engineering team, steel detailing experts, BIM engineering company',
	],
	'services.php' => [
		'title' => 'Engineering Services | VHS Engineering',
		'description' => 'Explore structural engineering services from design and consultancy to BIM, connection design, steel detailing, and pre-bid support.',
		'keywords' => 'engineering services, structural design consultancy, BIM services, steel detailing services, pre-bid estimating',
	],
	'projects.php' => [
		'title' => 'Projects | VHS Engineering Portfolio',
		'description' => 'View selected structural engineering and steel detailing projects delivered with accuracy, coordination, and practical fabrication support.',
		'keywords' => 'engineering projects, steel detailing portfolio, structural design projects, BIM project delivery',
	],
	'blog.php' => [
		'title' => 'Engineering Blog | VHS Engineering Insights',
		'description' => 'Read expert articles on structural design accuracy, BIM coordination, steel detailing, connection design, and pre-bid engineering strategy.',
		'keywords' => 'structural engineering blog, BIM coordination articles, steel detailing insights, connection design guide',
		'type' => 'website',
	],
	'contact.php' => [
		'title' => 'Contact VHS Engineering | Request a Quote',
		'description' => 'Contact VHS Engineering for structural engineering, BIM, connection design, and steel detailing support tailored to your project timeline.',
		'keywords' => 'contact VHS Engineering, structural engineering quote, BIM service inquiry, steel detailing contact',
	],
	'structural-design-and-consultancy.php' => [
		'title' => 'Structural Design & Consultancy Services | VHS Engineering',
		'description' => 'Professional structural design and consultancy services focused on safety, constructability, code compliance, and efficient execution.',
		'keywords' => 'structural design consultancy, structural engineering services, code compliant design, constructability engineering',
	],
	'bim-services.php' => [
		'title' => 'BIM Services | Coordinated Structural Models by VHS Engineering',
		'description' => 'BIM services for structural projects including model coordination, clash reduction, and reliable outputs for fabrication and construction.',
		'keywords' => 'BIM services, BIM coordination, clash detection, structural BIM modeling',
	],
	'estimodelling-and-pre-bid-services.php' => [
		'title' => 'Estimodelling & Pre-Bid Services | VHS Engineering',
		'description' => 'Improve bid confidence with accurate estimodelling and pre-bid engineering services that reduce risk before construction starts.',
		'keywords' => 'estimodelling services, pre-bid engineering, preconstruction estimating, bid support services',
	],
	'connection-design-services.php' => [
		'title' => 'Connection Design Services | VHS Engineering',
		'description' => 'Connection design services for steel structures, engineered for strength, constructability, and coordinated fabrication deliverables.',
		'keywords' => 'connection design services, steel connection engineering, structural steel joints, buildable connection design',
	],
	'steel-detailing-services.php' => [
		'title' => 'Steel Detailing Services | VHS Engineering',
		'description' => 'Accurate steel detailing services with shop drawings and coordinated details that support efficient fabrication and erection workflows.',
		'keywords' => 'steel detailing services, shop drawings, fabrication detailing, erection drawings',
	],
	'deputation-services.php' => [
		'title' => 'Engineering Deputation Services | VHS Engineering',
		'description' => 'Flexible engineering deputation services to extend your team with experienced structural and detailing professionals.',
		'keywords' => 'engineering deputation, technical staffing services, structural engineering support, offshore engineering team',
	],
	'other-engineering-services.php' => [
		'title' => 'Other Engineering Services | VHS Engineering',
		'description' => 'Additional engineering services by VHS Engineering to support project-specific requirements from concept to construction.',
		'keywords' => 'other engineering services, project engineering support, custom structural services',
	],
	'privacy-policy.php' => [
		'title' => 'Privacy Policy | VHS Engineering',
		'description' => 'Read the VHS Engineering Privacy Policy to understand how we collect, use, and protect personal information.',
		'keywords' => 'privacy policy, data protection, VHS Engineering privacy',
	],
	'terms-of-service.php' => [
		'title' => 'Terms of Service | VHS Engineering',
		'description' => 'Review the Terms of Service for using the VHS Engineering website and related service information.',
		'keywords' => 'terms of service, website terms, VHS Engineering legal',
	],
	'project-detail.php' => [
		'title' => 'Project Detail | VHS Engineering',
		'description' => 'Project detail page highlighting engineering scope, execution approach, and coordinated structural delivery outcomes.',
		'keywords' => 'project detail, structural engineering project, engineering execution',
		'robots' => 'noindex, follow',
	],
	'not-found.php' => [
		'title' => 'Page Not Found | VHS Engineering',
		'description' => 'The requested page could not be found. Browse core VHS Engineering service pages from this 404 page.',
		'keywords' => '404 page, page not found, VHS Engineering',
		'robots' => 'noindex, follow',
	],
	'why-structural-design-accuracy-is-critical-before-construction-begins.php' => [
		'title' => 'Why Structural Design Accuracy Is Critical Before Construction Begins',
		'description' => 'Understand why structural design accuracy is essential to avoid rework, delays, and cost overruns before construction begins.',
		'keywords' => 'structural design accuracy, preconstruction planning, engineering quality control',
		'type' => 'article',
	],
	'how-bim-coordination-reduces-clashes-and-costly-rework-on-construction-projects.php' => [
		'title' => 'How BIM Coordination Reduces Clashes and Costly Rework on Projects',
		'description' => 'Learn how BIM coordination reduces interdisciplinary clashes, improves communication, and lowers costly rework during construction.',
		'keywords' => 'BIM coordination, clash detection, construction rework reduction, coordinated models',
		'type' => 'article',
	],
	'role-of-steel-detailing-in-successful-fabrication-and-erection.php' => [
		'title' => 'Role of Steel Detailing in Successful Fabrication and Erection',
		'description' => 'Explore how accurate steel detailing drives fabrication quality, erection speed, and smoother site execution.',
		'keywords' => 'steel detailing, fabrication drawings, erection planning, structural steel workflow',
		'type' => 'article',
	],
	'connection-design-in-steel-structures-why-joints-make-or-break-a-build.php' => [
		'title' => 'Connection Design in Steel Structures: Why Joints Make or Break a Build',
		'description' => 'Connection design quality directly impacts steel structure performance, safety, and buildability across project stages.',
		'keywords' => 'connection design in steel structures, structural joints, steel connection engineering',
		'type' => 'article',
	],
	'accurate-pre-bid-estimating-gives-contractors-a-competitive-edge.php' => [
		'title' => 'How Accurate Pre-Bid Estimating Gives Contractors a Competitive Edge',
		'description' => 'Discover how accurate pre-bid estimating improves win rates, budgeting confidence, and project planning outcomes.',
		'keywords' => 'pre-bid estimating, contractor bid strategy, engineering preconstruction support',
		'type' => 'article',
	],
	'engineering-deputation-what-it-is-and-when-your-project-needs-it.php' => [
		'title' => 'Engineering Deputation: What It Is and When Your Project Needs It',
		'description' => 'A practical guide to engineering deputation, when to use it, and how it helps projects maintain delivery momentum.',
		'keywords' => 'engineering deputation, project staffing, engineering resource augmentation',
		'type' => 'article',
	],
	'understanding-structural-loads-dead-live-wind-and-seismic.php' => [
		'title' => 'Understanding Structural Loads: Dead, Live, Wind, and Seismic',
		'description' => 'A clear explanation of core structural load types and their role in safe, code-compliant structural design.',
		'keywords' => 'structural loads, dead load, live load, wind load, seismic load',
		'type' => 'article',
	],
	'bim-lod-explained-from-lod-100-to-lod-500-in-structural-projects.php' => [
		'title' => 'BIM LOD Explained: From LOD 100 to LOD 500 in Structural Projects',
		'description' => 'Understand BIM Level of Development from LOD 100 to LOD 500 and how each stage supports structural project delivery.',
		'keywords' => 'BIM LOD, level of development, structural BIM workflow, LOD 100 to LOD 500',
		'type' => 'article',
	],
	'what-goes-into-a-complete-steel-shop-drawing-package.php' => [
		'title' => 'What Goes Into a Complete Steel Shop Drawing Package?',
		'description' => 'See what a complete steel shop drawing package includes for fabrication accuracy, field fit-up, and smoother erection.',
		'keywords' => 'steel shop drawing package, fabrication drawings, detailing deliverables',
		'type' => 'article',
	],
	'from-design-to-fabrication-how-integrated-engineering-services-reduce-project-risk.php' => [
		'title' => 'From Design to Fabrication: How Integrated Engineering Services Reduce Project Risk',
		'description' => 'Integrated engineering services connect design, detailing, and fabrication to reduce risk and improve project predictability.',
		'keywords' => 'integrated engineering services, design to fabrication, project risk reduction',
		'type' => 'article',
	],
];

$seo_defaults = [
	'title' => 'VHS Engineering | Comprehensive Structural Engineering Solutions',
	'description' => 'VHS Engineering provides comprehensive structural engineering solutions including steel detailing, BIM services, connection design, and structural consultancy worldwide.',
	'keywords' => 'structural engineering, steel detailing, BIM services, connection design, structural design consultancy, estimodelling, pre-bid services, deputation services',
	'type' => 'website',
	'robots' => 'index, follow, max-image-preview:large',
	'image' => $site_url . '/images/LOGO.png',
];

$seo = $seo_defaults;
if (isset($seo_map[$script_name])) {
	$seo = array_merge($seo, $seo_map[$script_name]);
}

if (isset($page_title) && $page_title !== '') {
	$seo['title'] = $page_title;
}
if (isset($page_description) && $page_description !== '') {
	$seo['description'] = $page_description;
}
if (isset($page_keywords) && $page_keywords !== '') {
	$seo['keywords'] = $page_keywords;
}
if (isset($page_robots) && $page_robots !== '') {
	$seo['robots'] = $page_robots;
}
if (isset($page_og_image) && $page_og_image !== '') {
	$seo['image'] = $page_og_image;
}

$canonical_url = isset($page_canonical) && $page_canonical !== ''
	? $page_canonical
	: $site_url . ($canonical_path !== '' ? '/' . $canonical_path : '/');

$escaped_title = htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8');
$escaped_description = htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8');
$escaped_keywords = htmlspecialchars($seo['keywords'], ENT_QUOTES, 'UTF-8');
$escaped_robots = htmlspecialchars($seo['robots'], ENT_QUOTES, 'UTF-8');
$escaped_canonical = htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8');
$escaped_og_image = htmlspecialchars($seo['image'], ENT_QUOTES, 'UTF-8');
$escaped_type = htmlspecialchars($seo['type'], ENT_QUOTES, 'UTF-8');

$schema = [
	'@context' => 'https://schema.org',
	'@type' => $seo['type'] === 'article' ? 'BlogPosting' : 'WebPage',
	'name' => $seo['title'],
	'headline' => $seo['title'],
	'description' => $seo['description'],
	'url' => $canonical_url,
	'inLanguage' => 'en',
	'isPartOf' => [
		'@type' => 'WebSite',
		'name' => 'VHS Engineering',
		'url' => $site_url . '/',
	],
	'publisher' => [
		'@type' => 'Organization',
		'name' => 'VHS Engineering Pvt. Ltd.',
		'url' => $site_url . '/',
		'logo' => [
			'@type' => 'ImageObject',
			'url' => $site_url . '/images/LOGO.png',
		],
	],
];

$organization_schema = [
	'@context' => 'https://schema.org',
	'@type' => 'Organization',
	'name' => 'VHS Engineering Pvt. Ltd.',
	'url' => $site_url . '/',
	'logo' => $site_url . '/images/LOGO.png',
	'contactPoint' => [
		[
			'@type' => 'ContactPoint',
			'telephone' => '+91-7588639200',
			'contactType' => 'customer service',
			'email' => 'contact@vhsengg.com',
			'areaServed' => 'Worldwide',
			'availableLanguage' => ['English'],
		],
	],
	'sameAs' => [
		'https://www.facebook.com/Vilas-Suryawanshi-108669764340120/',
		'https://www.linkedin.com/in/vhs-engineering-70272417a/',
	],
];

$schema_json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
$organization_json = json_encode($organization_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $escaped_title; ?></title>

<meta name="description" content="<?php echo $escaped_description; ?>">
<meta name="keywords" content="<?php echo $escaped_keywords; ?>">
<meta name="author" content="VHS Engineering">
<meta name="robots" content="<?php echo $escaped_robots; ?>">
<meta name="googlebot" content="<?php echo $escaped_robots; ?>">
<meta name="theme-color" content="#0d1620">
<meta name="format-detection" content="telephone=no">

<link rel="canonical" href="<?php echo $escaped_canonical; ?>">

<meta property="og:locale" content="en_US">
<meta property="og:type" content="<?php echo $escaped_type; ?>">
<meta property="og:site_name" content="VHS Engineering">
<meta property="og:title" content="<?php echo $escaped_title; ?>">
<meta property="og:description" content="<?php echo $escaped_description; ?>">
<meta property="og:url" content="<?php echo $escaped_canonical; ?>">
<meta property="og:image" content="<?php echo $escaped_og_image; ?>">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $escaped_title; ?>">
<meta name="twitter:description" content="<?php echo $escaped_description; ?>">
<meta name="twitter:image" content="<?php echo $escaped_og_image; ?>">

<?php if ($schema_json): ?>
<script type="application/ld+json"><?php echo $schema_json; ?></script>
<?php endif; ?>
<?php if ($organization_json): ?>
<script type="application/ld+json"><?php echo $organization_json; ?></script>
<?php endif; ?>

<!-- Stylesheets -->
<link href="<?php echo $base_path; ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/meanmenu.min.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/responsive.css" rel="stylesheet">
<link href="<?php echo $base_path; ?>assets/css/vhs-theme.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Color Switcher Mockup -->
<link href="<?php echo $base_path; ?>assets/css/color-switcher-design.css" rel="stylesheet">

<!-- Color Themes -->
<link id="theme-color-file" href="<?php echo $base_path; ?>assets/css/color-themes/default-color.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php echo $base_path; ?>images/LOGO.png" type="image/x-icon">
<link rel="icon" href="<?php echo $base_path; ?>images/LOGO.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body class="vhs-theme">

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

