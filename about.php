<?php include('header.php'); ?>

<style>
.about-unique {
    --au-bg: #ffffff;
    --au-ink: #12263b;
    --au-copy: #4f647b;
    --au-line: rgba(18, 38, 59, 0.14);
    --au-blue: #1880da;
    --au-sky: #38bdf8;
    --au-panel: #ffffff;
    background: #ffffff;
}

.about-unique .auto-container {
    position: relative;
    z-index: 2;
}

.au-hero {
    padding: 104px 0 78px;
    min-height: calc(100vh - 96px);
    display: flex;
    align-items: center;
    background: radial-gradient(circle at 12% 20%, rgba(56, 189, 248, 0.16), transparent 38%),
        linear-gradient(120deg, #0d2238 0%, #123556 56%, #133d63 100%);
}

.au-hero-grid {
    display: grid;
    grid-template-columns: 1.05fr 0.95fr;
    gap: 28px;
    align-items: center;
}

.au-hero-copy {
    padding: 10px 8px 10px 0;
    max-width: 720px;
}

.au-kicker {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.au-kicker::before {
    content: "";
    width: 18px;
    height: 2px;
    background: currentColor;
}

.au-kicker.light {
    color: #9fd9ff;
}

.au-kicker.dark {
    color: var(--au-blue);
}

.au-hero h1 {
    margin: 14px 0 16px;
    color: #ffffff;
    font-size: 62px;
    line-height: 1.08;
    letter-spacing: -0.9px;
}

.au-hero p {
    margin: 0;
    max-width: 700px;
    color: #dceaf8;
    font-size: 17px;
    line-height: 1.82;
}

.au-hero-metrics {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 22px;
}

.au-pill {
    border: 1px solid rgba(159, 217, 255, 0.34);
    color: #e8f5ff;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 999px;
    padding: 9px 14px;
    font-size: 12px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    font-weight: 700;
}

.au-hero-visual {
    position: relative;
    background: linear-gradient(145deg, rgba(10, 42, 72, 0.36), rgba(24, 128, 218, 0.08)), url('images/about.png') center/cover no-repeat;
    border: 1px solid rgba(185, 218, 245, 0.34);
    border-radius: 22px;
    box-shadow: 0 22px 40px rgba(7, 20, 33, 0.35);
    min-height: 420px;
    overflow: hidden;
}

.au-hero-visual::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(7, 20, 33, 0.12), rgba(7, 20, 33, 0.52));
}

.au-hero-photo-note {
    position: absolute;
    left: 18px;
    right: 18px;
    bottom: 16px;
    padding: 10px 12px;
    border: 1px solid rgba(255, 255, 255, 0.24);
    border-radius: 10px;
    background: rgba(8, 24, 41, 0.45);
    color: #e9f4ff;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.9px;
    text-transform: uppercase;
    z-index: 2;
}


.au-nav-wrap {
    margin-top: -24px;
}

.au-nav {
    list-style: none;
    margin: 0;
    padding: 14px;
    border: 1px solid rgba(18, 38, 59, 0.14);
    border-radius: 16px;
    background: linear-gradient(180deg, #ffffff 0%, #f6fbff 100%);
    box-shadow: 0 14px 30px rgba(18, 38, 59, 0.11);
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    align-items: stretch;
}

.au-nav li {
    flex: 0 0 auto;
}

.au-nav a {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 42px;
    text-decoration: none;
    border: 1px solid rgba(18, 38, 59, 0.12);
    border-radius: 999px;
    padding: 9px 16px;
    background: #ffffff;
    color: #4f647b;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.55px;
    font-weight: 700;
    transition: all 0.22s ease;
}

.au-nav a:hover {
    background: #eef7ff;
    color: #123556;
    border-color: rgba(24, 128, 218, 0.35);
}

.au-section {
    padding: 80px 0;
    scroll-margin-top: 110px;
}

.au-section.alt {
    background: #ffffff;
}

.au-head {
    margin-bottom: 26px;
}

.au-head h2 {
    margin: 10px 0 0;
    font-size: 38px;
    line-height: 1.2;
    color: var(--au-ink);
    letter-spacing: -0.45px;
}

.au-head p {
    margin: 12px 0 0;
    color: var(--au-copy);
    max-width: 860px;
    line-height: 1.85;
    font-size: 16px;
}

.au-about-layout {
    display: grid;
    grid-template-columns: 1.08fr 0.92fr;
    gap: 20px;
}

.au-manifesto {
    border: 1px solid var(--au-line);
    border-left: 4px solid #1880da;
    border-radius: 14px;
    background: #ffffff;
    padding: 26px 24px;
}

.au-manifesto p {
    margin: 0;
    color: var(--au-copy);
    line-height: 1.9;
    font-size: 15px;
}

.au-ring {
    border: 1px solid var(--au-line);
    border-radius: 14px;
    background: linear-gradient(160deg, #ffffff, #f5faff);
    padding: 24px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.au-ring-mark {
    width: 108px;
    height: 108px;
    border-radius: 50%;
    border: 8px solid rgba(24, 128, 218, 0.18);
    position: relative;
    flex-shrink: 0;
}

.au-ring-mark::after {
    content: "2017";
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--au-blue);
    font-size: 24px;
    font-weight: 800;
}

.au-ring h4 {
    margin: 0 0 6px;
    font-size: 21px;
    color: var(--au-ink);
}

.au-ring p {
    margin: 0;
    color: var(--au-copy);
    font-size: 14px;
    line-height: 1.75;
}

.au-editorial {
    columns: 2;
    column-gap: 24px;
}

.au-editorial p {
    margin: 0 0 14px;
    color: var(--au-copy);
    font-size: 15px;
    line-height: 1.85;
}

.au-sector-mosaic {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: 122px;
    gap: 12px;
}

.au-tile {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
}

.au-tile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.au-tile::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, transparent 20%, rgba(7, 23, 43, 0.78));
}

.au-tile span {
    position: absolute;
    left: 14px;
    right: 14px;
    bottom: 12px;
    color: #ffffff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.4px;
}

.au-tile.t1 { grid-column: span 4; grid-row: span 2; }
.au-tile.t2 { grid-column: span 4; grid-row: span 1; }
.au-tile.t3 { grid-column: span 4; grid-row: span 2; }
.au-tile.t4 { grid-column: span 3; grid-row: span 1; }
.au-tile.t5 { grid-column: span 5; grid-row: span 1; }
.au-tile.t6 { grid-column: span 4; grid-row: span 1; }

.au-timeline {
    position: relative;
    margin: 2px 0 0;
    padding-left: 34px;
}

.au-timeline::before {
    content: "";
    position: absolute;
    left: 12px;
    top: 8px;
    bottom: 8px;
    width: 2px;
    background: linear-gradient(180deg, #38bdf8, #1880da);
}

.au-step {
    position: relative;
    margin-bottom: 20px;
    padding: 0 0 0 6px;
}

.au-step:last-child {
    margin-bottom: 0;
}

.au-step::before {
    content: "";
    position: absolute;
    left: -28px;
    top: 6px;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: #ffffff;
    border: 3px solid #1880da;
}

.au-step h4 {
    margin: 0 0 6px;
    color: var(--au-ink);
    font-size: 20px;
}

.au-step p {
    margin: 0;
    color: var(--au-copy);
    line-height: 1.8;
    font-size: 15px;
}

.au-mv {
    border-radius: 16px;
    overflow: hidden;
    border: 1px solid var(--au-line);
    background: #ffffff;
    display: grid;
    grid-template-columns: 1fr 1fr;
}

.au-mv-item {
    padding: 28px 24px;
}

.au-mv-item:first-child {
    background: linear-gradient(150deg, #f8fbff, #eef5fc);
    border-right: 1px solid var(--au-line);
}

.au-mv-item h3 {
    margin: 0 0 10px;
    color: var(--au-ink);
    font-size: 27px;
}

.au-mv-item p {
    margin: 0;
    color: var(--au-copy);
    line-height: 1.85;
    font-size: 15px;
}

.au-team-lanes {
    border: 1px solid var(--au-line);
    border-radius: 16px;
    overflow: hidden;
    background: #ffffff;
}

.au-lane {
    display: grid;
    grid-template-columns: 220px 1fr;
    border-bottom: 1px solid var(--au-line);
}

.au-lane:last-child {
    border-bottom: 0;
}

.au-lane-head {
    background: #f3f9ff;
    color: var(--au-blue);
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 700;
    text-transform: uppercase;
    padding: 18px 16px;
    border-right: 1px solid var(--au-line);
}

.au-lane-body {
    padding: 18px 16px;
}

.au-lane-body h4 {
    margin: 0 0 6px;
    color: var(--au-ink);
    font-size: 20px;
}

.au-lane-body p {
    margin: 0;
    color: var(--au-copy);
    line-height: 1.8;
    font-size: 15px;
}

.au-cred-wrap {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 16px;
}

.au-standards {
    border: 1px solid var(--au-line);
    border-radius: 14px;
    background: #ffffff;
    padding: 22px 20px;
}

.au-standards ul {
    margin: 0;
    padding-left: 18px;
    color: var(--au-copy);
}

.au-standards li {
    margin-bottom: 9px;
    line-height: 1.75;
}

.au-logos {
    border: 1px solid var(--au-line);
    border-radius: 14px;
    background: #ffffff;
    padding: 14px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.au-logo {
    min-height: 72px;
    border: 1px solid rgba(18, 38, 59, 0.1);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f8fbff;
}

.au-logo img {
    max-width: 90%;
    max-height: 50px;
    object-fit: contain;
}

.au-achievements {
    padding: 64px 0;
    background: linear-gradient(135deg, #0f2237, #133a5d);
}

.au-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 12px;
}

.au-stat {
    text-align: center;
    padding: 10px;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
}

.au-stat:last-child {
    border-right: 0;
}

.au-stat h3 {
    margin: 0;
    color: #ffffff;
    font-size: 40px;
    line-height: 1;
}

.au-stat p {
    margin: 8px 0 0;
    color: #c7dbef;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.8px;
}

.au-value-matrix {
    border: 1px solid var(--au-line);
    border-radius: 14px;
    overflow: hidden;
    background: #ffffff;
}

.au-matrix-row {
    display: grid;
    grid-template-columns: 1fr 2fr;
    border-bottom: 1px solid var(--au-line);
}

.au-matrix-row:last-child {
    border-bottom: 0;
}

.au-matrix-key {
    background: #f3f9ff;
    padding: 16px;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    color: var(--au-blue);
    border-right: 1px solid var(--au-line);
}

.au-matrix-val {
    padding: 16px;
    color: var(--au-copy);
    line-height: 1.75;
    font-size: 15px;
}

@media (max-width: 1199px) {
    .au-hero h1,
    .au-head h2 {
        font-size: 35px;
    }

    .au-hero h1 {
        font-size: 52px;
    }

    .au-sector-mosaic {
        grid-auto-rows: 118px;
    }
}

@media (max-width: 991px) {
    .au-hero {
        padding: 88px 0 72px;
        min-height: calc(100vh - 82px);
        background: linear-gradient(180deg, #10283f 0%, #154468 100%);
    }

        gap: 8px;
        padding: 12px 10px;
    .au-cred-wrap,
    .au-mv,
    .au-matrix-row {
        margin-top: -16px;
    }

    .au-lane {
        grid-template-columns: 1fr;
        padding: 8px 11px;
        min-height: 38px;

    .au-lane-head,
    .au-matrix-key {
        border-right: 0;
        border-bottom: 1px solid var(--au-line);
    }

    .au-logos {
        grid-template-columns: repeat(4, 1fr);
    }

    .au-stats {
        grid-template-columns: repeat(2, 1fr);
    }

    .au-stat {
        border-right: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 16px;
    }

    .au-stat:nth-last-child(-n+2) {
        border-bottom: 0;
    }

    .au-editorial {
        columns: 1;
    }

    .au-sector-mosaic {
        grid-template-columns: repeat(6, 1fr);
    }

    .au-tile.t1,
    .au-tile.t2,
    .au-tile.t3,
    .au-tile.t4,
    .au-tile.t5,
    .au-tile.t6 {
        grid-column: span 3;
        grid-row: span 1;
    }
}

@media (max-width: 767px) {
    .au-hero {
        min-height: calc(100vh - 74px);
    }

    .au-hero h1,
    .au-head h2 {
        font-size: 29px;
    }

    .au-nav {
        gap: 6px 12px;
        padding: 6px 0;
    }

    .au-nav-wrap {
        margin-top: -12px;
    }

    .au-nav a {
        font-size: 10px;
        padding: 6px 1px;
    }

    .au-section {
        padding: 64px 0;
    }

    .au-logos {
        grid-template-columns: repeat(2, 1fr);
    }

    .au-stats {
        grid-template-columns: 1fr;
    }

    .au-stat {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    .au-stat:last-child {
        border-bottom: 0;
    }

    .au-sector-mosaic {
        grid-template-columns: 1fr;
        grid-auto-rows: 170px;
    }

    .au-tile.t1,
    .au-tile.t2,
    .au-tile.t3,
    .au-tile.t4,
    .au-tile.t5,
    .au-tile.t6 {
        grid-column: span 1;
    }
}
</style>

<main class="about-unique">
    <section class="au-hero">
        <div class="auto-container">
            <div class="au-hero-grid">
                <div class="au-hero-copy">
                    <span class="au-kicker light">About</span>
                    <h1>VHS Engineering</h1>
                    <p>We are a structural steel engineering company delivering design, detailing, and BIM coordination services with global project exposure, disciplined quality systems, and practical execution support.</p>
                    <div class="au-hero-metrics">
                        <span class="au-pill">ISO 9001-2015</span>
                        <span class="au-pill">100+ Projects</span>
                        <span class="au-pill">10+ Countries</span>
                        <span class="au-pill">Since 2017</span>
                    </div>
                </div>
                <div class="au-hero-visual" aria-hidden="true"></div>
            </div>
        </div>
    </section>

    <section class="au-nav-wrap">
        <div class="auto-container">
            <ul class="au-nav">
                <li><a href="#about">About</a></li>
                <li><a href="#who-we-are">Who We Are</a></li>
                <li><a href="#sectors">Sectors We Serve</a></li>
                <li><a href="#approach">Our Approach</a></li>
                <li><a href="#mission-vision">Our Mission &amp; Vision</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#credentials">Our Credentials</a></li>
                <li><a href="#achievements">Our Achievements</a></li>
                <li><a href="#why-choose-us">Why Choose Us</a></li>
            </ul>
        </div>
    </section>

    <section class="au-section" id="about">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">About</span>
                <h2>Company Profile</h2>
                <p>VHS Engineering is an ISO 9001-2015 certified structural steel engineering company established in 2017. We support fabricators, contractors, and consultants through dependable technical delivery and a quality-led project culture.</p>
            </div>
            <div class="au-about-layout">
                <div class="au-manifesto">
                    <p>Our business is built around technical accuracy, delivery discipline, and practical project collaboration. We believe engineering value is created when design intent, fabrication constraints, and site realities are aligned early. This approach reduces uncertainty, supports better decisions, and helps teams execute with confidence.</p>
                </div>
                <aside class="au-ring">
                    <div class="au-ring-mark"></div>
                    <div>
                        <h4>Established In 2017</h4>
                        <p>A steadily growing engineering organization focused on structural steel design, BIM coordination, and detailing excellence.</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <section class="au-section alt" id="who-we-are">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Who We Are</span>
                <h2>Engineering Specialists In Structural Steel</h2>
            </div>
            <div class="au-editorial">
                <p>VHS Engineering combines engineering judgment with modern digital workflows to deliver clear, coordinated, and fabrication-ready outputs. Our teams work with established standards and robust review systems to ensure consistency in every stage of project delivery.</p>
                <p>We collaborate with fabricators, EPC teams, contractors, and consultants across regions. By keeping communication structured and transparent, we support faster issue resolution and reliable progress through design, detailing, and execution phases.</p>
                <p>Our strength lies in balancing technical rigor with practical constructability. The result is work that is not only code-compliant, but also usable for production and site implementation.</p>
            </div>
        </div>
    </section>

    <section class="au-section" id="sectors">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Sectors We Serve</span>
                <h2>Project Environments We Support</h2>
            </div>
            <div class="au-sector-mosaic">
                <figure class="au-tile t1"><img src="images/PARK-MANOR-STORAGE.png" alt="Commercial steel project" /><span>Commercial Buildings</span></figure>
                <figure class="au-tile t2"><img src="images/caterpillar.png" alt="Industrial steel project" /><span>Industrial Facilities</span></figure>
                <figure class="au-tile t3"><img src="images/The-Watermark-At-Napa-Valley.png" alt="Hospitality structure" /><span>Hospitality & Mixed-Use</span></figure>
                <figure class="au-tile t4"><img src="images/DISTRIBUTION BUILDING.png" alt="Distribution building" /><span>Infrastructure</span></figure>
                <figure class="au-tile t5"><img src="images/Courtyard-Marriott-Santa-Cruz.png" alt="Institutional project" /><span>Institutional & Public Works</span></figure>
                <figure class="au-tile t6"><img src="images/TRYP-Hotel.png" alt="Special steel work" /><span>Special Steel Applications</span></figure>
            </div>
        </div>
    </section>

    <section class="au-section alt" id="approach">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Our Approach</span>
                <h2>Structured Delivery Lifecycle</h2>
            </div>
            <div class="au-timeline">
                <article class="au-step">
                    <h4>Scope Alignment</h4>
                    <p>Define standards, deliverables, interfaces, and milestones with stakeholders at project start.</p>
                </article>
                <article class="au-step">
                    <h4>Engineering Development</h4>
                    <p>Build models and details with emphasis on constructability, code compliance, and coordination quality.</p>
                </article>
                <article class="au-step">
                    <h4>Quality Review</h4>
                    <p>Apply internal checkpoints before issue to reduce revisions and improve downstream certainty.</p>
                </article>
                <article class="au-step">
                    <h4>Execution Support</h4>
                    <p>Respond to RFIs, updates, and design clarifications through fabrication and erection stages.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="au-section" id="mission-vision">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Our Mission &amp; Vision</span>
                <h2>Long-Term Commitment To Engineering Value</h2>
            </div>
            <div class="au-mv">
                <article class="au-mv-item">
                    <h3>Our Mission</h3>
                    <p>To deliver dependable and technically sound structural steel engineering outputs that help project teams execute safely, efficiently, and with clarity.</p>
                </article>
                <article class="au-mv-item">
                    <h3>Our Vision</h3>
                    <p>To be a globally trusted engineering partner recognized for quality discipline, transparent collaboration, and consistent delivery standards.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="au-section alt" id="team">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Our Team</span>
                <h2>Multi-Disciplinary Project Organization</h2>
            </div>
            <div class="au-team-lanes">
                <div class="au-lane">
                    <div class="au-lane-head">Leadership</div>
                    <div class="au-lane-body">
                        <h4>Engineering Management</h4>
                        <p>Leads technical governance, project priorities, and stakeholder communication.</p>
                    </div>
                </div>
                <div class="au-lane">
                    <div class="au-lane-head">Core Delivery</div>
                    <div class="au-lane-body">
                        <h4>Detailing & BIM Team</h4>
                        <p>Produces coordinated models and drawings aligned with fabrication and construction workflows.</p>
                    </div>
                </div>
                <div class="au-lane">
                    <div class="au-lane-head">Support</div>
                    <div class="au-lane-body">
                        <h4>Quality & Coordination</h4>
                        <p>Maintains review controls, issue tracking, and revision integrity across project phases.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="au-section" id="credentials">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Our Credentials</span>
                <h2>Standards, Systems, And Engineering Platforms</h2>
            </div>
            <div class="au-cred-wrap">
                <div class="au-standards">
                    <ul>
                        <li>ISO 9001-2015 quality management framework integrated into engineering delivery.</li>
                        <li>Experience with AISC, CISC/CSA, BS/EN, and IS code environments.</li>
                        <li>Structured review process before issue of drawings and models.</li>
                        <li>Engineering workflows supported by Tekla Structures, Revit, SDS/2, and AutoCAD.</li>
                        <li>Coordination continuity through revisions, RFIs, and stakeholder feedback cycles.</li>
                    </ul>
                </div>
                <div class="au-logos">
                    <div class="au-logo"><img src="images/certifications/1.png" alt="Certification 1" /></div>
                    <div class="au-logo"><img src="images/certifications/2.png" alt="Certification 2" /></div>
                    <div class="au-logo"><img src="images/certifications/3.png" alt="Certification 3" /></div>
                    <div class="au-logo"><img src="images/certifications/4.png" alt="Certification 4" /></div>
                    <div class="au-logo"><img src="images/certifications/5.png" alt="Certification 5" /></div>
                    <div class="au-logo"><img src="images/certifications/6.png" alt="Certification 6" /></div>
                </div>
            </div>
        </div>
    </section>

    <section class="au-achievements" id="achievements">
        <div class="auto-container">
            <div class="au-head" style="margin-bottom:18px;">
                <span class="au-kicker light">Our Achievements</span>
                <h2 style="color:#ffffff;">Delivery Track Record</h2>
            </div>
            <div class="au-stats">
                <div class="au-stat"><h3>2017</h3><p>Established</p></div>
                <div class="au-stat"><h3>100+</h3><p>Projects Delivered</p></div>
                <div class="au-stat"><h3>10+</h3><p>Countries Served</p></div>
                <div class="au-stat"><h3>50+</h3><p>Engineering Experts</p></div>
            </div>
        </div>
    </section>

    <section class="au-section" id="why-choose-us">
        <div class="auto-container">
            <div class="au-head">
                <span class="au-kicker dark">Why Choose Us</span>
                <h2>Client Value Matrix</h2>
                <p>We focus on engineering outcomes that reduce uncertainty, improve coordination confidence, and support predictable execution on real projects.</p>
            </div>
            <div class="au-value-matrix">
                <div class="au-matrix-row">
                    <div class="au-matrix-key">Technical Reliability</div>
                    <div class="au-matrix-val">Disciplined quality checks and standards-driven detailing reduce ambiguity in fabrication and site interpretation.</div>
                </div>
                <div class="au-matrix-row">
                    <div class="au-matrix-key">Coordination Clarity</div>
                    <div class="au-matrix-val">Structured communication with consultants, contractors, and fabricators supports faster issue resolution.</div>
                </div>
                <div class="au-matrix-row">
                    <div class="au-matrix-key">Schedule Discipline</div>
                    <div class="au-matrix-val">Milestone-focused planning and review cycles help maintain committed delivery timelines.</div>
                </div>
                <div class="au-matrix-row">
                    <div class="au-matrix-key">Long-Term Partnership</div>
                    <div class="au-matrix-val">Our client relationships are built on consistency, accountability, and practical engineering support.</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php'); ?>