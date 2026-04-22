<?php include('header.php'); ?>

	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
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
						<li>Industrial &amp; Offshore</li>
						<li>Material Handling</li>
						<li>Miscellaneous Projects</li>
						<li>Most Recent Projects</li>
					</ul>
				</div>
			</div>
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
	<section class="page-title" style="background-image:url('images/projects hero (1).png')">
        <div class="auto-container">
			<h2>Our Projects</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="index.php">Home</a></li>
					<li>Projects</li>
				</ul>
				<div class="page-title_text">Project sectors supported by VHS Engineering with detailing accuracy, engineering discipline, and delivery readiness.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<style>
	.projects-showcase {
		padding: 84px 0 110px;
		background: #f3f6fb;
	}

	.project-tabs {
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
		gap: 14px;
		margin-bottom: 34px;
	}

	.project-tab-btn {
		border: 1px solid rgba(16,35,58,0.28);
		background: #fff;
		color: #10233a;
		font-size: 16px;
		font-weight: 600;
		line-height: 1;
		padding: 14px 28px;
		border-radius: 999px;
		cursor: pointer;
		transition: all 0.25s ease;
	}

	.project-tab-btn:hover,
	.project-tab-btn.active {
		background: #f3971c;
		border-color: #f3971c;
		color: #fff;
	}

	.project-item {
		margin-bottom: 26px;
	}

	.project-item.hidden {
		display: none;
	}

	.project-image-card {
		border-radius: 28px;
		overflow: hidden;
		background: #fff;
		border: 1px solid rgba(16,35,58,0.08);
		box-shadow: 0 16px 34px rgba(12,30,54,0.12);
	}

	.project-image-card img {
		display: block;
		width: 100%;
		height: 340px;
		object-fit: cover;
		transition: transform 0.35s ease;
	}

	.project-image-card:hover img {
		transform: scale(1.04);
	}

	@media (max-width: 991px) {
		.project-tab-btn {
			font-size: 14px;
			padding: 12px 22px;
		}

		.project-image-card img {
			height: 290px;
		}
	}

	@media (max-width: 767px) {
		.projects-showcase {
			padding: 72px 0 92px;
		}

		.project-tabs {
			gap: 10px;
		}

		.project-tab-btn {
			font-size: 13px;
			padding: 11px 18px;
		}

		.project-image-card img {
			height: 250px;
		}
	}
	</style>

	<?php
	$projects = [
		[
			'category' => 'commercial',
			'image' => 'images/PARK-MANOR-STORAGE.png',
			'alt' => 'PARK MANOR STORAGE',
		],
		[
			'category' => 'commercial',
			'image' => 'images/caterpillar.png',
			'alt' => 'CATERPILLAR BUSINESS PARK',
		],
		[
			'category' => 'commercial',
			'image' => 'images/The-Watermark-At-Napa-Valley.png',
			'alt' => 'THE WATERMARK AT NAPA VALLEY',
		],
		[
			'category' => 'commercial',
			'image' => 'images/DISTRIBUTION BUILDING.png',
			'alt' => 'DISTRIBUTION BUILDING',
		],
		[
			'category' => 'commercial',
			'image' => 'images/Courtyard-Marriott-Santa-Cruz.png',
			'alt' => 'COURTYARD MARRIOTT',
		],
		[
			'category' => 'commercial',
			'image' => 'images/TRYP-Hotel.png',
			'alt' => 'TRYP HOTEL',
		],

		[
			'category' => 'industrial',
			'image' => 'images/PTAP.png',
			'alt' => '1500 MTPD Ammonia Plant',
		],
		// [
		// 	'category' => 'industrial',
		// 	'image' => 'images/material%20handling%20.png',
		// 	'alt' => 'Material handling project',
		// ],
		// [
		// 	'category' => 'infrastructure',
		// 	'image' => 'images/S1B.png',
		// 	'alt' => 'Infrastructure steel model',
		// ],
		// [
		// 	'category' => 'infrastructure',
		// 	'image' => 'images/S2B.png',
		// 	'alt' => 'Infrastructure stair model',
		// ],
		// [
		// 	'category' => 'stair-rails',
		// 	'image' => 'images/S3B.png',
		// 	'alt' => 'Stair and rails structure',
		// ],
		// [
		// 	'category' => 'stair-rails',
		// 	'image' => 'images/S4B.png',
		// 	'alt' => 'Stair and rails 3D detail',
		// ],
		// [
		// 	'category' => 'composite',
		// 	'image' => 'images/S5B-1.png',
		// 	'alt' => 'Composite steel structure',
		// ],
		// [
		// 	'category' => 'composite',
		// 	'image' => 'images/S6B.png',
		// 	'alt' => 'Composite platform model',
		// ],
		// [
		// 	'category' => 'arch-items',
		// 	'image' => 'images/S7B.png',
		// 	'alt' => 'Architectural steel item',
		// ],
		[
			'category' => 'Most Recent Projects',
			'image' => 'images/Chalet-Hotel-Phase-3_Resize1.jpg',
			'alt' => 'Chalet Hotel phase 3',
		],
	];

	?>

	<!-- Project Showcase -->
	<section class="projects-showcase">
		<div class="auto-container">
			<div class="project-tabs" id="projectTabs">
				<button class="project-tab-btn active" type="button" data-filter="all">All</button>
				<button class="project-tab-btn" type="button" data-filter="commercial">Commercial</button>
				<button class="project-tab-btn" type="button" data-filter="industrial">Industrial</button>
				<button class="project-tab-btn" type="button" data-filter="Educational">Educational</button>
				<button class="project-tab-btn" type="button" data-filter="Material Handling">Material Handling</button>
				<button class="project-tab-btn" type="button" data-filter="Miscellaneous">Miscellaneous</button>
				<button class="project-tab-btn" type="button" data-filter="Most Recent Projects">Most Recent Projects</button>
			</div>

			<div class="row clearfix" id="projectGrid">
				<?php foreach ($projects as $project): ?>
				<div class="col-lg-4 col-md-6 col-sm-12 project-item" data-category="<?php echo htmlspecialchars($project['category']); ?>">
					<div class="project-image-card">
						<img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['alt']); ?>" />
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- End Project Showcase -->

	<script>
	(function () {
		var tabsWrap = document.getElementById('projectTabs');
		var items = document.querySelectorAll('#projectGrid .project-item');
		if (!tabsWrap || !items.length) {
			return;
		}

		tabsWrap.addEventListener('click', function (event) {
			var btn = event.target.closest('.project-tab-btn');
			if (!btn) {
				return;
			}

			var filter = btn.getAttribute('data-filter');
			tabsWrap.querySelectorAll('.project-tab-btn').forEach(function (tab) {
				tab.classList.remove('active');
			});
			btn.classList.add('active');

			items.forEach(function (item) {
				if (filter === 'all' || item.getAttribute('data-category') === filter) {
					item.classList.remove('hidden');
				} else {
					item.classList.add('hidden');
				}
			});
		});
	})();
	</script>

<?php include('footer.php'); ?>
