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
		display: inline-flex; align-items: center; gap: 8px; background: rgba(255, 255, 255, 0.12);
		border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 100px; padding: 7px 14px;
		font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; color: #d6e7ff; margin-bottom: 18px;
	}
	.premium-service .ps-hero h1 { font-size: 44px; line-height: 1.15; font-weight: 800; color: #ffffff; margin: 0 0 18px; }
	.premium-service .ps-hero p { font-size: 16px; line-height: 1.8; color: #dbe8f7; margin: 0; }
	.premium-service .ps-hero-media {
		height: 100%; min-height: 340px;
		background: linear-gradient(180deg, rgba(8, 18, 30, 0.25), rgba(8, 18, 30, 0.65)), url('images/BIM BANNER.png') center/cover no-repeat;
	}
	.premium-service .ps-section { margin-top: 28px; }
	.premium-service .ps-section-title { font-size: 30px; font-weight: 800; line-height: 1.2; color: #13283f; margin-bottom: 14px; }
	.premium-service .ps-section-lead { font-size: 16px; line-height: 1.75; color: #3f556c; max-width: 900px; margin-bottom: 22px; }
	.premium-service .ps-card {
		height: 100%; background: #ffffff; border: 1px solid #d7e2ec; border-radius: 18px; padding: 24px 22px;
		box-shadow: 0 10px 30px rgba(14, 30, 45, 0.08); transition: transform 0.25s ease, box-shadow 0.25s ease;
	}
	.premium-service .ps-card:hover { transform: translateY(-5px); box-shadow: 0 18px 32px rgba(14, 30, 45, 0.13); }
	.premium-service .ps-card-number { width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 12px; background: #e8f2fd; color: #0b5394; font-weight: 800; font-size: 15px; margin-bottom: 12px; }
	.premium-service .ps-card h3 { font-size: 20px; font-weight: 700; color: #13283f; margin-bottom: 10px; }
	.premium-service .ps-card p { font-size: 15px; line-height: 1.7; color: #4b6278; margin: 0; }
	.premium-service .ps-offering { position: relative; background: #ffffff; border: 1px solid #dde6ef; border-radius: 16px; padding: 20px 20px 20px 52px; height: 100%; }
	.premium-service .ps-offering i { position: absolute; left: 20px; top: 22px; color: #1e6db8; }
	.premium-service .ps-offering strong { display: block; font-size: 17px; font-weight: 700; color: #13283f; margin-bottom: 6px; }
	.premium-service .ps-offering span { font-size: 15px; line-height: 1.7; color: #4b6278; }
	.premium-service .ps-faq-wrap { margin-top: 34px; background: #0f2238; border-radius: 20px; padding: 28px; }
	.premium-service .ps-faq-wrap .ps-section-title { color: #ffffff; margin-bottom: 18px; }
	.premium-service .ps-faq-wrap .accordion-box .accordion { border-radius: 12px; overflow: hidden; margin-bottom: 14px; background: rgba(255, 255, 255, 0.08); }
	.premium-service .ps-faq-wrap .accordion-box .accordion:last-child { margin-bottom: 0; }
	.premium-service .ps-faq-wrap .accordion-box .acc-btn { color: #ffffff; font-weight: 600; }
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
							<div class="ps-kicker"><i class="fa-solid fa-building-shield"></i> Building Information Modeling</div>
							<h1>BIM Services</h1>
							<p>Our Building Information Modeling (BIM) solutions transform design and execution through precision-driven digital models, enabling better coordination, clash detection, and efficiency across Architectural, Structural, and MEP disciplines.</p>
						</div>
					</div>
					<div class="col-lg-5"><div class="ps-hero-media" role="img" aria-label="BIM services"></div></div>
				</div>
			</div>
			<div class="ps-section">
				<h2 class="ps-section-title">About BIM Services</h2>
				<p class="ps-section-lead">At VHS Engineering, we leverage advanced BIM technologies to create intelligent 3D models that facilitate seamless collaboration, reduce errors, and optimize project outcomes from concept to completion.</p>
			</div>
			<div class="ps-section">
				<h2 class="ps-section-title">Why Choose Our BIM Services</h2>
				<p class="ps-section-lead">VHS Engineering's BIM expertise ensures accurate modeling, early clash detection, and enhanced visualization, leading to faster project delivery, reduced costs, and improved stakeholder communication. Our certified BIM professionals use industry-leading software to deliver high-quality results.</p>
				<div class="row g-4">
					<div class="col-lg-6"><div class="ps-card"><div class="ps-card-number">01</div><h3>Architectural BIM Services</h3><p>End-to-end modeling for residential, commercial, institutional, and hospitality projects. Enhances design accuracy, reduces errors, and improves collaboration.</p></div></div>
					<div class="col-lg-6"><div class="ps-card"><div class="ps-card-number">02</div><h3>Structural BIM Services</h3><p>High-accuracy structural modeling optimized for constructability and long-term performance. Reduces rework and ensures efficiency.</p></div></div>
					<div class="col-lg-6"><div class="ps-card"><div class="ps-card-number">03</div><h3>MEP BIM Production</h3><p>Detailed models and shop drawings with clash detection and code compliance across industries. Ensures smooth execution and coordinated system integration.</p></div></div>
					<div class="col-lg-6"><div class="ps-card"><div class="ps-card-number">04</div><h3>Realistic Visualization</h3><p>Photorealistic renderings and walkthroughs that bridge design intent and stakeholder communication, enabling faster decisions.</p></div></div>
				</div>
			</div>
			<div class="ps-section">
				<h2 class="ps-section-title">Key Offerings</h2>
				<div class="row g-4">
					<div class="col-lg-6"><div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Architectural BIM Services:</strong><span>End-to-end modeling for residential, commercial, institutional, and hospitality projects. Enhances design accuracy, reduces errors, and improves collaboration.</span></div></div>
					<div class="col-lg-6"><div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Structural BIM Services:</strong><span>High-accuracy structural modeling optimized for constructability and long-term performance. Reduces rework and ensures efficiency.</span></div></div>
					<div class="col-lg-6"><div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>MEP BIM Production:</strong><span>Detailed models and shop drawings with clash detection and code compliance across industries. Ensures smooth execution and coordinated system integration.</span></div></div>
					<div class="col-lg-6"><div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Realistic Visualization:</strong><span>Photorealistic renderings and walkthroughs that bridge design intent and stakeholder communication, enabling faster decisions.</span></div></div>
					<div class="col-lg-6"><div class="ps-offering"><i class="fa-classic fa-solid fa-arrow-up-right-from-square fa-fw"></i><strong>Scan-to-BIM:</strong><span>Accurate point cloud'based models for renovation, retrofitting, and asset management, reducing uncertainty and improving planning.</span></div></div>
				</div>
			</div>
			<div class="ps-faq-wrap">
				<h2 class="ps-section-title">Frequently Asked Questions</h2>
				<ul class="accordion-box style-two">
					<li class="accordion block active-block"><div class="acc-btn active"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>What is BIM?</div><div class="acc-content current"><div class="content"><div class="text">Building Information Modeling (BIM) is a digital process that creates and manages information about a building throughout it's lifecycle, using 3D models to improve design, construction, and operation.</div></div></div></li>
					<li class="accordion block"><div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>How does BIM improve project efficiency?</div><div class="acc-content"><div class="content"><div class="text">BIM enables clash detection, better coordination among disciplines, accurate quantity takeoffs, and visualization, reducing errors, rework, and costs while speeding up project timelines.</div></div></div></li>
					<li class="accordion block"><div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>What software do you use for BIM?</div><div class="acc-content"><div class="content"><div class="text">We use industry-leading software such as Revit, Navisworks, AutoCAD, and Tekla for BIM modeling, clash detection, and visualization to ensure compatibility and high-quality outputs.</div></div></div></li>
					<li class="accordion block"><div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>What is Scan-to-BIM?</div><div class="acc-content"><div class="content"><div class="text">Scan-to-BIM converts laser scans or point clouds of existing buildings into accurate BIM models, useful for renovations, retrofitting, and facility management.</div></div></div></li>
					<li class="accordion block"><div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>How can BIM benefit my project?</div><div class="acc-content"><div class="content"><div class="text">BIM provides better decision-making through data-rich models, reduces risks, improves sustainability, and enhances collaboration among all stakeholders.</div></div></div></li>
					<li class="accordion block"><div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>Do you provide BIM training?</div><div class="acc-content"><div class="content"><div class="text">Yes, we offer BIM training and consulting to help teams adopt BIM processes, software, and best practices for improved project outcomes.</div></div></div></li>
				</ul>
			</div>
		</div>
	</section>
	
	
	
	
	
	
<?php include('footer.php'); ?>







