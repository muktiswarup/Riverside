<?php require_once 'room-types.php'; ?>
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
                            Room Type
                        </label>
                        <select class="enquiry-form-input enquiry-form-select" id="enquiryRoomType" required>
                            <option value="" disabled selected>Select a room type</option>
                            <?php foreach ($room_types as $room_type): ?>
                            <option value="<?php echo htmlspecialchars($room_type); ?>"><?php echo htmlspecialchars($room_type); ?></option>
                            <?php endforeach; ?>
                        </select>
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
