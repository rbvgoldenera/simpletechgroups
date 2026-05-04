<?php include ('config/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Tech Groups | Freelancer Platform Made in India</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple Tech Groups is an Indian freelancer platform connecting talent, startups, and businesses. Built by RBV Golden Era Evolutions.">
    <meta name="keywords" content="freelancer platform india, hire freelancers, simple tech groups, rbv golden era evolutions">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="icon" href="<?= $base_url ?>assets/images/favicon.png">
    <link rel="apple-touch-icon" href="<?= $base_url ?>assets/images/favicon.png">
    <link rel="manifest" href="<?= $base_url ?>site.webmanifest">

    <style>
        html{scroll-behavior:smooth}
        body{font-family:Poppins;background:#000;color:#fff}
        :root{--gold:#d4af37}

        a{text-decoration:none}
        section{padding:150px 0}

        .btn-gold{
            background:var(--gold);
            color:#000;
            font-weight:600;
            border-radius:30px;
            padding:12px 28px;
            transition:.3s;
        }
        .btn-gold:hover{opacity:.9}

        .navbar{
            background:#000;
            box-shadow:0 2px 20px rgba(212,175,55,.15);
        }
        .nav-link{color:#fff!important;margin-left:20px}

        .hero{
            min-height:100vh;
            display:flex;
            align-items:center;
            background:
                radial-gradient(circle at right, rgba(212,175,55,.15), transparent 60%),
                linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.9)),
                url("https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1600&q=70&fm=webp");
            background-size:cover;
            background-position:center;
            box-shadow:inset 0 -120px 120px rgba(0,0,0,.6);
        }

        .hero-image{position:relative;text-align:center}
        .hero-image img{
            max-width:100%;
            border-radius:20px;
            background:rgba(255,255,255,.05);
            backdrop-filter:blur(6px);
            border:1px solid rgba(212,175,55,.25);
            box-shadow:0 0 60px rgba(212,175,55,.25);
        }
        .hero-glow{
            position:absolute;
            top:-20%;
            right:-20%;
            width:300px;
            height:300px;
            background:radial-gradient(circle, rgba(212,175,55,.35), transparent 70%);
            z-index:-1;
        }

        .card-dark{
            background:#0e0e0e;
            border:1px solid rgba(212,175,55,.25);
            border-radius:18px;
            padding:30px;
            height:100%;
            transition:.3s;
        }
        .card-dark:hover{
            border-color:var(--gold);
            transform:translateY(-8px);
        }
        .card-dark img{transition:.3s}
        .card-dark:hover img{transform:scale(1.03)}
        .card-dark h5::before{content:"● ";color:var(--gold)}

        .section-title{color:var(--gold);font-weight:600}

        .form-control{
            background:#000;
            border:1px solid #444;
            color:#fff;
            padding:14px 16px;
        }
        .form-control::placeholder{color:#999}
        .form-control:focus{
            border-color:var(--gold);
            box-shadow:none;
        }

        #join .card-dark{
            padding:40px;
            box-shadow:0 0 50px rgba(0,0,0,.7);
        }

        footer{
            border-top:1px solid #222;
            padding:30px 0;
            text-align:center;
            font-size:14px;
            box-shadow:0 -1px 20px rgba(212,175,55,.15);
        }
        /* =========================
   MOBILE OPTIMIZATION
========================= */

        @media (max-width: 991px) {

            section {
                padding: 70px 0;
            }

            /* NAVBAR */
            .navbar-brand img {
                height: 55px;
            }

            .nav-link {
                margin-left: 0;
                padding: 10px 0;
                text-align: center;
            }

            .navbar-collapse {
                background: #000;
                padding: 15px 0;
            }

            /* HERO */
            .hero {
                min-height: auto;
                padding-top: 120px;
                padding-bottom: 80px;
                text-align: center;
            }

            .hero h1 {
                font-size: 2.2rem;
                line-height: 1.3;
            }

            .hero h4 {
                font-size: 1.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-image {
                margin-top: 30px;
            }

            .hero-image img {
                max-width: 90%;
            }

            .hero-glow {
                display: none;
            }

            /* BUTTONS */
            .hero .btn {
                width: 100%;
                margin-bottom: 12px;
            }

            /* CARDS */
            .card-dark {
                padding: 25px;
            }

            /* FORMS */
            .form-control {
                font-size: 16px; /* prevents mobile zoom */
            }

            #join .card-dark {
                padding: 25px;
            }

            /* FOOTER */
            footer {
                font-size: 13px;
                line-height: 1.6;
            }
        }

        /* EXTRA SMALL DEVICES */
        @media (max-width: 576px) {

            .hero h1 {
                font-size: 1.9rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            h4 {
                font-size: 1.1rem;
            }
        }
        /* =========================
            GOLD NAVBAR TOGGLER ICON
           ========================= */
        .navbar-toggler {
            border: 1px solid var(--gold);
            padding: 6px 10px;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        /* Bootstrap hamburger icon override */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba(212,175,55,1)' stroke-width='2.2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= $base_url ?>assets/images/site_logo.png" height="80" alt="Simple Tech Groups">
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu"
                style="border:1px solid var(--gold);">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="menu">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#how">How It Works</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#join">Join</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="fw-bold mb-3">
                    Build Careers.<br>Build Businesses.<br>
                    <span style="color:var(--gold)">Build the Future.</span>
                </h1>
                <h4 class="fw-light mb-4">
                    Endless Horizons. <span style="color:var(--gold)">Infinite Possibilities.</span>
                </h4>
                <p class="fs-5">
                    <strong>Simple Tech Groups</strong> is a <strong>next-generation freelancer and innovation platform made in India 🇮🇳</strong>,
                    connecting <strong>talented professionals, startups, and enterprises</strong>.
                </p>
                <p class="text-muted">Powered by <strong>RBV Golden Era Evolutions</strong></p>
                <div class="mt-4">
                    <a href="#join" class="btn btn-gold me-3 mb-2">Join as Freelancer</a>
                    <a href="#services" class="btn btn-outline-warning mb-2">Hire Top Talent</a>
                </div>
                <div class="mt-4 text-muted small">
                    ✔ Made in India &nbsp;|&nbsp; ✔ Freelancer-First &nbsp;|&nbsp; ✔ Business-Ready Solutions
                </div>
            </div>

            <div class="col-lg-5 d-none d-lg-block hero-image">
                <div class="hero-glow"></div>
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=70&fm=webp"
                     alt="Freelancers collaborating"
                     loading="lazy"
                     width="525"
                     height="350"
                >
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Who We Are</h2>
                <h4 class="mt-2">Innovating Futures. Empowering Today.</h4>
                <p class="mt-4">
                    Simple Tech Groups is a technology-focused community that connects
                    <strong>freelancers, startups, enterprises, and learners</strong>.
                </p>
                <p>
                    We believe in creating opportunities, nurturing talent, and delivering
                    impactful digital solutions that shape the future.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="card-dark">
                    <h5 class="text-warning">Our Vision</h5>
                    <p>To become India’s most trusted freelancer and innovation platform.</p>
                    <h5 class="text-warning mt-3">Our Mission</h5>
                    <p>
                        Empower individuals with skills, connect businesses with talent,
                        and build scalable digital solutions with integrity and innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section id="how">
    <div class="container">
        <h2 class="section-title text-center">How Simple Tech Groups Works</h2>
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>1. Join the Platform</h5>
                    <p>Sign up as a freelancer, student, startup, or business.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>2. Connect & Collaborate</h5>
                    <p>Get matched with real projects, clients, and teams.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>3. Build & Grow</h5>
                    <p>Earn, learn, and scale your career or business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services">
    <div class="container">
        <h2 class="section-title text-center">What We Offer</h2>
        <div class="row mt-5">

            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>Freelancer Marketplace</h5>
                    <p>Developers, designers, marketers, content creators & consultants.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1531498860502-7c67cf02f657?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>Business & Startup Solutions</h5>
                    <p>Web, app, CRM, ERP, automation & digital transformation.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card-dark">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=600&q=70&fm=webp" class="img-fluid rounded mb-3">
                    <h5>Internships & Skill Development</h5>
                    <p>Live projects, mentorship, career guidance & exposure.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE -->
<section id="why-choose">
    <div class="container">
        <h2 class="section-title text-center">Why Choose Simple Tech Groups?</h2>
        <p class="text-center mt-3 text-muted">
            More than a platform — a community built for growth, trust, and innovation.
        </p>

        <div class="row mt-5">
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Made in India, Built for the World</h5><p>Empowering Indian talent with global standards.</p></div></div>
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Freelancer-First Ecosystem</h5><p>Fair opportunities & sustainable growth.</p></div></div>
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Real Projects, Real Impact</h5><p>Meaningful work with real outcomes.</p></div></div>
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Learning While Earning</h5><p>Mentorship, internships & experience.</p></div></div>
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Transparent & Ethical</h5><p>Trust-driven collaboration.</p></div></div>
            <div class="col-md-6 mb-4"><div class="card-dark"><h5>Industry-Backed</h5><p>Powered by RBV Golden Era Evolutions.</p></div></div>
        </div>

        <div class="text-center mt-4">
            <p class="fw-semibold text-warning">
                We don’t just connect people — we build careers, businesses, and futures.
            </p>
        </div>
    </div>
</section>

<!-- JOIN -->
<section id="join">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Join Our Innovative Community</h2>
            <p class="mt-3 text-muted">
                Whether you are a freelancer, student, startup, or enterprise —
                <strong>this is your platform to grow.</strong>
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-dark">
                    <form id="joinForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>

                        <input type="text" name="phone" class="form-control mb-3" placeholder="Contact Number" required>

                        <textarea name="message" class="form-control mb-4" rows="4" placeholder="Message" required></textarea>

                        <button type="submit" class="btn btn-gold w-100" id="submitBtn">
                            <span id="btnText">Join Now</span>
                            <span id="btnLoader" class="spinner-border spinner-border-sm ms-2" style="display:none;"></span>
                        </button>
                    </form>
                    <div id="formMsg" class="text-success text-center mt-3" style="display:none;">
                        ✅ Thank you! We will contact you shortly.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    © 2026 Simple Tech Groups — A Product of <strong>RBV Golden Era Evolutions</strong><br>
    Made in India 🇮🇳 | Empowering Digital Futures
</footer>
<script>
    document.getElementById('joinForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const form = this;
        const btn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');
        const loader = document.getElementById('btnLoader');
        const msg = document.getElementById('formMsg');

        // show loader
        btn.disabled = true;
        btnText.innerText = 'Sending...';
        loader.style.display = 'inline-block';
        msg.style.display = 'none';

        fetch('helpers/send-mail.php', {
            method: 'POST',
            body: new FormData(form)
        }).then(() => {
            // hide loader
            btn.disabled = false;
            btnText.innerText = 'Join Now';
            loader.style.display = 'none';

            msg.style.display = 'block';
            form.reset();
        }).catch(() => {
            // still restore UI silently
            btn.disabled = false;
            btnText.innerText = 'Join Now';
            loader.style.display = 'none';
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
