

<footer>
    <section class="footer-content">
        <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <?php thinktrees_the_custom_logo() ?>
             </div>
             <div class="col-md-4">
                 <?php  if (is_active_sidebar('footer1')) {
                          dynamic_sidebar('footer1');
                        } ?>
             </div>
             <div class="col-md-4">
                 <?php  if (is_active_sidebar('footer2')) {
                          dynamic_sidebar('footer2');
                  } ?>
             </div>
         </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-md-8"><p>Copyright © 2017 Manitoba Forestry Association. All rights reserved.</p></div>
                    <div class="col-md-4 terms-conditions">
                        <ul>
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
