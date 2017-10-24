<div class="footer-container page">
    <div class="footer-content nav-footer-content">
        <div class="footer-contact-section footer-section">
            <div class="footer-section-title">Contact Us:</div>
            <?php perch_content_custom('Contact Details', array(
                                    'page'=>'/contact.php',
                                    'template' => '_footer_contact_details.html',
                        )); 
                     ?>
        </div>
        <div class="footer-socials-section footer-section">
            <div class="footer-section-title">Follow Us:</div>
            <div class="footer-social-icons-container">
                <div class="footer-social-item">
                    <img class="footer-social-item-background" src="/assets/img/social-background.svg">
                    <img class="footer-social-icon" src="/assets/img/facebook-icon.svg">
                </div>
                
                <div class="footer-social-item">
                    <img class="footer-social-item-background" src="/assets/img/social-background.svg">
                    <img class="footer-social-icon" src="/assets/img/linkedin-icon.svg">
                </div>
                
<!--
                <div class="footer-social-item">
                    <img class="footer-social-item-background" src="assets/img/social-background.svg">
                     <img class="footer-social-icon" src="assets/img/youtube-icon.svg">
                </div>
-->
            </div>
        </div>
        <div class="footer-copyright-section footer-section">
            <div class="footer-section-item">© 2017 ThinkBetter.ie</div>
        </div>
    </div>
</div>