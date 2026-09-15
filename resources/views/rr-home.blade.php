<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RR Infotech Services builds dependable digital systems for ambitious teams.">
    <title>RR Infotech Services | Technology that moves work forward</title>
    <style>
        :root { --ink: #17211f; --muted: #66726d; --paper: #f5f3ed; --white: #fffdf8; --coral: #ef6f52; --lime: #d7e86f; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; background: var(--paper); color: var(--ink); font-family: Georgia, 'Times New Roman', serif; }
        a { color: inherit; text-decoration: none; }
        .site-shell { overflow: hidden; }
        .nav, .hero, .section-inner, .footer-inner { width: min(1160px, calc(100% - 48px)); margin: 0 auto; }
        .nav { align-items: center; display: flex; justify-content: space-between; padding: 28px 0; }
        .brand { align-items: center; display: flex; font-family: Arial, sans-serif; font-size: 14px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; }
        .brand-mark { align-items: center; background: var(--coral); border-radius: 50%; color: var(--white); display: inline-flex; font-family: Georgia, serif; font-size: 18px; height: 38px; justify-content: center; margin-right: 11px; width: 38px; }
        .nav-links { align-items: center; display: flex; gap: 28px; font-family: Arial, sans-serif; font-size: 13px; }
        .nav-links a { color: var(--muted); }
        .nav-links a:hover { color: var(--coral); }
        .nav-cta, .hero-cta { background: var(--ink); border-radius: 99px; color: var(--white) !important; padding: 12px 18px; }
        .hero { min-height: 610px; padding: 86px 0 112px; position: relative; }
        .hero:after { border: 1px solid var(--coral); border-radius: 50%; content: ''; height: 410px; opacity: .5; position: absolute; right: -100px; top: 30px; transform: rotate(-28deg); width: 265px; }
        .eyebrow, .section-kicker { color: var(--coral); font-family: Arial, sans-serif; font-size: 11px; font-weight: 800; letter-spacing: .16em; text-transform: uppercase; }
        h1 { font-size: clamp(55px, 8vw, 106px); font-weight: 400; letter-spacing: -.06em; line-height: .9; margin: 24px 0 32px; max-width: 790px; }
        .hero-copy { color: var(--muted); font-family: Arial, sans-serif; font-size: 17px; line-height: 1.6; max-width: 480px; }
        .hero-actions { align-items: center; display: flex; gap: 21px; margin-top: 34px; }
        .hero-cta { background: var(--coral); font-family: Arial, sans-serif; font-size: 13px; font-weight: 700; padding: 16px 24px; }
        .text-link { border-bottom: 1px solid var(--ink); font-family: Arial, sans-serif; font-size: 13px; padding-bottom: 4px; }
        .signal { align-items: flex-end; background: var(--lime); bottom: 80px; display: flex; font-family: Arial, sans-serif; font-size: 11px; height: 116px; justify-content: space-between; padding: 18px; position: absolute; right: 80px; transform: rotate(-6deg); width: 220px; z-index: 1; }
        .signal strong { font-family: Georgia, serif; font-size: 39px; font-weight: 400; }
        .band { background: var(--ink); color: var(--white); }
        .section-inner { padding: 104px 0; }
        .section-heading { display: flex; justify-content: space-between; margin-bottom: 56px; }
        h2 { font-size: clamp(36px, 5vw, 62px); font-weight: 400; letter-spacing: -.05em; line-height: .96; margin: 16px 0 0; max-width: 540px; }
        .section-intro { color: #b8c2bd; font-family: Arial, sans-serif; line-height: 1.6; margin: 18px 0 0; max-width: 305px; }
        .services { display: grid; gap: 1px; grid-template-columns: repeat(3, 1fr); }
        .service { border-top: 1px solid #45514d; padding: 28px 26px 20px 0; }
        .service-number { color: var(--lime); font-family: Arial, sans-serif; font-size: 12px; }
        h3 { font-size: 29px; font-weight: 400; margin: 48px 0 15px; }
        .service p { color: #b8c2bd; font-family: Arial, sans-serif; font-size: 14px; line-height: 1.65; margin: 0; max-width: 250px; }
        .proof { background: var(--coral); }
        .proof .section-inner { align-items: center; display: flex; justify-content: space-between; }
        .proof h2 { max-width: 660px; }
        .proof-stat { border-left: 1px solid rgba(255,253,248,.5); padding-left: 28px; }
        .proof-stat strong { display: block; font-size: 55px; font-weight: 400; }
        .proof-stat span { font-family: Arial, sans-serif; font-size: 12px; }
        footer { background: var(--white); }
        .footer-inner { align-items: center; display: flex; justify-content: space-between; padding: 27px 0; }
        .footer-copy { color: var(--muted); font-family: Arial, sans-serif; font-size: 11px; }
        @media (max-width: 700px) {
            .nav, .hero, .section-inner, .footer-inner { width: min(100% - 36px, 1160px); }
            .nav { padding: 20px 0; }
            .nav-links a:not(.nav-cta) { display: none; }
            .hero { min-height: 680px; padding: 78px 0 80px; }
            h1 { font-size: 61px; max-width: 350px; }
            .hero:after { right: -185px; top: 130px; }
            .signal { bottom: 55px; right: 20px; }
            .section-inner { padding: 72px 0; }
            .section-heading, .proof .section-inner, .footer-inner { align-items: flex-start; flex-direction: column; gap: 24px; }
            .services { grid-template-columns: 1fr; }
            .service { padding-right: 0; }
            h3 { margin-top: 30px; }
            .proof-stat { border-left: 0; border-top: 1px solid rgba(255,253,248,.5); padding: 20px 0 0; }
        }
    </style>
</head>
<body>
<div class="site-shell">
    <header class="nav">
        <a class="brand" href="{{ route('rr.home') }}"><span class="brand-mark">RR</span> Infotech Services</a>
        <nav class="nav-links" aria-label="Main navigation">
            <a href="#services">Services</a>
            <a href="#about">Approach</a>
            <a href="{{ route('rr.contact') }}">Contact Us</a>
            <a class="nav-cta" href="{{ route('login') }}">Client login <span aria-hidden="true">↗</span></a>
        </nav>
    </header>
    <main>
        <section class="hero" id="about">
            <div class="eyebrow">Technology / strategy / care</div>
            <h1>Make your next move your best one.</h1>
            <p class="hero-copy">RR Infotech Services turns complex technology into clear, dependable systems that help people do their best work.</p>
            <div class="hero-actions"><a class="hero-cta" href="{{ route('rr.contact') }}">Start a conversation <span aria-hidden="true">↗</span></a><a class="text-link" href="#services">Explore our work</a></div>
            <div class="signal"><strong>24/7</strong><span>support<br>when it counts</span></div>
        </section>
        <section class="band" id="services">
            <div class="section-inner">
                <div class="section-heading"><div><div class="section-kicker">What we do</div><h2>Good technology should feel simple.</h2></div><p class="section-intro">From a first idea to the daily details, we bring practical thinking and human attention to every engagement.</p></div>
                <div class="services">
                    <article class="service"><span class="service-number">01 / Build</span><h3>Digital solutions</h3><p>Websites, applications, and connected tools designed around the way your team actually works.</p></article>
                    <article class="service"><span class="service-number">02 / Protect</span><h3>IT support</h3><p>Responsive technical guidance and dependable infrastructure that keeps business moving.</p></article>
                    <article class="service"><span class="service-number">03 / Grow</span><h3>Smart strategy</h3><p>A clear technology roadmap that turns today's bottlenecks into tomorrow's momentum.</p></article>
                </div>
            </div>
        </section>
        <section class="proof"><div class="section-inner"><h2>Less noise. More progress. Technology with a point of view.</h2><div class="proof-stat"><strong>01</strong><span>partner for the long run</span></div></div></section>
    </main>
    <footer><div class="footer-inner"><a class="brand" href="{{ route('rr.home') }}"><span class="brand-mark">RR</span> Infotech Services</a><span class="footer-copy">Built for better work · {{ date('Y') }}</span></div></footer>
</div>
</body>
</html>