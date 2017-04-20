

<footer>
    <section class="footer-content">
        <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <?php thinktrees_the_custom_logo() ?>
             </div>
             <div class="col-md-4">
                 <h5>SUPPORT US</h5>
                 <?php
                     wp_nav_menu( array(
                         'theme_location'    => 'footer-menu'
                       )
                     );
                 ?>
             </div>
             <div class="col-md-4">
                 <h5>CONTACT US</h5>
                 <ul>
                     <li>900 Corydon Avenue Winnipeg, Manitoba R3M 0Y4</li>
                     <li>Telephone: (204) 453-3182</li>
                     <li>Fax: (204) 477-5765</li>
                 </ul>
             </div>
         </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-8"><p>Copyright © 2017 Manitoba Forestry Association. All rights reserved.</p></div>
                    <div class="col-md-4 terms-privacy">
                        <ul class="pull-right">
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</footer>




<?php wp_footer(); ?>
</body>
</html>
