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

	<style>
	@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap');
	.premium-service {
		font-family: 'Manrope', sans-serif;
		background: linear-gradient(180deg, #eef3f8 0%, #f7f9fc 35%, #ffffff 100%);
		padding: 170px 0 70px;
	}
	.premium-service .ps-hero {
		background: radial-gradient(circle at top left, #23456a 0%, #102339 68%);
		border-radius: 24px;
		overflow: hidden;
		box-shadow: 0 20px 50px rgba(16, 35, 57, 0.22);
		margin-bottom: 36px;
	}
	.premium-service .ps-hero-copy { padding: 50px 44px; }
	.premium-service .ps-kicker {
		display: inline-flex; align-items: center; gap: 8px;
		background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);
		border-radius: 100px; padding: 7px 14px; font-size: 12px; font-weight: 700;
		text-transform: uppercase; letter-spacing: 1px; color: #d6e7ff; margin-bottom: 18px;
	}
	.premium-service .ps-hero h1 { font-size: 44px; line-height: 1.15; font-weight: 800; color: #fff; margin: 0 0 18px; }
	.premium-service .ps-hero p { font-size: 16px; line-height: 1.8; color: #dbe8f7; margin: 0; }
	.premium-service .ps-hero-media {
		height: 100%; min-height: 340px;
		background: linear-gradient(180deg,rgba(8,18,30,0.25),rgba(8,18,30,0.65)), url('assets/images/section/placeholder-structure-a.svg') center/cover no-repeat;
	}
	.premium-service .ps-section { margin-top: 28px; }
	.premium-service .ps-section-title { font-size: 30px; font-weight: 800; line-height: 1.2; color: #13283f; margin-bottom: 14px; }
	.premium-service .ps-section-lead { font-size: 16px; line-height: 1.75; color: #3f556c; max-width: 900px; margin-bottom: 22px; }
	.premium-service .ps-card {
		height: 100%; background: #fff; border: 1px solid #d7e2ec; border-radius: 18px;
		padding: 24px 22px; box-shadow: 0 10px 30px rgba(14,30,45,0.08);
		transition: transform 0.25s ease, box-shadow 0.25s ease;
	}
	.premium-service .ps-card:hover { transform: translateY(-5px); box-shadow: 0 18px 32px rgba(14,30,45,0.13); }
	.premium-service .ps-card-number {
		width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center;
		border-radius: 12px; background: #e8f2fd; color: #0b5394; font-weight: 800; font-size: 15px; margin-bottom: 12px;
	}
	.premium-service .ps-card h3 { font-size: 20px; font-weight: 700; color: #13283f; margin-bottom: 10px; }
	.premium-service .ps-card p { font-size: 15px; line-height: 1.7; color: #4b6278; margin: 0; }
	.premium-service .ps-offering {
		position: relative; background: #fff; border: 1px solid #dde6ef;
		border-radius: 16px; padding: 20px 20px 20px 52px; height: 100%;
	}
	.premium-service .ps-offering i { position: absolute; left: 20px; top: 22px; color: #1e6db8; }
	.premium-service .ps-offering strong { display: block; font-size: 17px; font-weight: 700; color: #13283f; margin-bottom: 6px; }
	.premium-service .ps-offering span { font-size: 15px; line-height: 1.7; color: #4b6278; }
	.premium-service .ps-faq-wrap { margin-top: 34px; background: #0f2238; border-radius: 20px; padding: 28px; }
	.premium-service .ps-faq-wrap .ps-section-title { color: #fff; margin-bottom: 18px; }
	.premium-service .ps-faq-wrap .accordion-box .accordion { border-radius: 12px; overflow: hidden; margin-bottom: 14px; background: rgba(255,255,255,0.08); }
	.premium-service .ps-faq-wrap .accordion-box .accordion:last-child { margin-bottom: 0; }
	.premium-service .ps-faq-wrap .accordion-box .acc-btn { color: #fff; font-weight: 600; }
	.premium-service .ps-faq-wrap .accordion-box .acc-content .text { color: #d8e6f5; }
	.premium-service .ps-faq-wrap .accordion-box .icon { color: #9ec8f1; }
	@media (max-width: 991px) {
		.premium-service { padding: 130px 0 64px; }
		.premium-service .ps-hero-copy { padding: 36px 26px; }
		.premium-service .ps-hero h1 { font-size: 34px; }
		.premium-service .ps-hero-media { min-height: 250px; }
	}
	@media (max-width: 575px) {
		.premium-service { padding: 116px 0 56px; }
	}
	</style>

	<section class="premium-service">
		<div class="auto-container">
			<div class="ps-hero">
				<div class="row g-0 align-items-stretch">
					<div class="col-lg-7">
						<div class="ps-hero-copy">
							<div class="ps-kicker"><i class="fa-solid fa-screwdriver-wrench"></i> Specialist Engineering</div>
							<h1>Other Engineering Services</h1>
							<p>VHS Engineering delivers specialized engineering support services that extend beyond core design and detailing, giving teams the extra precision needed for fabrication and site execution. Our services include CAD conversion, drafting, plate nesting, and erection methodology planning.</p>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="ps-hero-media" role="img" aria-label="Other Engineering Services"></div>
					</div>
				</div>
			</div>

			<div class="ps-section">
				<h2 class="ps-section-title">About Other Engineering Services</h2>
				<p class="ps-section-lead">Our other engineering services include CAD conversion, architectural/structural/civil drafting, plate nesting, and erection methodology planning to improve constructability and reduce fabrication risk.</p>
			</div>

			<div class="ps-section">
				<h2 class="ps-section-title">Why Choose Our Other Engineering Services</h2>
				<p class="ps-section-lead">We combine technical drafting experience with construction insight to provide documentation and planning support that helps projects run smoother, waste less material, and accelerate fabrication handover.</p>
				<div class="row g-4">
					<div class="col-lg-6">
						<div class="ps-card">
							<div class="ps-card-number">01</div>
							<h3>CAD Conversion &amp; Drafting</h3>
							<p>Converting sketches, paper drawings, and legacy files into accurate, editable CAD formats for seamless project delivery.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ps-card">
							<div class="ps-card-number">02</div>
							<h3>Architectural / Structural / Civil Drafting</h3>
							<p>High-quality, standards-compliant drawings for architectural, structural, and civil projects.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ps-card">
							<div class="ps-card-number">03</div>
							<h3>Plate Nesting Services</h3>
							<p>Optimized nesting layouts that minimize material waste and lower fabrication costs.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="ps-card">
							<div class="ps-card-number">04</div>
							<h3>Erection Methodology &amp; Presentations</h3>
							<p>Step-by-step erection plans with crane layouts, lifting arrangements, and safety compliance for smooth site execution.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="ps-section">
				<h2 class="ps-section-title">Key Offerings</h2>
				<div class="row g-4">
					<div class="col-lg-6">
						<div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>CAD Conversion &amp; Drafting:</strong><span>Converting sketches, paper drawings, and legacy files into precise CAD deliverables.</span></div>
					</div>
					<div class="col-lg-6">
						<div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Architectural / Structural / Civil Drafting:</strong><span>Standards-compliant drawings for architecture, structure, and civil engineering requirements.</span></div>
					</div>
					<div class="col-lg-6">
						<div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Plate Nesting Services:</strong><span>Optimized nesting layouts that reduce waste and lower fabrication costs.</span></div>
					</div>
					<div class="col-lg-6">
						<div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Erection Methodology &amp; Presentations:</strong><span>Detailed erection plans with crane layout, lifting sequences, and safety compliance.</span></div>
					</div>
				</div>
			</div>

			<div class="ps-faq-wrap">
				<h2 class="ps-section-title">Frequently Asked Questions</h2>
				<ul class="accordion-box style-two">
					<li class="accordion block active-block">
						<div class="acc-btn active"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>What is Other Engineering Services?</div>
						<div class="acc-content current"><div class="content"><div class="text">Other Engineering Services at VHS Engineering deliver specialist drafting, plate nesting, erection plans and engineering support for projects that need flexible, expert technical backing.</div></div></div>
					</li>
					<li class="accordion block">
						<div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>How can VHS Engineering help with project coordination?</div>
						<div class="acc-content"><div class="content"><div class="text">We provide accurate technical documentation, clear project drawings and responsive support so engineering teams can move forward confidently with reduced risk.</div></div></div>
					</li>
					<li class="accordion block">
						<div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>What deliverables are included?</div>
						<div class="acc-content"><div class="content"><div class="text">Deliverables include CAD drawings, erection methodology, plate nesting layouts, bill of quantities, and engineering reports tailored to your project.</div></div></div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	
	
	

	
	
<?php include('footer.php'); ?>







