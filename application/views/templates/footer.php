<!-- FOOTER -->
<?php if ($title == "Home") : ?>
    <footer id="footer" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-8">
                    <div class="footer-info">
                        <div class="section-title">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Kantor Pusat</h2>
                        </div>
                        <address class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>Jl. Matraman Raya No.25, RT.2/RW.1,
                                Palmeriam, Kec. Matraman, Kota
                                Jakarta Timur, Daerah Khusus
                                Ibukota Jakarta 13140</p>
                        </address>
                    </div>
                </div>

                <div class="col-md-2 col-sm-4">
                    <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                    </ul>

                    <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
                        <p><br>Copyright &copy; 2018 <br>Perusahan Umum (Perum) DAMRI
                    </div>
                </div>

            </div>
        </div>
    </footer>
<?php endif; ?>

<?php if ($title == "Edit" || $title == "Dashboard") : ?>
    <footer class="footer">Damri allright reserved 2019</footer>
<?php endif; ?>

<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/smoothscroll.js"></script>
<script src="<?php echo base_url() ?>assets/js/custom.js"></script>

</body>

</html>