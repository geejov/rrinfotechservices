<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contact RR Infotech Services about your next technology project.">
    <title>Contact Us | RR Infotech Services</title>
    <style>
        :root { --ink: #17211f; --muted: #66726d; --paper: #f5f3ed; --white: #fffdf8; --coral: #ef6f52; --lime: #d7e86f; --line: #d9ded8; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { background: var(--paper); color: var(--ink); font-family: Georgia, 'Times New Roman', serif; margin: 0; }
        a { color: inherit; text-decoration: none; }
        .nav, .contact-wrap, .footer-inner { margin: 0 auto; width: min(1160px, calc(100% - 48px)); }
        .nav { align-items: center; display: flex; justify-content: space-between; padding: 28px 0; }
        .brand { align-items: center; display: flex; font-family: Arial, sans-serif; font-size: 14px; font-weight: 800; letter-spacing: .08em; text-transform: uppercase; }
        .brand-mark { align-items: center; background: var(--coral); border-radius: 50%; color: var(--white); display: inline-flex; font-family: Georgia, serif; font-size: 18px; height: 38px; justify-content: center; margin-right: 11px; width: 38px; }
        .nav-links { align-items: center; display: flex; font-family: Arial, sans-serif; font-size: 13px; gap: 28px; }
        .nav-links a { color: var(--muted); }
        .nav-links a:hover { color: var(--coral); }
        .nav-links .active { color: var(--ink); font-weight: 700; }
        .nav-cta { background: var(--ink); border-radius: 99px; color: var(--white) !important; padding: 12px 18px; }
        .contact-wrap { min-height: calc(100vh - 156px); padding: 88px 0 110px; }
        .eyebrow, .contact-label { color: var(--coral); font-family: Arial, sans-serif; font-size: 11px; font-weight: 800; letter-spacing: .16em; text-transform: uppercase; }
        h1 { font-size: clamp(58px, 9vw, 112px); font-weight: 400; letter-spacing: -.07em; line-height: .88; margin: 24px 0 35px; max-width: 790px; }
        .intro { color: var(--muted); font-family: Arial, sans-serif; font-size: 17px; line-height: 1.6; max-width: 500px; }
        .contact-grid { border-top: 1px solid var(--line); display: grid; gap: 50px; grid-template-columns: 1fr 1fr; margin-top: 86px; padding-top: 28px; }
        .contact-card { max-width: 420px; }
        .contact-card h2 { font-size: 32px; font-weight: 400; letter-spacing: -.04em; margin: 38px 0 15px; }
        .contact-card p { color: var(--muted); font-family: Arial, sans-serif; font-size: 14px; line-height: 1.7; margin: 0 0 25px; }
        .email-link { border-bottom: 1px solid var(--coral); color: var(--coral); font-family: Arial, sans-serif; font-size: 15px; padding-bottom: 5px; }
        .note { background: var(--lime); padding: 28px; transform: rotate(2deg); }
        .note strong { display: block; font-size: 35px; font-weight: 400; line-height: 1; margin-bottom: 24px; }
        .note p { color: var(--ink); margin: 0; }
        footer { background: var(--white); }
        .footer-inner { align-items: center; display: flex; justify-content: space-between; padding: 27px 0; }
        .footer-copy { color: var(--muted); font-family: Arial, sans-serif; font-size: 11px; }
        @media (max-width: 700px) {
            .nav, .contact-wrap, .footer-inner { width: min(100% - 36px, 1160px); }
            .nav { padding: 20px 0; }
            .nav-links a:not(.nav-cta) { display: none; }
            .contact-wrap { padding: 72px 0 80px; }
            h1 { font-size: 64px; }
            .contact-grid { grid-template-columns: 1fr; margin-top: 62px; }
            .footer-inner { align-items: flex-start; flex-direction: column; gap: 24px; }
        }
    </style>
</head>
<body>
<header class="nav">
    <a class="brand" href="{{ route('rr.home') }}"><span class="brand-mark">RR</span> Infotech Services</a>
    <nav class="nav-links" aria-label="Main navigation">
        <a href="{{ route('rr.home') }}#services">Services</a>
        <a href="{{ route('rr.home') }}#about">Approach</a>
        <a class="active" href="{{ route('rr.contact') }}" aria-current="page">Contact Us</a>
        <a class="nav-cta" href="{{ route('login') }}">Client login <span aria-hidden="true">↗</span></a>
    </nav>
</header>
<main class="contact-wrap">
    <div class="eyebrow">Let's make something work</div>
    <h1>Tell us what you're building.</h1>
    <p class="intro">Have a new project in mind, a system that needs attention, or simply a question? Send us a note and we'll start from there.</p>
    <div class="contact-grid">
        <section class="contact-card">
            <div class="contact-label">Email us</div>
            <h2>Start a useful conversation.</h2>
            <p>Share a little about your goals, timeline, or challenge. We will get back to you with a thoughtful next step.</p>
            <a class="email-link" href="mailto:admin@rrinfotechservices.com">admin@rrinfotechservices.com ↗</a>
        </section>
        <aside class="note">
            <strong>Bring the messy version.</strong>
            <p>You do not need a perfect brief. A question, a sketch, or a problem that keeps recurring is enough to begin.</p>
        </aside>
    </div>
</main>
<footer><div class="footer-inner"><a class="brand" href="{{ route('rr.home') }}"><span class="brand-mark">RR</span> Infotech Services</a><span class="footer-copy">Built for better work · {{ date('Y') }}</span></div></footer>
</body>
</html>