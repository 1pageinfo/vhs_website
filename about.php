<?php include('header.php'); ?>

<style>
.about-premium {
    --steel-900: #0f1720;
    --steel-850: #131e29;
    --steel-800: #1a2734;
    --steel-700: #263646;
    --steel-500: #4f6e8f;
    --steel-300: #b8c7d9;
    --steel-200: #d8e1eb;
    --spark: #f58f3d;
    --spark-soft: rgba(245, 143, 61, 0.2);
    --line: rgba(255, 255, 255, 0.09);
    background: radial-gradient(circle at 90% 10%, rgba(79, 110, 143, 0.2), transparent 42%),
        linear-gradient(180deg, #0f1720 0%, #141f2a 35%, #0f1720 100%);
    color: #ffffff;
}

.about-premium .auto-container {
    position: relative;
    z-index: 2;
}

.about-hero {
    position: relative;
    padding: 120px 0 90px;
    overflow: hidden;
}

.about-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(15, 23, 32, 0.93) 0%, rgba(15, 23, 32, 0.72) 45%, rgba(15, 23, 32, 0.42) 100%),
        url('images/about.png') center/cover no-repeat;
}

.about-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 36px;
    align-items: center;
}

.steel-tag {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 16px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    border-radius: 999px;
    font-size: 12px;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.05);
}

.steel-tag::before {
    content: "";
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--spark);
    box-shadow: 0 0 0 6px var(--spark-soft);
}

.about-hero h1 {
    margin: 20px 0 14px;
    font-size: 54px;
    line-height: 1.06;
    letter-spacing: -0.8px;
    color: #f5f8fc;
}

.about-hero p {
    margin: 0;
    font-size: 17px;
    line-height: 1.8;
    max-width: 760px;
    color: var(--steel-200);
}

.hero-metrics {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 14px;
}

.hero-metric {
    background: linear-gradient(160deg, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0.03));
    border: 1px solid var(--line);
    border-radius: 14px;
    padding: 18px;
    backdrop-filter: blur(2px);
    animation: riseIn 0.7s ease both;
}

.hero-metric:nth-child(2) { animation-delay: 0.08s; }
.hero-metric:nth-child(3) { animation-delay: 0.16s; }
.hero-metric:nth-child(4) { animation-delay: 0.24s; }

.hero-metric h3 {
    margin: 0;
    font-size: 34px;
    line-height: 1;
    color: #ffffff;
}

.hero-metric span {
    display: block;
    margin-top: 6px;
    color: var(--steel-300);
    font-size: 13px;
    letter-spacing: 0.3px;
}

.steel-section {
    padding: 88px 0;
}

.section-head {
    margin-bottom: 34px;
}

.section-head h2 {
    margin: 10px 0 0;
    font-size: 40px;
    line-height: 1.2;
    letter-spacing: -0.5px;
    color: #f3f7fb;
}

.section-head p {
    margin: 14px 0 0;
    font-size: 16px;
    line-height: 1.8;
    color: var(--steel-300);
}

.about-story {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
}

.story-panel {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.02));
    border: 1px solid var(--line);
    border-radius: 18px;
    padding: 28px;
    position: relative;
    overflow: hidden;
}

.story-panel::after {
    content: "";
    position: absolute;
    inset: auto 0 0 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--spark), transparent);
}

.story-panel h3 {
    font-size: 25px;
    margin: 0 0 12px;
    color: #ffffff;
}

.story-panel p {
    margin: 0;
    font-size: 15px;
    line-height: 1.85;
    color: var(--steel-300);
}

.service-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
}

.service-card {
    background: var(--steel-850);
    border: 1px solid var(--line);
    border-radius: 14px;
    padding: 22px;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

.service-card:hover {
    transform: translateY(-6px);
    border-color: rgba(245, 143, 61, 0.5);
    box-shadow: 0 18px 32px rgba(0, 0, 0, 0.25);
}

.service-card .num {
    color: var(--spark);
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 700;
}

.service-card h4 {
    margin: 8px 0 8px;
    font-size: 20px;
    color: #f7f9fd;
}

.service-card p {
    margin: 0;
    font-size: 14px;
    line-height: 1.75;
    color: var(--steel-300);
}

.quality-grid {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 26px;
    align-items: start;
}

.quality-list {
    margin: 0;
    padding: 0;
    list-style: none;
    display: grid;
    gap: 12px;
}

.quality-list li {
    border: 1px solid var(--line);
    background: rgba(255, 255, 255, 0.03);
    border-radius: 12px;
    padding: 14px 16px 14px 44px;
    position: relative;
    color: var(--steel-200);
    font-size: 15px;
    line-height: 1.6;
}

.quality-list li::before {
    content: "";
    position: absolute;
    left: 18px;
    top: 20px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: var(--spark);
}

.iso-card {
    border-radius: 18px;
    border: 1px solid rgba(245, 143, 61, 0.35);
    background: linear-gradient(180deg, rgba(245, 143, 61, 0.16), rgba(245, 143, 61, 0.06));
    padding: 26px;
}

.iso-card h3 {
    margin: 0;
    font-size: 48px;
    line-height: 1;
    color: #ffffff;
}

.iso-card p {
    margin: 10px 0 0;
    color: #f8d8bf;
    line-height: 1.7;
    font-size: 15px;
}

.iso-logos {
    margin-top: 18px;
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 10px;
}

.iso-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 8px;
    min-height: 64px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.08);
}

.iso-logo img {
    max-width: 100%;
    max-height: 44px;
    object-fit: contain;
    filter: brightness(1.03) contrast(1.05);
}

.counter-strip {
    background: linear-gradient(90deg, #111a24, #1a2838, #111a24);
    border-top: 1px solid var(--line);
    border-bottom: 1px solid var(--line);
    padding: 38px 0;
}

.counter-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.counter-box {
    text-align: center;
    padding: 16px;
    border-right: 1px solid var(--line);
}

.counter-box:last-child {
    border-right: 0;
}

.counter-box h4 {
    margin: 0;
    font-size: 42px;
    color: #ffffff;
}

.counter-box p {
    margin: 10px 0 0;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--steel-300);
}

.about-cta {
    padding: 92px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.about-cta::before,
.about-cta::after {
    content: "";
    position: absolute;
    width: 320px;
    height: 320px;
    border-radius: 50%;
    filter: blur(80px);
    z-index: 0;
}

.about-cta::before {
    left: -120px;
    top: 20px;
    background: rgba(79, 110, 143, 0.23);
}

.about-cta::after {
    right: -120px;
    bottom: 10px;
    background: rgba(245, 143, 61, 0.2);
}

.about-cta .cta-inner {
    position: relative;
    z-index: 1;
    border: 1px solid var(--line);
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.04);
    padding: 46px 24px;
}

.about-cta h2 {
    margin: 0;
    font-size: 42px;
    line-height: 1.2;
    color: #f5f8fc;
}

.about-cta p {
    margin: 14px auto 26px;
    max-width: 720px;
    color: var(--steel-300);
    font-size: 16px;
    line-height: 1.8;
}

.about-cta .theme-btn {
    min-width: 220px;
}

@keyframes riseIn {
    from {
        opacity: 0;
        transform: translateY(16px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 1199px) {
    .about-hero h1,
    .about-cta h2,
    .section-head h2 {
        font-size: 36px;
    }

    .service-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 991px) {
    .about-hero {
        padding: 96px 0 76px;
    }

    .about-hero-grid,
    .about-story,
    .quality-grid {
        grid-template-columns: 1fr;
    }

    .counter-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .counter-box {
        border-right: 0;
        border-bottom: 1px solid var(--line);
    }

    .counter-box:nth-last-child(-n+2) {
        border-bottom: 0;
    }
}

@media (max-width: 767px) {
    .about-hero h1,
    .about-cta h2,
    .section-head h2 {
        font-size: 30px;
    }

    .hero-metrics,
    .service-grid,
    .counter-grid {
        grid-template-columns: 1fr;
    }

    .counter-box {
        border-bottom: 1px solid var(--line);
    }

    .counter-box:last-child {
        border-bottom: 0;
    }

    .iso-logos {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }
}
</style>

<main class="about-premium">
    <section class="about-hero">
        <div class="auto-container">
            <div class="about-hero-grid">
                <div>
                    <span class="steel-tag">About VHS Engineering</span>
                    <h1>Precision Steel Detailing for Buildable, On-Time Projects</h1>
                    <p>VHS Engineering is an ISO 9001-2015 certified structural steel design and detailing company committed to quality, schedule, and clear communication to build strong customer relationships.</p>
                </div>
                <div class="hero-metrics">
                    <div class="hero-metric">
                        <h3>2017</h3>
                        <span>Established</span>
                    </div>
                    <div class="hero-metric">
                        <h3>7+</h3>
                        <span>Years of Excellence</span>
                    </div>
                    <div class="hero-metric">
                        <h3>100+</h3>
                        <span>Projects Completed</span>
                    </div>
                    <div class="hero-metric">
                        <h3>98%</h3>
                        <span>Client Satisfaction</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steel-section">
        <div class="auto-container">
            <div class="section-head">
                <span class="steel-tag">Who We Are</span>
                <h2>Leading Structural Steel Design and Detailing Company</h2>
                <p>We specialize in engineering-led steel detailing workflows that support constructability, coordination, and execution from design intent to fabrication-ready output.</p>
            </div>

            <div class="about-story">
                <article class="story-panel">
                    <h3>Our Mission</h3>
                    <p>We provide high quality structural engineering services and solutions while using innovative technologies and continuous improvement, maintaining the highest business standards and work ethics that add measurable value for clients and partners.</p>
                </article>
                <article class="story-panel">
                    <h3>Our Vision</h3>
                    <p>Our solutions are designed to meet the demands of modern construction enterprises so they can execute confidently in a competitive market with speed, reliability, and technical clarity.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="steel-section" style="padding-top: 0;">
        <div class="auto-container">
            <div class="section-head">
                <span class="steel-tag">What We Deliver</span>
                <h2>Integrated Services for Steel Projects</h2>
            </div>

            <div class="service-grid">
                <article class="service-card">
                    <div class="num">01</div>
                    <h4>Structural Steel Design</h4>
                    <p>Code-compliant structural design and consultancy to support safe, economical, and buildable solutions.</p>
                </article>
                <article class="service-card">
                    <div class="num">02</div>
                    <h4>Steel Detailing Services</h4>
                    <p>Detailed shop and fabrication drawings developed with constructability in focus for complex steel structures.</p>
                </article>
                <article class="service-card">
                    <div class="num">03</div>
                    <h4>BIM Services</h4>
                    <p>Model-based coordination for better clash control, visualization, and project communication across stakeholders.</p>
                </article>
                <article class="service-card">
                    <div class="num">04</div>
                    <h4>Connection Design</h4>
                    <p>Engineered steel connections aligned with project load paths, standards, and fabrication requirements.</p>
                </article>
                <article class="service-card">
                    <div class="num">05</div>
                    <h4>Estimodelling</h4>
                    <p>Pre-bid quantity and model-driven estimation support to improve bid accuracy and reduce commercial risk.</p>
                </article>
                <article class="service-card">
                    <div class="num">06</div>
                    <h4>Deputation Services</h4>
                    <p>Flexible engineering resource support for teams that need specialized structural steel expertise.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="steel-section" style="padding-top: 0;">
        <div class="auto-container">
            <div class="quality-grid">
                <div>
                    <div class="section-head" style="margin-bottom: 18px;">
                        <span class="steel-tag">Why Clients Trust Us</span>
                        <h2>Quality, Standards, and Delivery Discipline</h2>
                    </div>
                    <ul class="quality-list">
                        <li>ISO 9001-2015 Quality Certified Company</li>
                        <li>Expertise in AISC, CISC, BS, and IS Codes</li>
                        <li>On-time Delivery with Strict Quality Assurance</li>
                        <li>Professional Communication and Client Coordination</li>
                        <li>Continuous Improvement Through Innovative Technologies</li>
                    </ul>
                </div>
                <aside class="iso-card">
                    <h3>9001</h3>
                    <p>ISO 9001-2015 certified processes integrated into every design and detailing deliverable.</p>
                    <p style="margin-top: 16px;">Engagement model: We work directly with individuals for private residences and also partner with businesses on larger projects.</p>
                    <div class="iso-logos">
                        <div class="iso-logo"><img src="images/certifications/1.png" alt="Certification 1" /></div>
                        <div class="iso-logo"><img src="images/certifications/2.png" alt="Certification 2" /></div>
                        <div class="iso-logo"><img src="images/certifications/3.png" alt="Certification 3" /></div>
                        <div class="iso-logo"><img src="images/certifications/4.png" alt="Certification 4" /></div>
                        <div class="iso-logo"><img src="images/certifications/5.png" alt="Certification 5" /></div>
                        <div class="iso-logo"><img src="images/certifications/6.png" alt="Certification 6" /></div>
                        <div class="iso-logo"><img src="images/certifications/7.png" alt="Certification 7" /></div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="counter-strip">
        <div class="auto-container">
            <div class="counter-grid">
                <div class="counter-box">
                    <h4>7+</h4>
                    <p>Years of Excellence</p>
                </div>
                <div class="counter-box">
                    <h4>100+</h4>
                    <p>Projects Completed</p>
                </div>
                <div class="counter-box">
                    <h4>98%</h4>
                    <p>Client Satisfaction</p>
                </div>
                <div class="counter-box">
                    <h4>50+</h4>
                    <p>Expert Engineers</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-cta">
        <div class="auto-container">
            <div class="cta-inner">
                <h2>Build with a Steel Detailing Partner You Can Rely On</h2>
                <p>From design development to final fabrication information, VHS Engineering supports project teams with accurate, coordinated, and production-ready engineering outputs.</p>
                <a href="contact.php" class="theme-btn btn-style-three">
                    <span class="btn-wrap">
                        <span class="text-one">Start Your Project <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
                        <span class="text-two">Start Your Project <i><img src="assets/images/icons/arrow-1.svg" alt="" /></i></span>
                    </span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>