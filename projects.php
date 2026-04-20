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
					<div class="text">ISO 9001-2015 certified structural steel design and detailing company delivering world-class engineering solutions across diverse project types.</div>
					<ul class="about-sidebar_list">
						<li>Commercial Projects</li>
						<li>Educational Projects</li>
						<li>Industrial & Offshore</li>
						<li>Material Handling</li>
						<li>Miscellaneous Projects</li>
						<li>Most Recent Projects</li>
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
	<section class="page-title" style="background-image:url('images/projects%20hero%20%281%29.png')">
        <div class="auto-container">
			<h2>Our Projects</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php">Home</a></li>
					<li>Projects</li>
				</ul>
				<div class="page-title_text">Professional engineering services aligned to your project scope, schedule, and quality requirements.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->
	
	<?php
	$projects = [
		[
			'image' => 'images/commercial%20projects.png',
			'alt' => 'Commercial project',
			'designation' => 'Structural Steel Design',
			'location' => 'Commercial Projects',
			'title' => 'Commercial Projects',
			'link' => 'project-detail.php',
		],
		[
			'image' => 'images/educational%20bldg.png',
			'alt' => 'Educational project',
			'designation' => 'Structural Steel Design',
			'location' => 'Educational Projects',
			'title' => 'Educational Projects',
			'link' => 'project-detail.php',
		],
		[
			'image' => 'images/offshore.png',
			'alt' => 'Industrial and offshore project',
			'designation' => 'Structural Steel Design',
			'location' => 'Industrial & Offshore',
			'title' => 'Industrial & Offshore',
			'link' => 'project-detail.php',
		],
		[
			'image' => 'images/material%20handling%20.png',
			'alt' => 'Material handling project',
			'designation' => 'Architecture',
			'location' => 'Material Handling',
			'title' => 'Material Handling',
			'link' => 'project-detail.php',
		],
		[
			'image' => 'assets/images/section/placeholder-structure-a.svg',
			'alt' => 'Miscellaneous engineering support',
			'designation' => 'Architecture',
			'location' => 'Miscellaneous Projects',
			'title' => 'Miscellaneous',
			'link' => 'project-detail.php',
		],
		[
			'image' => 'images/recent%20project.png',
			'alt' => 'Recent project',
			'designation' => 'Architecture',
			'location' => 'Recent Projects',
			'title' => 'Most Recent Projects',
			'link' => 'project-detail.php',
		],
	];

	$per_page = 3;
	$total_projects = count($projects);
	$total_pages = (int) ceil($total_projects / $per_page);
	$current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
	$current_page = max(1, min($current_page, $total_pages));
	$offset = ($current_page - 1) * $per_page;
	$page_projects = array_slice($projects, $offset, $per_page);
	?>

	<!-- Project Four -->
	<section class="project-four" style="background-image:url(assets/images/background/pattern-13.png)">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">Our Projects</div>
				<h2 class="sec-title_heading">We Provide Effective Solution <br> in Construction</h2>
			</div>

			<div class="row clearfix">
				<?php foreach ($page_projects as $project): ?>
				<div class="project-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="project-block_three-inner">
						<div class="project-block_three-image">
							<img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['alt']); ?>" />
							<div class="project-block_three-overlay">
								<div class="project-block_three-designation"><?php echo htmlspecialchars($project['designation']); ?></div>
								<div class="project-block_three-location"><i><img src="assets/images/icons/location.svg" alt="" /></i> <?php echo htmlspecialchars($project['location']); ?></div>
								<h3 class="project-block_three-title"><a href="<?php echo htmlspecialchars($project['link']); ?>"><?php echo htmlspecialchars($project['title']); ?></a></h3>
								<div class="project-block_three_button">
									<a href="<?php echo htmlspecialchars($project['link']); ?>" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">explore project <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
											<span class="text-two">explore project <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

				<?php if ($total_pages > 1): ?>
				<div class="col-12">
					<!-- Styled Pagination -->
					<ul class="styled-pagination text-center">
						<li class="prev<?php echo ($current_page <= 1) ? ' disabled' : ''; ?>">
							<a href="<?php echo ($current_page > 1) ? 'projects.php?page=' . ($current_page - 1) : '#'; ?>"><i class="fa-solid fa-angle-left fa-fw"></i></a>
						</li>
						<?php for ($i = 1; $i <= $total_pages; $i++): ?>
						<li><a href="projects.php?page=<?php echo $i; ?>"<?php echo ($i === $current_page) ? ' class="active"' : ''; ?>><?php echo $i; ?></a></li>
						<?php endfor; ?>
						<li class="next<?php echo ($current_page >= $total_pages) ? ' disabled' : ''; ?>">
							<a href="<?php echo ($current_page < $total_pages) ? 'projects.php?page=' . ($current_page + 1) : '#'; ?>"><i class="fa-solid fa-angle-right fa-fw"></i></a>
						</li>
					</ul>
					<!-- End Styled Pagination -->
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- End Project Four -->
	
	
	
	
	
	
<?php include('footer.php'); ?>









