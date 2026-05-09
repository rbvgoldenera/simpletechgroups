<!-- FORGOT PASSWORD PAGE -->
<section class="login-section">
	<div class="container login-container">

		<!-- Left -->
		<div class="login-left">
			<div class="login-brand">
				<h1>Reset Password 🔑</h1>

				<p>
					Enter your registered email address and
					we’ll send you a password reset link.
				</p>

				<div class="login-features">

					<div class="feature-item">
						<span>📧</span>
						<p>Password Reset via Email</p>
					</div>

					<div class="feature-item">
						<span>⚡</span>
						<p>Quick & Secure Recovery</p>
					</div>

					<div class="feature-item">
						<span>🔒</span>
						<p>Protected Account Access</p>
					</div>

				</div>
			</div>
		</div>

		<!-- Right -->
		<div class="login-card">

			<div class="login-header">
				<h2>Forgot Password</h2>
				<p>Enter your email to continue</p>
			</div>

			<form action="<?= base_url('forgot-password/send') ?>" method="POST">

				<!-- Email -->
				<div class="form-group">
					<label>Email Address</label>

					<div class="input-box">

						<svg class="icon" viewBox="0 0 24 24">
							<path d="M4 4h16v16H4z"></path>
							<path d="M22 6l-10 7L2 6"></path>
						</svg>

						<input 
							type="email"
							name="email"
							placeholder="Enter your registered email"
							required
						>

					</div>
				</div>

				<!-- Button -->
				<button type="submit" class="btn btn-primary login-btn">
					Send Reset Link
				</button>

				<!-- Back -->
				<div class="register-link">
					Remember your password?
					<a href="<?= base_url('login') ?>">Back to Login</a>
				</div>

			</form>

		</div>

	</div>
</section>