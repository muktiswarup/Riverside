<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.tonatheme.com/2023/bluebell/room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2026 05:39:31 GMT -->
<head>
<meta charset="utf-8">
<title>Riverside Hotel - Accommodation</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<!-- Responsive File -->
<link href="assets/css/responsive.css" rel="stylesheet">
<!-- Color File -->
<link href="assets/css/color.css" rel="stylesheet">

<!-- jQuery UI CSS for Date Picker -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<!-- Custom Modal Styles -->
<style>
    /* ===== CUSTOM MODAL OVERLAY ===== */
    .enquiry-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        z-index: 99999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        padding: 20px;
    }

    .enquiry-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    /* ===== MODAL CONTAINER ===== */
    .enquiry-modal {
        background: #fff;
        border-radius: 20px;
        width: 100%;
        max-width: 500px;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow:
            0 30px 80px rgba(0, 0, 0, 0.25),
            0 0 0 1px rgba(0, 0, 0, 0.04);
        transform: translateY(40px) scale(0.95);
        opacity: 0;
        transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        position: relative;
    }

    .enquiry-overlay.active .enquiry-modal {
        transform: translateY(0) scale(1);
        opacity: 1;
    }

    /* Custom scrollbar */
    .enquiry-modal::-webkit-scrollbar {
        width: 4px;
    }
    .enquiry-modal::-webkit-scrollbar-track {
        background: transparent;
    }
    .enquiry-modal::-webkit-scrollbar-thumb {
        background: rgba(218, 60, 60, 0.2);
        border-radius: 10px;
    }

    /* ===== MODAL HEADER ===== */
    .enquiry-modal-header {
        background: linear-gradient(135deg, var(--theme-color) 0%, #c62828 100%);
        padding: 34px 34px 30px;
        position: relative;
        overflow: hidden;
        border-radius: 20px 20px 0 0;
    }

    .enquiry-modal-header::before {
        content: '';
        position: absolute;
        top: -40%;
        right: -25%;
        width: 220px;
        height: 220px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.13) 0%, transparent 70%);
        border-radius: 50%;
        animation: headerFloat 6s ease-in-out infinite;
    }

    .enquiry-modal-header::after {
        content: '';
        position: absolute;
        bottom: -50%;
        left: -10%;
        width: 160px;
        height: 160px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%);
        border-radius: 50%;
        animation: headerFloat 8s ease-in-out infinite reverse;
    }

    @keyframes headerFloat {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(15px, 10px) scale(1.1); }
    }

    .enquiry-modal-header .header-content {
        position: relative;
        z-index: 2;
    }

    .enquiry-modal-header .header-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 255, 255, 0.18);
        border: none;
        color: #fff;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 6px 16px;
        border-radius: 50px;
        margin-bottom: 16px;
        font-family: 'Roboto', sans-serif;
        backdrop-filter: blur(4px);
    }

    .enquiry-modal-header .header-badge svg {
        width: 11px;
        height: 11px;
    }

    .enquiry-modal-header h2 {
        color: #ffffff;
        font-size: 28px;
        font-weight: 700;
        font-family: 'Playfair Display', serif;
        margin: 0 0 6px 0;
        line-height: 1.25em;
    }

    .enquiry-modal-header p {
        color: rgba(255, 255, 255, 0.75);
        font-size: 14px;
        margin: 0;
        font-family: GlacialIndifference-Regular, sans-serif;
        line-height: 1.5;
    }

    /* ===== CLOSE BUTTON ===== */
    .enquiry-close-btn {
        position: absolute;
        top: 18px;
        right: 18px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        border: none;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 10;
        font-size: 18px;
        line-height: 1;
        padding: 0;
        backdrop-filter: blur(4px);
    }

    .enquiry-close-btn:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: rotate(90deg) scale(1.1);
    }

    /* ===== MODAL BODY ===== */
    .enquiry-modal-body {
        padding: 30px 34px 36px;
        background: #fff;
        border-radius: 0 0 20px 20px;
    }

    /* ===== FORM STYLES ===== */
    .enquiry-form-group {
        margin-bottom: 18px;
        position: relative;
    }

    .enquiry-form-group label {
        display: block;
        font-weight: 600;
        color: #333;
        margin-bottom: 7px;
        font-size: 14px;
        letter-spacing: 0.2px;
        font-family: GlacialIndifference-Regular, sans-serif;
    }

    .enquiry-form-group label .label-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        background: linear-gradient(135deg, rgba(218, 60, 60, 0.1), rgba(218, 60, 60, 0.04));
        border-radius: 6px;
        margin-right: 8px;
        vertical-align: middle;
    }

    .enquiry-form-group label .label-icon svg {
        width: 11px;
        height: 11px;
        color: var(--theme-color);
    }

    .enquiry-form-input {
        width: 100%;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        padding: 13px 18px;
        font-size: 15px;
        font-family: GlacialIndifference-Regular, sans-serif;
        color: #222;
        background: #f9fafb;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        outline: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        box-sizing: border-box;
        line-height: 1.4;
    }

    .enquiry-form-input:focus {
        border-color: var(--theme-color);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(218, 60, 60, 0.08);
        transform: translateY(-1px);
    }

    .enquiry-form-input::placeholder {
        color: #adb5bd;
        font-weight: 400;
    }

    .enquiry-form-input[readonly] {
        background: linear-gradient(135deg, #fff5f5 0%, #ffe8e8 100%);
        border-color: rgba(218, 60, 60, 0.25);
        color: var(--theme-color);
        font-family: GlacialIndifference-Bold, sans-serif;
        font-weight: 700;
        cursor: default;
    }

    .enquiry-form-input.error {
        border-color: #ef4444;
        box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.08);
        animation: inputShake 0.4s ease;
    }

    @keyframes inputShake {
        0%, 100% { transform: translateX(0); }
        20%, 60% { transform: translateX(-5px); }
        40%, 80% { transform: translateX(5px); }
    }

    /* Row for dates */
    .enquiry-form-row {
        display: flex;
        gap: 14px;
    }

    .enquiry-form-row .enquiry-form-group {
        flex: 1;
    }

    /* ===== SUBMIT BUTTON ===== */
    .enquiry-submit-btn {
        width: 100%;
        padding: 16px 30px;
        margin-top: 10px;
        font-size: 14px;
        font-weight: 700;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 50px;
        border: none;
        cursor: pointer;
        background: linear-gradient(135deg, var(--theme-color) 0%, #c62828 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(218, 60, 60, 0.3);
    }

    .enquiry-submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .enquiry-submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(218, 60, 60, 0.45);
    }

    .enquiry-submit-btn:hover::before {
        left: 100%;
    }

    .enquiry-submit-btn:active {
        transform: translateY(-1px);
        box-shadow: 0 4px 15px rgba(218, 60, 60, 0.3);
    }

    .enquiry-submit-btn .btn-text {
        position: relative;
        z-index: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .enquiry-submit-btn .btn-text svg {
        width: 16px;
        height: 16px;
        transition: transform 0.3s ease;
    }

    .enquiry-submit-btn:hover .btn-text svg {
        transform: translateX(4px);
    }

    /* ===== SUCCESS STATE ===== */
    .enquiry-success-state {
        text-align: center;
        padding: 50px 30px;
        animation: successFadeIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    @keyframes successFadeIn {
        from { opacity: 0; transform: scale(0.8) translateY(20px); }
        to { opacity: 1; transform: scale(1) translateY(0); }
    }

    .enquiry-success-state .success-circle {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        background: linear-gradient(135deg, #22c55e, #16a34a);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
        box-shadow: 0 10px 40px rgba(34, 197, 94, 0.3);
        animation: successPulse 2s ease-in-out infinite;
    }

    @keyframes successPulse {
        0%, 100% { box-shadow: 0 10px 40px rgba(34, 197, 94, 0.3); transform: scale(1); }
        50% { box-shadow: 0 15px 50px rgba(34, 197, 94, 0.45); transform: scale(1.03); }
    }

    .enquiry-success-state .success-circle svg {
        width: 38px;
        height: 38px;
        color: #fff;
        stroke-dasharray: 50;
        stroke-dashoffset: 50;
        animation: checkDraw 0.6s ease 0.3s forwards;
    }

    @keyframes checkDraw {
        to { stroke-dashoffset: 0; }
    }

    .enquiry-success-state h3 {
        color: #222;
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        margin-bottom: 8px;
        line-height: 1.25em;
    }

    .enquiry-success-state p {
        color: #555;
        font-size: 16px;
        font-family: GlacialIndifference-Regular, sans-serif;
        margin-bottom: 28px;
        line-height: 28px;
    }

    .enquiry-success-close {
        display: inline-block;
        padding: 14px 40px;
        border-radius: 50px;
        border: none;
        background: linear-gradient(135deg, var(--theme-color) 0%, #c62828 100%);
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 4px 15px rgba(218, 60, 60, 0.3);
    }

    .enquiry-success-close:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(218, 60, 60, 0.45);
    }

    /* ===== DATE PICKER OVERRIDES ===== */
    .ui-datepicker {
        border-radius: 16px !important;
        border: none !important;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.18) !important;
        padding: 18px !important;
        font-family: GlacialIndifference-Regular, sans-serif !important;
        z-index: 100000 !important;
    }

    .ui-datepicker-header {
        background: linear-gradient(135deg, var(--theme-color), #c62828) !important;
        border-radius: 12px !important;
        color: #fff !important;
        padding: 14px !important;
        border: none !important;
    }

    .ui-datepicker-title {
        font-family: 'Playfair Display', serif !important;
        font-weight: 700 !important;
        font-size: 15px !important;
        color: #fff !important;
    }

    .ui-datepicker-calendar th {
        color: #888 !important;
        font-weight: 600 !important;
        font-size: 11px !important;
        text-transform: uppercase !important;
        padding: 8px 4px !important;
    }

    .ui-datepicker-calendar td {
        padding: 3px !important;
    }

    .ui-datepicker-calendar td a,
    .ui-datepicker-calendar td span {
        border-radius: 10px !important;
        transition: all 0.2s ease !important;
        font-weight: 500 !important;
        text-align: center !important;
    }

    .ui-datepicker-calendar td a:hover {
        background: rgba(218, 60, 60, 0.08) !important;
        color: var(--theme-color) !important;
    }

    .ui-datepicker-calendar td a.ui-state-active {
        background: linear-gradient(135deg, var(--theme-color), #c62828) !important;
        color: #fff !important;
        font-weight: 700 !important;
        box-shadow: 0 3px 12px rgba(218, 60, 60, 0.3) !important;
    }

    .ui-datepicker-prev, .ui-datepicker-next {
        cursor: pointer !important;
        border-radius: 8px !important;
        transition: all 0.3s ease !important;
        top: 8px !important;
    }

    .ui-datepicker-prev:hover, .ui-datepicker-next:hover {
        background: rgba(255, 255, 255, 0.2) !important;
    }

    .ui-datepicker-prev .ui-icon,
    .ui-datepicker-next .ui-icon {
        filter: brightness(0) invert(1) !important;
    }

    /* ===== CENTER BUTTON ===== */
    .link-btn {
        text-align: center;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 576px) {
        .enquiry-overlay {
            padding: 10px;
            align-items: flex-end;
        }

        .enquiry-modal {
            max-height: 93vh;
            border-radius: 24px 24px 0 0;
        }

        .enquiry-modal-header {
            padding: 26px 22px 22px;
            border-radius: 24px 24px 0 0;
        }

        .enquiry-modal-header h2 {
            font-size: 22px;
        }

        .enquiry-modal-body {
            padding: 22px 22px 28px;
        }

        .enquiry-form-row {
            flex-direction: column;
            gap: 0;
        }
    }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;800&amp;family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="dark_bg">

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-one">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a></div>
                    </div>
                    <!--Nav Box-->
                    <div class="nav-outer">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation">
                                <li class="dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Default</a></li>
                                        <li><a href="index-2.html">Boutique Hotel</a></li>
                                        <li><a href="index-3.html">Apartment</a></li>
                                        <li><a href="index-4.html">Beach Hotel</a></li>
                                        <li><a href="index-5.html">Jungle Safari Resort</a></li>
                                        <li><a href="index-6.html">Luxuary Resort</a></li>
                                        <li><a href="index-7.html">Mountain Chalet</a></li>
                                        <li><a href="index-8.html">Boutique Apartment</a></li>
                                        <li><a href="index-9.html">Wooden Chalet</a></li>
                                        <li><a href="index-10.html">Cabin in Revier</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About Us</a>
                                    <ul>
                                        <li><a href="about.html">About Us </a></li>
                                        <li><a href="history.html">Our History</a></li>
                                        <li><a href="terms-conditions.html">Terms and Conditions</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                    </ul>
                                </li>                                    
                                <li class="dropdown"><a href="#">Rooms</a>
                                    <ul>
                                        <li><a href="room-grid.html">Room Grid Style</a>
                                        </li>
                                        <li><a href="room-list.html">Room List Style</a></li>
                                        <li class="dropdown"><a href="#">Single Room</a>
                                            <ul>
                                                <li><a href="booking-reservation.html">Booking with reservation form</a>
                                                </li>
                                                <li><a href="booking-enquiry.html">Booking with enquiry form</a></li>
                                                <li><a href="booking-banner.html">Booking with banner link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                        <li><a href="blog-with-column.html">Blog With 2 Column</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="restaurant.html">Our Restaurant</a></li>
                                        <li><a href="spa-relax.html">Spa & Relax</a></li>
                                        <li><a href="activities.html">Activities</a></li>
                                        <li><a href="promotions.html">Promotions</a></li>
                                        <li class="dropdown"><a href="#">Gallery</a>
                                            <ul>
                                                <li><a href="gallery.html">Gallery Style 1</a></li>
                                                <li><a href="gallery-2.html">Gallery Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="error.html">404 Page</a></li>
                                        <li><a href="comming-soon.html">Comming Soon</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            </div>
                        </nav>
                        <div class="search-toggler"><i class="far fa-search"></i></div>
                    </div>
                    <div class="right-column">
                        <div class="navbar-right">
                            <div class="link-btn"><a href="booking-reservation.html" class="theme-btn btn-style-one">Reservation</a></div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"><img src="assets/images/logo-dark.png" alt=""></a></div>
                        </div>
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="assets/images/icons/icon-bar.png" alt=""></div>
    
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                            </nav>
                            <div class="search-toggler"><i class="far fa-search"></i></div>
                        </div>
                        <div class="right-column">
                            <div class="navbar-right">
                                <div class="link-btn"><a href="booking-reservation.html" class="theme-btn btn-style-one">Reservation</a></div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="icon far fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-light.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->

    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><i class="far fa-times"></i></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="https://html.tonatheme.com/2023/bluebell/index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Enquiry Modal (Custom - No Bootstrap dependency) -->
    <div class="enquiry-overlay" id="enquiryOverlay">
        <div class="enquiry-modal" id="enquiryModal">
            <!-- Header -->
            <div class="enquiry-modal-header">
                <button class="enquiry-close-btn" id="enquiryCloseBtn" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
                <div class="header-content">
                    <div class="header-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Riverside Hotel
                    </div>
                    <h2>Room Enquiry</h2>
                    <p>We'll get back to you within 24 hours</p>
                </div>
            </div>

            <!-- Body -->
            <div class="enquiry-modal-body" id="enquiryModalBody">
                <form id="enquiryForm" novalidate>
                    <div class="enquiry-form-group">
                        <label for="enquiryName">
                            <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                            Full Name
                        </label>
                        <input type="text" class="enquiry-form-input" id="enquiryName" placeholder="Enter your full name" required>
                    </div>
                    <div class="enquiry-form-group">
                        <label for="enquiryEmail">
                            <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                            Email Address
                        </label>
                        <input type="email" class="enquiry-form-input" id="enquiryEmail" placeholder="Enter your email address" required>
                    </div>
                    <div class="enquiry-form-group">
                        <label for="enquiryPhone">
                            <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
                            Phone Number
                        </label>
                        <input type="tel" class="enquiry-form-input" id="enquiryPhone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="enquiry-form-row">
                        <div class="enquiry-form-group">
                            <label for="enquiryCheckin">
                                <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></span>
                                Check-in
                            </label>
                            <input type="text" class="enquiry-form-input" id="enquiryCheckin" placeholder="Select date" readonly required>
                        </div>
                        <div class="enquiry-form-group">
                            <label for="enquiryCheckout">
                                <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg></span>
                                Check-out
                            </label>
                            <input type="text" class="enquiry-form-input" id="enquiryCheckout" placeholder="Select date" readonly required>
                        </div>
                    </div>
                    <div class="enquiry-form-group">
                        <label for="enquiryGuests">
                            <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></span>
                            Number of Guests
                        </label>
                        <input type="number" class="enquiry-form-input" id="enquiryGuests" min="1" max="10" placeholder="How many guests?" required>
                    </div>
                    <div class="enquiry-form-group">
                        <label for="enquiryRoomType">
                            <span class="label-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></span>
                            Selected Room
                        </label>
                        <input type="text" class="enquiry-form-input" id="enquiryRoomType" readonly>
                    </div>
                    <button type="submit" class="enquiry-submit-btn">
                        <span class="btn-text">
                            Submit Enquiry
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/main-slider/page-title-6.jpg);">
        <div class="auto-container">
            <div class="text-center">
                <h1>Rooms Grid</h1>
            </div>
        </div>
    </section>


     <!-- gallery section four -->
     <section class="room-grid-section pb-3 light-bg mx-60 border-shape-top border-shape-bottom">
        <div class="auto-container">
            <div class="title-box text-center">
                <div class="sub-title mb-4">Welcome to Riverside Hotel</div>
                <div class="text">Experience luxury and tranquility at Riverside Hotel, nestled in the beautiful landscapes of Odisha. Our accommodations blend traditional hospitality with modern comfort, offering you a memorable stay in the heart of nature.</div>
            </div>
                
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                
                <div class="items-container row">
                    <div class="col-lg-6 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/deluxe.jpeg" alt="">
                            <div class="text">₹1400 / Night</div>
                            </div>
                            <h3><a href="booking-reservation.html">Deluxe Room</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>2 beds</li>
                                    <li><i class="flaticon-bath-1"></i>1 Bathroom</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Free WiFi</li>
                                </ul>
                            </div>
                            <div class="text-two">A warm, light-filled retreat overlooking the beautiful landscapes of Odisha. Designed for guests who want comfort without excess — natural linens, handwoven textiles and a private sit-out where mornings begin slowly.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Deluxe Room" onclick="openEnquiryModal('Deluxe Room')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/executive ac.jpeg" alt="">
                            <div class="text">₹1200 / Night</div>
                            </div>
                            <h3><a href="booking-reservation.html">Executive AC</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>2 beds</li>
                                    <li><i class="flaticon-bath-1"></i>1 Bathroom</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Private Deck</li>
                                </ul>
                            </div>
                            <div class="text-two">An elevated suite with a separate living area and a wraparound deck that opens onto the valley. Furnished with curated local art and a soaking tub positioned for the sunset.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Executive AC" onclick="openEnquiryModal('Executive AC')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-3 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/executive.jpeg" alt="">
                            <div class="text">₹950 / Night</div>
                            </div>
                            <h3><a href="booking-reservation.html">Executive</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>2 bedrooms</li>
                                    <li><i class="flaticon-bath-1"></i>2 Bathrooms</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Living Area</li>
                                </ul>
                            </div>
                            <div class="text-two">Two bedrooms, a shared living pavilion and a private plunge pool set within its own walled garden — built for families and groups who want togetherness with room to spread out.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Executive" onclick="openEnquiryModal('Executive')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer section  -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="footer-gallery">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-1.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-2.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-3.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-4.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-5.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="image gallery-overlay">
                            <div class="inner-box">
                                <img src="assets/images/resource/footer-6.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="assets/images/resource/popup-image.jpg" class="lightbox-image link" data-fancybox="gallery"><span class="icon fas fa-eye"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-4">
                        <div class="widget contact-widget">
                            <div class="image"><a href="index.html"><img src="assets/images/footer-1.png" alt=""></a></div>
                            <table>
                                <tr>
                                    <td class="lebel">Tel :</td>                                    
                                    <td><a href="tel:+919876543210">+91 98765 43210</a></td>
                                </tr>
                                <tr>
                                    <td class="lebel">Email :</td>
                                    <td><a href="mailto:info@riversidehotel.com">info@riversidehotel.com</a></td>                                    
                                </tr>
                                <tr>
                                    <td class="lebel">Location :</td>
                                    <td>Riverside Hotel, Odisha <br> India</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column col-lg-3">
                        <div class="widget links-widget">
                            <h3 class="widget-title">Quick Links</h3>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="#">Accommodation</a></li>
                                    <li><a href="restaurant.html">Dine & Drink</a></li>
                                    <li><a href="spa-relax.html">Spa & Wellness</a></li>
                                </ul>                                        
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column col-lg-5">
                        <div class="widget newsletter-widget">    
                            <h3 class="widget-title">Sign up for our newsletter to receive <br> special offers, news and events.</h3>                    
                            <div class="widget-content">
                                <div class="newsletter-form">
                                    <form class="ajax-sub-form" method="post">
                                        <div class="form-group">
                                            <input type="email" placeholder="Enter your email address" id="subscription-email">
                                            <button type="submit" class="theme-btn"><i class="fas fa-arrow-right"></i> </button>
                                            <label class="subscription-label" for="subscription-email"></label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="auto-container">
        <div class="boder-bottom-four"></div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="copyright text-center">
                        <div class="text">© Copyright  Riverside Hotel. All right reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up"></span></div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/TweenMax.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/script.js"></script>

<script>
    // ===== ENQUIRY MODAL SYSTEM =====
    (function() {
        // Cache DOM elements
        var overlay = document.getElementById('enquiryOverlay');
        var modal = document.getElementById('enquiryModal');
        var closeBtn = document.getElementById('enquiryCloseBtn');
        var modalBody = document.getElementById('enquiryModalBody');
        var form = document.getElementById('enquiryForm');
        var roomTypeInput = document.getElementById('enquiryRoomType');

        // Store original form HTML for reset
        var originalFormHTML = modalBody.innerHTML;

        // ---- OPEN MODAL ----
        window.openEnquiryModal = function(roomType) {
            if (roomTypeInput) {
                roomTypeInput.value = roomType;
            }
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        };

        // ---- CLOSE MODAL ----
        function closeModal() {
            overlay.classList.remove('active');
            document.body.style.overflow = '';
            // Reset form after close animation
            setTimeout(function() {
                modalBody.innerHTML = originalFormHTML;
                form = document.getElementById('enquiryForm');
                roomTypeInput = document.getElementById('enquiryRoomType');
                bindFormSubmit();
                initDatePickers();
            }, 400);
        }

        // Close button
        closeBtn.addEventListener('click', closeModal);

        // Click overlay backdrop to close
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeModal();
            }
        });

        // ESC key to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && overlay.classList.contains('active')) {
                closeModal();
            }
        });

        // Prevent modal clicks from closing
        modal.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // ---- ENQUIRE BUTTONS ----
        var enquireBtns = document.querySelectorAll('.enquire-btn');
        enquireBtns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                var roomType = this.getAttribute('data-room-type');
                window.openEnquiryModal(roomType);
            });
        });

        // ---- FORM SUBMISSION ----
        function bindFormSubmit() {
            var currentForm = document.getElementById('enquiryForm');
            if (!currentForm) return;

            currentForm.addEventListener('submit', function(e) {
                e.preventDefault();

                var name = document.getElementById('enquiryName').value.trim();
                var email = document.getElementById('enquiryEmail').value.trim();
                var phone = document.getElementById('enquiryPhone').value.trim();
                var checkin = document.getElementById('enquiryCheckin').value.trim();
                var checkout = document.getElementById('enquiryCheckout').value.trim();
                var guests = document.getElementById('enquiryGuests').value;

                // Highlight empty fields
                var hasError = false;
                var fields = [
                    { id: 'enquiryName', val: name },
                    { id: 'enquiryEmail', val: email },
                    { id: 'enquiryPhone', val: phone },
                    { id: 'enquiryCheckin', val: checkin },
                    { id: 'enquiryCheckout', val: checkout },
                    { id: 'enquiryGuests', val: guests }
                ];

                fields.forEach(function(field) {
                    var el = document.getElementById(field.id);
                    if (!field.val) {
                        el.classList.add('error');
                        hasError = true;
                        setTimeout(function() { el.classList.remove('error'); }, 1500);
                    }
                });

                if (hasError) return;

                // Email validation
                var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email)) {
                    var emailEl = document.getElementById('enquiryEmail');
                    emailEl.classList.add('error');
                    setTimeout(function() { emailEl.classList.remove('error'); }, 2000);
                    return;
                }

                // Show success
                modalBody.innerHTML = '<div class="enquiry-success-state">' +
                    '<div class="success-circle">' +
                        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>' +
                    '</div>' +
                    '<h3>Enquiry Submitted!</h3>' +
                    '<p>Thank you for your interest in our ' + (roomTypeInput ? roomTypeInput.value : 'room') + '.<br>Our team will contact you within 24 hours.</p>' +
                    '<button class="enquiry-success-close" id="successCloseBtn">Close</button>' +
                '</div>';

                document.getElementById('successCloseBtn').addEventListener('click', closeModal);
            });
        }

        // ---- DATE PICKERS ----
        function initDatePickers() {
            if (typeof $ === 'undefined' || !$.fn.datepicker) return;

            $('#enquiryCheckin').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                changeMonth: true,
                changeYear: true,
                beforeShow: function(input, inst) {
                    setTimeout(function() {
                        inst.dpDiv.css('z-index', 100001);
                    }, 0);
                }
            });

            $('#enquiryCheckout').datepicker({
                dateFormat: 'dd/mm/yy',
                minDate: 0,
                changeMonth: true,
                changeYear: true,
                beforeShow: function(input, inst) {
                    setTimeout(function() {
                        inst.dpDiv.css('z-index', 100001);
                    }, 0);
                }
            });

            $('#enquiryCheckin').on('change', function() {
                var checkinDate = $(this).datepicker('getDate');
                if (checkinDate) {
                    checkinDate.setDate(checkinDate.getDate() + 1);
                    $('#enquiryCheckout').datepicker('option', 'minDate', checkinDate);
                }
            });
        }

        // Initialize
        bindFormSubmit();
        initDatePickers();
    })();
</script>


</body>

<!-- Mirrored from html.tonatheme.com/2023/bluebell/room-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2026 05:39:31 GMT -->
</html>

