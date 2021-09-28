<!-- Copyright -->
<div class="w3lscopyrightaits">
    <div class="col-md-8 w3lscopyrightaitsgrid w3lscopyrightaitsgrid1">
        <p>© 2017 Kandari Society. All Rights Reserved</p>
    </div>
    <div class="col-md-4 w3lscopyrightaitsgrid w3lscopyrightaitsgrid2">
        <div class="agilesocialwthree">
            <ul class="social-icons">
                <li><a href="#" class="facebook w3ls" title="Go to Our Facebook Page"><i class="fa w3ls fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="twitter w3l" title="Go to Our Twitter Account"><i class="fa w3l fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="googleplus w3" title="Go to Our Google Plus Account"><i class="fa w3 fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#" class="instagram wthree" title="Go to Our Instagram Account"><i class="fa wthree fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#" class="youtube w3layouts" title="Go to Our Youtube Channel"><i class="fa w3layouts fa-youtube-square" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- Custom-JavaScript-File-Links -->
<!-- Default-JavaScript -->
<script src="js/jquery-2.2.3.js"></script>
<script src="js/modernizr.custom.js"></script>
<!-- Header-Slider-JavaScript-Files -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/fluid_dg.min.js'></script>
<script>jQuery(document).ready(function () {
        jQuery(function () {
            jQuery('#fluid_dg_wrap_4').fluid_dg({
                height: 'auto',
                loader: 'bar',
                pagination: false,
                thumbnails: true,
                hover: false,
                opacityOnGrid: false,
                imagePath: '',
                time: 4000,
                transPeriod: 2000,
            });
        });
    })
</script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
    });
</script>
<!-- Model-Slider-JavaScript-Files -->
<script src="js/jquery.film_roll.js"></script>
<script>
    (function () {
        jQuery(function () {
            this.film_rolls || (this.film_rolls = []);
            this.film_rolls['film_roll_1'] = new FilmRoll({
                container: '#film_roll_1',
                height: 560
            });
            return true;
        });
    }).call(this);
</script>
<!-- Bootstrap-JavaScript --> 
<script src="js/bootstrap.js"></script>
</body>
</html>