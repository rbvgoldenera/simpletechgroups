<!-- =========================
 VERIFY EMAIL SECTION
========================= -->

<section class="verify-section">
    <div class="verify-container">
        <div class="verify-card">
            <!-- ICON -->
            <div class="verify-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M4 6h16v12H4z"></path>
                    <path d="M4 7l8 6 8-6"></path>
                </svg>
            </div>

            <!-- CONTENT -->
            <div class="verify-content">
                <span class="mini-badge"> 📩 Email Verification </span>

                <h1>
                    Verify Your
                    <span class="text-gold">Email Address</span>
                </h1>

                <p>
                    We have sent a verification link to
                    <strong>sharanya@simpletechgroups.com</strong>
                </p>

                <p class="sub-text">
                    Please check your inbox and click the verification link to activate your account.
                </p>
            </div>

            <!-- ACTIONS -->
            <div class="verify-actions">
                <!-- OPEN GMAIL -->
                <a href="https://mail.google.com/" target="_blank" class="btn verify-btn"> Open Gmail </a>

                <!-- RESEND EMAIL -->
                <a href="<?= base_url('resend-verification-email') ?>" class="btn resend-btn"> Resend Email </a>
            </div>

            <!-- FOOTER -->
            <div class="verify-footer">
                Didn't receive the email?

                <a href="https://support.google.com/mail/answer/6596?hl=en" target="_blank"> Check Spam </a>
            </div>
        </div>
    </div>
</section>
