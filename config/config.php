<?php
$host = $_SERVER['HTTP_HOST']; // localhost or domain.com
$base_url = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://simpletechgroups.com/" : "http://$host/simpletechgroups/";

// Mailer Basic Details
$mailer_from_name     = "Simple Tech Groups";
$mailer_from_address  = "simpletechgroupsnotifications@gmail.com";
$mailer_to_address    = "rbvgoldenera@gmail.com";

// SMTP Authentication
$mailer_user_name     = "simpletechgroupsnotifications@gmail.com";
$mailer_user_pass     = "rfnf xbsn bnlx inzf";

// SMTP Server Settings
$mailer_host_name     = "smtp.gmail.com";
$mailer_protocol      = "tls"; // tls or ssl
$mailer_port          = 587;
$mailer_smtp_auth     = true;