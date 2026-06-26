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