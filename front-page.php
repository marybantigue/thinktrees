<?php
get_header(); ?>
<div class="banner" style="background-image: url( <?php header_image(); ?>)">
  <div class="container">
    <div class="banner-content">
        <?php  if (is_active_sidebar('banner')) {
                 dynamic_sidebar('banner');
         } ?>
    </div>
  </div>
</div>
<section class="home-content clearfix">

        <div class="left-side news-wrap">

            <?php  if (is_active_sidebar('greenarea')) {
                     dynamic_sidebar('greenarea');
             } ?>
        </div>
        <div class="right-side">

        </div>
</section>
<section class="thinking-about-trees text-center">
    <div class="container">
        <?php  if (is_active_sidebar('middlewide')) {
                 dynamic_sidebar('middlewide');
         } ?>
        <div class="row">
            <div class="col-md-3">
                <?php  if (is_active_sidebar('middlecol1')) {
                         dynamic_sidebar('middlecol1');
                 } ?>
            </div>
            <div class="col-md-3">
                <?php  if (is_active_sidebar('middlecol2')) {
                       dynamic_sidebar('middlecol2');
                } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('middlecol3')) {
                       dynamic_sidebar('middlecol3');
               } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('middlecol4')) {
                       dynamic_sidebar('middlecol4');
               } ?>
            </div>
        </div>

    </div>

</section>
<section class="make-donation-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
              <?php  if (is_active_sidebar('orange1')) {
                       dynamic_sidebar('orange1');
               } ?>
            </div>
            <div class="col-md-3">
              <?php  if (is_active_sidebar('orange2')) {
                       dynamic_sidebar('orange2');
               } ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
