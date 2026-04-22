<?php include('header.php'); ?>

	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<!-- Close Button -->
		<div class="close-sidebar-widget close-button">
			<span class="fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="assets/images/section/placeholder-structure-a.svg" alt="VHS Engineering office" />
				</div>
				<div class="content-box">
					<h3>About <span>VHS Engineering</span></h3>
					<div class="text">VHS Engineering delivers reliable structural engineering solutions with a strong focus on quality, coordination, and project outcomes.</div>
					<ul class="about-sidebar_list">
						<li>Structural Design & Consultancy</li>
						<li>BIM Services</li>
						<li>Estimodelling & Pre-Bid Services</li>
						<li>Connection Design Services</li>
						<li>Steel Detailing Services</li>
						<li>Deputation Services</li>
						<li>Other Engineering Services</li>
					</ul>
				</div>
			</div>
			<!-- Social Box -->
			<div class="social-box">
				<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
				<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
				<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
				<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->

	<!-- Page Title -->
	<section class="page-title" style="background-image:url('images/blogs hero.png')">
        <div class="auto-container">
			<h2>All Blogs</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php">Home</a></li>
					<li>All Blogs</li>
				</ul>
				<div class="page-title_text">Professional engineering services aligned to your project scope, schedule, and quality requirements.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->
	
<?php
$blogs = [
	[
		'file'     => 'why-structural-design-accuracy-is-critical-before-construction-begins.php',
		'date'     => '10 Jan',
		'image'    => 'assets/images/section/placeholder-structure-c.png',
		'alt'      => 'Structural design accuracy',
		'comments' => '03',
		'title'    => 'Why Structural Design Accuracy is Critical Before Construction Begins',
	],
	[
		'file'     => 'how-bim-coordination-reduces-clashes-and-costly-rework-on-construction-projects.php',
		'date'     => '15 Feb',
		'image'    => 'images/2024-10-20.png',
		'alt'      => 'BIM coordination',
		'comments' => '04',
		'title'    => 'How BIM Coordination Reduces Clashes and Costly Rework on Projects',
	],
	[
		'file'     => 'role-of-steel-detailing-in-successful-fabrication-and-erection.php',
		'date'     => '08 Mar',
		'image'    => 'images/commercial20projects.png',
		'alt'      => 'Steel detailing fabrication',
		'comments' => '05',
		'title'    => 'The Role of Steel Detailing in Successful Fabrication and Erection',
	],
	[
		'file'     => 'connection-design-in-steel-structures-why-joints-make-or-break-a-build.php',
		'date'     => '12 Apr',
		'image'    => 'images/Connection Design in Steel Structures.png',
		'alt'      => 'Connection design steel',
		'comments' => '03',
		'title'    => 'Connection Design in Steel Structures: Why Joints Make or Break a Build',
	],
	[
		'file'     => 'accurate-pre-bid-estimating-gives-contractors-a-competitive-edge.php',
		'date'     => '20 May',
		'image'    => 'images/How Accurate Pre-Bid Estimating Gives Contractors a Competitive Edge.png',
		'alt'      => 'Pre-bid estimating',
		'comments' => '04',
		'title'    => 'How Accurate Pre-Bid Estimating Gives Contractors a Competitive Edge',
	],
	[
		'file'     => 'engineering-deputation-what-it-is-and-when-your-project-needs-it.php',
		'date'     => '05 Jun',
		'image'    => 'images/engineering-deputation-what-it-is-and-when-your-project-needs-it.png',
		'alt'      => 'Engineering deputation',
		'comments' => '02',
		'title'    => 'Engineering Deputation: What It Is and When Your Project Needs It',
	],
	[
		'file'     => 'understanding-structural-loads-dead-live-wind-and-seismic.php',
		'date'     => '18 Jul',
		'image'    => 'images/Construction engineer inspecting building structure.png',
		'alt'      => 'Structural loads',
		'comments' => '06',
		'title'    => 'Understanding Structural Loads: Dead, Live, Wind, and Seismic',
	],
	[
		'file'     => 'bim-lod-explained-from-lod-100-to-lod-500-in-structural-projects.php',
		'date'     => '14 Aug',
		'image'    => 'images/BIM model progression in engineering design.png',
		'alt'      => 'BIM LOD levels',
		'comments' => '05',
		'title'    => 'BIM LOD Explained: From LOD 100 to LOD 500 in Structural Projects',
	],
	[
		'file'     => 'what-goes-into-a-complete-steel-shop-drawing-package.php',
		'date'     => '10 Sep',
		'image'    => 'images/Engineering workstation with technical drawings.png',
		'alt'      => 'Steel shop drawing package',
		'comments' => '04',
		'title'    => 'What Goes Into a Complete Steel Shop Drawing Package?',
	],
	[
		'file'     => 'from-design-to-fabrication-how-integrated-engineering-services-reduce-project-risk.php',
		'date'     => '05 Oct',
		'image'    => 'images/from-design-to-fabrication-how-integrated-engineering-services-reduce-project-risk.png',
		'alt'      => 'Integrated engineering services',
		'comments' => '07',
		'title'    => 'From Design to Fabrication: How Integrated Engineering Services Reduce Project Risk',
	],
];

$per_page   = 6;
$total      = count($blogs);
$total_pages = (int) ceil($total / $per_page);
$current_page = isset($_GET['page']) ? max(1, min((int) $_GET['page'], $total_pages)) : 1;
$offset     = ($current_page - 1) * $per_page;
$page_blogs = array_slice($blogs, $offset, $per_page);
?>
	<!-- News One -->
	<section class="news-one style-two blog-listing-section">
		<div class="auto-container">

			<div class="row clearfix">
				<?php foreach ($page_blogs as $blog): ?>
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image_outer">
							<div class="news-block_one-date"><?php echo htmlspecialchars($blog['date']); ?></div>
							<div class="news-block_one-image">
								<a href="<?php echo htmlspecialchars($blog['file']); ?>"><img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['alt']); ?>" /></a>
								<img src="<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['alt']); ?>" />
							</div>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-regular fa-comments fa-fw"></span>By Admin</li>
								<li><span class="icon fa-regular fa-user fa-fw"></span><?php echo htmlspecialchars($blog['comments']); ?> Comments</li>
							</ul>
							<h4 class="news-block_one-title"><a href="<?php echo htmlspecialchars($blog['file']); ?>"><?php echo htmlspecialchars($blog['title']); ?></a></h4>
							<div class="news-block_one-button">
								<a class="news-block_one-more" href="<?php echo htmlspecialchars($blog['file']); ?>">READ MORE</a>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>

			<div class="col-12">
				<!-- Styled Pagination -->
				<ul class="styled-pagination text-center">
					<li class="prev<?php echo ($current_page <= 1) ? ' disabled' : ''; ?>">
						<a href="<?php echo ($current_page > 1) ? 'blog.php?page=' . ($current_page - 1) : '#'; ?>">
							<i class="fa-solid fa-angle-left fa-fw"></i>
						</a>
					</li>
					<?php for ($i = 1; $i <= $total_pages; $i++): ?>
					<li>
						<a href="blog.php?page=<?php echo $i; ?>"<?php echo ($i === $current_page) ? ' class="active"' : ''; ?>>
							<?php echo $i; ?>
						</a>
					</li>
					<?php endfor; ?>
					<li class="next<?php echo ($current_page >= $total_pages) ? ' disabled' : ''; ?>">
						<a href="<?php echo ($current_page < $total_pages) ? 'blog.php?page=' . ($current_page + 1) : '#'; ?>">
							<i class="fa-solid fa-angle-right fa-fw"></i>
						</a>
					</li>
				</ul>
				<!-- End Styled Pagination -->
			</div>

		</div>
	</section>
	<!-- End News One -->
	

<?php include('footer.php'); ?>






