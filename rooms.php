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
                <h1>Rooms</h1>
            </div>
        </div>
    </section>


     <!-- gallery section four -->
     <section class="room-grid-section pb-3 light-bg mx-60 border-shape-top border-shape-bottom">
        <div class="auto-container">
            <div class="title-box text-center">
                <div class="sub-title mb-4">Welcome to Riverside Hotel</div>
                <div class="text">Experience luxury and tranquility at Riverside Resort, your gateway to Bhitarkanika National Park. Our accommodations blend traditional hospitality with modern comfort, offering you a memorable stay amidst pristine mangrove forests and the serene riverside of Bhitarkanika.</div>
            </div>
                
            <!--Sortable Galery-->
            <div class="sortable-masonry">
                
                <div class="items-container row">
                    <div class="col-lg-4 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/deluxe.jpeg" alt="">
                            <div class="text">₹1400 / Night</div>
                            </div>
                            <h3><a href="javascript:void(0)" onclick="openEnquiryModal('Deluxe Room')">Deluxe Room</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>2 beds</li>
                                    <li><i class="flaticon-bath-1"></i>1 Bathroom</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Free WiFi</li>
                                </ul>
                            </div>
                            <div class="text-two">A warm, light-filled retreat overlooking the pristine mangrove forests of Bhitarkanika. Perfect for nature enthusiasts exploring the national park — enjoy riverside views, local craftsmanship and a private sit-out where you can spot exotic wildlife at dawn.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Deluxe Room" onclick="openEnquiryModal('Deluxe Room')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/executive ac.jpeg" alt="">
                            <div class="text">₹1200 / Night</div>
                            </div>
                            <h3><a href="javascript:void(0)" onclick="openEnquiryModal('Executive AC')">Executive AC Cottage</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>2 beds</li>
                                    <li><i class="flaticon-bath-1"></i>1 Bathroom</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Free WiFi</li>
                                </ul>
                            </div>
                            <div class="text-two">An elevated suite with a separate living area and a wraparound deck overlooking the Bhitarkanika river. Furnished with local Odia art and designed for wildlife viewing — perfect for spotting saltwater crocodiles and migratory birds from your private deck.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Executive AC" onclick="openEnquiryModal('Executive AC')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-4 room-block-two masonry-item all cat-1">
                        <div class="inner-box">
                            <div class="image"><img src="assets/images/resource/executive.jpeg" alt="">
                            <div class="text">₹950 / Night</div>
                            </div>
                            <h3><a href="javascript:void(0)" onclick="openEnquiryModal('Executive')">Executive</a> </h3>
                            <div class="icon-list">
                                <ul>
                                    <li><i class="flaticon-bed"></i>1 Bed</li>
                                    <li><i class="flaticon-bath-1"></i>1 Bathroom</li>
                                    <li><i class="flaticon-blueprint"></i>Smart TV</li>
                                    <li><i class="flaticon-blueprint"></i>Living Area</li>
                                </ul>
                            </div>
                            <div class="text-two">Ideal for families and groups exploring Bhitarkanika together. Features comfortable bedrooms, a shared living pavilion and easy access to river safaris — your perfect base for discovering the mangrove wilderness and crocodile sanctuary.</div>
                            <div class="link-btn"><a href="javascript:void(0)" class="theme-btn btn-style-one btn-md enquire-btn" data-room-type="Executive" onclick="openEnquiryModal('Executive')"><span>Enquire Now</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>