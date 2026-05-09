<!-- Login Section -->
<section class="login-section">
	<div class="container login-container">

		<!-- Left Side -->
		<div class="login-left">
			<div class="login-brand">
				<h1>Welcome Back 👋</h1>
				<p>
					Login to access jobs, companies, applications,
					and continue building your future with
					<span class="text-gold">Simple Tech Groups</span>.
				</p>

				<div class="login-features">
					<div class="feature-item">
						<span>💼</span>
						<p>Access 2k+ Live Jobs</p>
					</div>

					<div class="feature-item">
						<span>🚀</span>
						<p>Apply Faster & Track Applications</p>
					</div>

					<div class="feature-item">
						<span>🔒</span>
						<p>Secure Candidate Dashboard</p>
					</div>
				</div>
			</div>
		</div>

		<!-- Right Side -->
		<div class="login-card">

			<div class="login-header">
				<h2>Login Account</h2>
				<p>Enter your details to continue</p>
			</div>

			<form action="#" method="POST">

				<!-- Email -->
				<div class="form-group">
					<label>Email Address</label>
					<div class="input-box">
						<svg class="icon" viewBox="0 0 24 24">
							<path d="M16 12H8m8 0L12 16m4-4L12 8"></path>
						</svg>
						<input type="email" placeholder="Enter your email">
					</div>
				</div>

				<!-- Password -->
				<div class="form-group">
					<label>Password</label>
					<div class="input-box">
						<svg class="icon" viewBox="0 0 24 24">
							<path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2h-1V9a5 5 0 00-10 0v2H6a2 2 0 00-2 2v6a2 2 0 002 2z"></path>
						</svg>
						<input type="password" placeholder="Enter password">
					</div>
				</div>

				<!-- Options -->
				<div class="login-options">
					<label class="remember-box">
						<input type="checkbox">
						Remember Me
					</label>

					<a href="<?= base_url('forgot-password') ?>" class="forgot-link">Forgot Password?</a>
				</div>

				<!-- Button -->
				<button type="submit" class="btn btn-primary login-btn">
					Login Now
				</button>

				<!-- Divider -->
				<div class="divider-text">
					<span>OR</span>
				</div>

				<!-- Social Login -->
				<div class="social-login">
					<button type="button" class="social-btn">
						Google
					</button>

					<button type="button" class="social-btn">
						LinkedIn
					</button>
				</div>

				<!-- Register -->
				<div class="register-link">
					Don’t have an account?
					<a href="<?= base_url('login')?>">Create Account</a>
				</div>

			</form>

		</div>

	</div>
</section>
