<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Primary Meta Tags -->
	<title>Simple Tech Groups - Find Your Dream Tech Job | Top Tech Careers</title>
	<meta name="title" content="Simple Tech Groups - Find Your Dream Tech Job | Top Tech Careers">
	<meta name="description"
		  content="Discover 2k+ live tech jobs across popular roles. Connect with 9k+ companies and join 2M+ candidates. Build your career with Simple Tech Groups - India's premier tech job platform.">
	<meta name="keywords"
		  content="tech jobs, software engineer jobs, IT careers, tech recruitment, job search, remote jobs, tech companies, career opportunities, India tech jobs">
	<meta name="author" content="Simple Tech Groups">
	<meta name="robots" content="index, follow">
	<meta name="language" content="English">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?=base_url()?>">
	<meta property="og:title" content="Simple Tech Groups - Find Your Dream Tech Job">
	<meta property="og:description"
		  content="Discover 2k+ live tech jobs across popular roles. Connect with 9k+ companies and join 2M+ candidates.">
	<meta property="og:image" content="<?=base_url()?>logo.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?=base_url()?>">
	<meta property="twitter:title" content="Simple Tech Groups - Find Your Dream Tech Job">
	<meta property="twitter:description"
		  content="Discover 2k+ live tech jobs across popular roles. Connect with 9k+ companies and join 2M+ candidates.">
	<meta property="twitter:image" content="<?=base_url()?>logo.png">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/assets/images/fav_icon.jpeg">
	<link rel="apple-touch-icon" href="logo.png">

	<!-- Canonical URL -->
	<link rel="canonical" href="<?=base_url()?>">

	<!-- Additional Meta Tags -->
	<meta name="theme-color" content="#d4af37">
	<meta property="og:locale" content="en_US">
	<meta property="og:site_name" content="Simple Tech Groups">


	<!-- Structured Data (JSON-LD) -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Simple Tech Groups",
			"url": "<?=base_url()?>",
			"logo": "<?=base_url()?>logo.png",
			"description": "India's premier tech job platform connecting talent with opportunities",
			"sameAs": [
				"https://facebook.com/simpletechgroups",
				"https://twitter.com/simpletechgroups",
				"https://linkedin.com/company/simpletechgroups"
			],
			"contactPoint": {
				"@type": "ContactPoint",
				"contactType": "Customer Service",
				"availableLanguage": "English"
			}
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"name": "Simple Tech Groups",
			"url": "<?=base_url()?>",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "<?=base_url()?>search?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>

	<link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
</head>

<body>
<!-- Header -->
<header>
	<div class="container">
		<a href="<?= base_url()?>" class="logo">
			<img src="<?=base_url('assets/')?>images/logo.png" alt="Simple Tech Groups Logo" style="height: 40px;">
		</a>

		<nav>
			<div class="menu-toggle" onclick="toggleMenu()">☰</div>
			<ul>
				<li><a href="<?= base_url()?>" class="active">Home</a></li>
				<li><a href="#">Companies</a></li>
				<li><a href="#">Jobs</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>

		<div class="auth-buttons">
			<a href="<?= base_url('login')?>" class="btn btn-ghost">Log In</a>
			<a href="<?= base_url('register')?>" class="btn btn-primary">Sign Up</a>
		</div>
	</div>
</header>
