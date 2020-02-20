
<!-- footer -->
<div class="footer-agile-info">
    <div class="container">
        <div class="col-md-4 w3layouts-footer">
            <h3>Контакт Информације</h3>
            <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>3/1 Цара Лазара, 11500 Обреновац, Град Београд, Србија </p>
            <p><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">E: info [at] domain.com</a> </p>
            <p><span><i class="fa fa-mobile" aria-hidden="true"></i></span>Бесплатна тел.линија : 0800-0000-87</p>
            <p><span><i class="fa fa-globe" aria-hidden="true"></i></span><a href="#">vodovod.obrenovac@vikobrenovac.com</a></p>
        </div>
        <div class="col-md-4 wthree-footer">
            <h2>Водовод и Канализација</h2>
                    <p>Корисник може да у комуналном предузећу поднесе рекламацију на обрачун за испоручену воду у писаној форми на месту за пријем реклaмација (у дирекцији ЈКП “Водовод и канализација” Обреновац, Цара Лазара 3/1, Обреновац), телефонски или путем е-mail <strong>( reklamacijevik@vikobrenovac.com ) </strong>најкасније у року од осам дана од дана када му је достављен обрачун, рачун.</p>

        </div>
        <div class="col-md-4 w3-agile">
            <h3>Овако можете до нас.</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11352.003594355208!2d20.2083333!3d44.6583333!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb72183828bdf5a0f!2sVODOVOD+I+KANALIZACIJA!5e0!3m2!1ssr!2srs!4v1507042678545" width="350" height="200" frameborder="0" style="border-style: double; border-width: 10px 10px 10px 10px;" allowfullscreen></iframe>
            <!-- <p>Унесите своју маил адресу</p>
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="Send">
            </form> -->
        </div>
    </div>
</div>
<!-- footer -->
<!-- copyright -->
<div class="copyright">
    <div class="container">
      <!--  <div class="w3agile-list">
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>/about">About</a></li>
                <li><a href="<?php echo base_url(); ?>/lifestyle">Life Style</a></li>
                <li><a href="<?php echo base_url(); ?>/photography">Photography</a></li>
                <li><a href="<?php echo base_url(); ?>/fashion">Fashion</a></li>
                <li><a href="<?php echo base_url(); ?>/icons">Codes</a></li>
                <li><a href="<?php echo base_url(); ?>/features">Features</a></li>
                <li><a href="<?php echo base_url(); ?>/contact">Contact</a></li>
            </ul>
        </div> -->
        <div class="agileinfo">
            <p>© 2017 Vodovod i Kanalizacija . All Rights Reserved to VIK Obrenovac . </p>
        </div>
    </div>
</div>
<!-- //copyright -->
<!-- here stars scrolling icon -->

<!-- //here ends scrolling icon -->
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':6000, 'animationSpeed': 4000,'showNextPrev':true,'showPlayButton':false,'autoSlide':true,'animationType':'fading'});

            jQuery('#responsive').change(function(){
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>


    <!-- Mesto za JQuery slajder dodato 19.09.2019-->
 
 
    <!-- //main slider-banner -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},5000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- scriptfor smooth drop down-nav -->
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //script for smooth drop down-nav -->

       <script>
   $(document).ready(function () {
$('#myCarousel').carousel({
interval: 9000
})
$('.fdi-Carousel .item').each(function () {
var next = $(this).next();
if (!next.length) {
    next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

if (next.next().length > 0) {
    next.next().children(':first-child').clone().appendTo($(this));
}
else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
}
});
});
   </script>

<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>

    
    
</body>
</html>
