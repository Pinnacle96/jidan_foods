<?php
include('includes/header.php');
//session_start();
error_reporting(0);
?>


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>Have you any question?</h2>
                    <p></p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form method="POST" action="mail.php" id="fruitkha-contact" onSubmit="return valid_datas(this);">
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name" required>
                            <input type="email" placeholder="Email" name="email" id="email" required>
                        </p>
                        <p>
                            <input type="tel" placeholder="Phone" name="phone" id="phone">
                            <input type="text" placeholder="Subject" name="subject" id="subject">
                        </p>
                        <p>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
                                required></textarea>
                        </p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
                <?php
					if (isset($_GET['status'])) {
						if ($_GET['status'] === 'success') {
							echo '<div class="success">Your message was sent successfully!</div>';
						} elseif ($_GET['status'] === 'error') {
							$reason = isset($_GET['reason']) ? htmlspecialchars($_GET['reason']) : 'An unknown error occurred.';
							echo '<div class="error">Failed to send your message. Reason: ' . $reason . '</div>';
						}
					}
				?>

            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Head Office Address</h4>
                        <p>Jilfoods multipurpose industrial behind albishri primary health care, off bidda road, Minna
                            Niger state </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Office Hours</h4>
                        <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: +2347067389403 <br> Email: support@jidanfoods.com.ng</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
            </div>
        </div>
    </div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.472015469269!2d6.527429074788651!3d9.64064809044719!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104c712aa050a767%3A0x77c6d955879bf6d8!2sWHO%20Office%20Minna!5e0!3m2!1sen!2sng!4v1735011453915!5m2!1sen!2sng"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
        class="embed-responsive-item"></iframe>
</div>
<!-- end google map section -->


<?php include('includes/footer.php'); ?>