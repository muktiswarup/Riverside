<?php include 'header.php'; ?>

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
    <?php include 'footer.php'; ?>