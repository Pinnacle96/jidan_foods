<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>We're a food processing and preservation company that is into the production of complementary and
                        supplementary foods for babies, children, teenagers, youth and older people. With WEANIMIX as
                        our major product, other products are NUTRIMIX, RUTF, Rice and lots more
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>Head Office: jilfoods multipurpose industrial behind albishri primary health care, off bidda
                            road, Minna Niger state</li>
                        <li>Branch Office: jilfoods multipurpose industrial behind albishri primary health care, off
                            bidda road, Minna Niger state</li>
                        <li>support@jidanfoods.com.ng</li>
                        <li>+2347067389403</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action="index.php">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2024 - <a href="https://jidanfoods.com.ng/">Jidan Foods</a>, All Rights
                    Reserved.<br>
                    Developed By - <a href="https://wa.me/+2348150829549/" target="_blank">Pinnacle Tech Hub</a>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/job.wilson.77" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li> -->
                        <li><a href="https://www.instagram.com/jidanfoods?igsh=ZGUzMzM3NWJiOQ==" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <!-- <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->

<!-- jquery -->
<script src="assets/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="assets/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="assets/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="assets/js/sticker.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
<script>
function valid_datas(form) {
    if (!form.name.value.trim() || !form.email.value.trim() || !form.message.value.trim()) {
        alert('Please fill in all required fields.');
        return false;
    }
    const emailPattern = /^[^@]+@[^@]+\.[a-z]{2,}$/i;
    if (!emailPattern.test(form.email.value)) {
        alert('Please enter a valid email address.');
        return false;
    }
    return true;
}
</script>

</body>
</php>