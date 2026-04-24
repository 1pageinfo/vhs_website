<?php
$page_title = 'Coming Soon | VHS Engineering';
$page_description = 'This page is currently under preparation. VHS Engineering will publish the full content soon.';
$page_robots = 'noindex, follow';
include('header.php');
?>

<section class="coming-soon-page">
	<div class="coming-soon-bg-shape shape-one"></div>
	<div class="coming-soon-bg-shape shape-two"></div>
	<div class="auto-container">
		<div class="coming-soon-card">
			<div class="coming-soon-kicker">VHS Engineering</div>
			<h1>Coming Soon</h1>
			<p>We are preparing this page with complete project-ready details. It will be available shortly.</p>

			<div class="coming-soon-countdown" id="comingSoonCountdown" aria-live="polite">
				<div class="count-item">
					<strong id="csDays">00</strong>
					<span>Days</span>
				</div>
				<div class="count-item">
					<strong id="csHours">00</strong>
					<span>Hours</span>
				</div>
				<div class="count-item">
					<strong id="csMinutes">00</strong>
					<span>Minutes</span>
				</div>
				<div class="count-item">
					<strong id="csSeconds">00</strong>
					<span>Seconds</span>
				</div>
			</div>

			<div class="coming-soon-actions">
				<a href="index.php" class="theme-btn btn-style-three">
					<span class="btn-wrap">
						<span class="text-one">Back To Home <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
						<span class="text-two">Back To Home <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
					</span>
				</a>
				<a href="contact.php" class="theme-btn btn-style-two">
					<span class="btn-wrap">
						<span class="text-one">Contact Us</span>
						<span class="text-two">Contact Us</span>
					</span>
				</a>
			</div>
		</div>
	</div>
</section>

<style>
.coming-soon-page {
	position: relative;
	padding: 180px 0 120px;
	min-height: calc(100vh - 230px);
	background: #ffffff;
	overflow: hidden;
}

.coming-soon-bg-shape {
	position: absolute;
	border-radius: 50%;
	pointer-events: none;
	filter: blur(2px);
}

.coming-soon-bg-shape.shape-one {
	width: 380px;
	height: 380px;
	top: -140px;
	left: -100px;
	background: radial-gradient(circle, rgba(24, 128, 218, 0.18) 0%, rgba(24, 128, 218, 0) 70%);
}

.coming-soon-bg-shape.shape-two {
	width: 440px;
	height: 440px;
	bottom: -180px;
	right: -140px;
	background: radial-gradient(circle, rgba(245, 137, 42, 0.16) 0%, rgba(245, 137, 42, 0) 70%);
}

.coming-soon-card {
	position: relative;
	max-width: 860px;
	margin: 0 auto;
	padding: 54px 44px;
	border-radius: 26px;
	text-align: center;
	background: #ffffff;
	border: 1px solid rgba(16, 35, 58, 0.12);
	box-shadow: 0 24px 48px rgba(16, 35, 58, 0.12);
}

.coming-soon-kicker {
	display: inline-block;
	margin-bottom: 14px;
	padding: 8px 14px;
	border-radius: 999px;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 1.1px;
	text-transform: uppercase;
	color: #165b9a;
	background: rgba(24, 128, 218, 0.12);
}

.coming-soon-card h1 {
	margin: 0 0 14px;
	font-size: clamp(42px, 7vw, 72px);
	line-height: 1.05;
	color: #10233a;
}

.coming-soon-card p {
	margin: 0 auto;
	max-width: 680px;
	font-size: 17px;
	line-height: 1.85;
	color: #4f647b;
}

.coming-soon-countdown {
	display: grid;
	grid-template-columns: repeat(4, minmax(120px, 1fr));
	gap: 12px;
	margin: 34px 0 30px;
}

.coming-soon-countdown .count-item {
	padding: 18px 12px;
	border-radius: 16px;
	background: #ffffff;
	border: 1px solid rgba(16, 35, 58, 0.14);
}

.coming-soon-countdown strong {
	display: block;
	font-size: clamp(30px, 5vw, 42px);
	line-height: 1;
	color: #10233a;
}

.coming-soon-countdown span {
	display: block;
	margin-top: 8px;
	font-size: 12px;
	font-weight: 700;
	letter-spacing: 1px;
	text-transform: uppercase;
	color: #5b738d;
}

.coming-soon-actions {
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
	gap: 14px;
}

@media (max-width: 991px) {
	.coming-soon-page {
		padding: 154px 0 96px;
	}

	.coming-soon-card {
		padding: 42px 28px;
	}

	.coming-soon-countdown {
		grid-template-columns: repeat(2, minmax(120px, 1fr));
	}
}

@media (max-width: 575px) {
	.coming-soon-page {
		padding: 138px 0 80px;
	}

	.coming-soon-card {
		padding: 34px 18px;
		border-radius: 20px;
	}

	.coming-soon-card p {
		font-size: 15px;
	}

	.coming-soon-countdown {
		grid-template-columns: repeat(2, 1fr);
	}
}
</style>

<script>
(function () {
	var targetDate = new Date();
	targetDate.setDate(targetDate.getDate() + 45);
	targetDate.setHours(0, 0, 0, 0);

	var dayEl = document.getElementById('csDays');
	var hourEl = document.getElementById('csHours');
	var minuteEl = document.getElementById('csMinutes');
	var secondEl = document.getElementById('csSeconds');

	if (!dayEl || !hourEl || !minuteEl || !secondEl) {
		return;
	}

	function pad(value) {
		return String(value).padStart(2, '0');
	}

	function updateCountdown() {
		var now = new Date().getTime();
		var diff = targetDate.getTime() - now;

		if (diff <= 0) {
			dayEl.textContent = '00';
			hourEl.textContent = '00';
			minuteEl.textContent = '00';
			secondEl.textContent = '00';
			return;
		}

		var days = Math.floor(diff / (1000 * 60 * 60 * 24));
		var hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
		var minutes = Math.floor((diff / (1000 * 60)) % 60);
		var seconds = Math.floor((diff / 1000) % 60);

		dayEl.textContent = pad(days);
		hourEl.textContent = pad(hours);
		minuteEl.textContent = pad(minutes);
		secondEl.textContent = pad(seconds);
	}

	updateCountdown();
	setInterval(updateCountdown, 1000);
})();
</script>

<?php include('footer.php'); ?>
