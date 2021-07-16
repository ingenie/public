<!-- Site footer markup goes here -->
<footer class="bg-ig-blue-500 py-8">
    <div class="lg:container lg:mx-auto">

        <div
            class="link-items flex flex-col sm:flex-row text-center sm:text-left flex-wrap items-center sm:items-start justify-between p-4 text-white">


            <div class="sm:flex-1/4 p-0 text-sm sm:p-1">
                <h4 class="heading-4 text-white mb-3 pl-0">Company</h4>
                <ul>
                    <li><a href="/about">About ingenie</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="//ingeniebusiness.com" target="_blank" rel="noopener noreferrer">ingenieBusiness</a>
                    </li>
                    <!-- <li><a href="/press-centre">Press</a></li> -->
                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1">
                <h4 class="heading-4 text-white mb-3 pl-0">Help &amp; Support</h4>
                <ul>
                    <!-- <li><a href="/myaccount">My Account</a></li> -->
                    <li><a href="/contact-us">Contact us</a></li>
                    <!-- <li><a href="/webchat">Web Chat</a></li>
                    <li><a href="/make-a-claim">Make a claim</a></li> -->
                    <li><a href="/sitemap">Sitemap</a></li>

                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1">
                <h4 class="heading-4 text-white mb-3 pl-0">Legal</h4>
                <ul>
                    <li><a class="footer__link" href="/privacy-policy">Privacy &amp; cookie policy</a></li>
                    <li><a class="footer__link" href="/terms-and-conditions">Terms &amp; conditions</a>
                    </li>
                </ul>
            </div>

            <div class="sm:flex-1/4 p-3 sm:p-1">
                <?php get_template_part('templates/partials/thirdparty/trustpilot', 'footer-mini'); ?>
            </div>

        </div>

        <?php get_template_part('templates/partials/copyright'); ?>

        <?php get_template_part('templates/partials/social/footer', 'icons'); ?>
    </div>

    <!-- MODAL OVERLAY -->
    <div id="modal-overlay"
        class="cursor-pointer close-modal z-75 fixed hidden top-0 left-0 w-screen h-screen flex items-center justify-center bg-ig-blue-700 bg-opacity-50 ">
    </div>

</footer>

<!-- TODO: TrustBox script TEMP until GTM implemented -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->

<?php get_template_part('templates/partials/document-close');
