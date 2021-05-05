<!-- Site footer markup goes here -->
<footer class="bg-ig-blue-500 py-8">
    <div class="lg:container lg:mx-auto">
        <div class="flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-4 text-white">

            <div class="sm:flex-1/4 p-3 sm:p-1">
                <?php get_template_part( 'templates/partials/thirdparty/trustpilot', 'footer' ); ?>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a href="/about">About ingenie</a></li>
                    <li><a href="/contact-us">Contact us</a></li>
                    <li><a href="/careers">Careers</a></li>
                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a href="//ingeniebusiness.com" target="_blank" rel="noopener noreferrer">ingenieBusiness</a>
                    </li>
                    <li><a href="/sitemap">Sitemap</a></li>
                    <li><a href="/press-centre">Press</a></li>
                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a class="footer__link" href="/privacy-policy">Privacy &amp; cookie policy</a></li>
                    <li><a class="footer__link" href="/terms-and-conditions">Terms &amp; conditions</a>
                    </li>
                </ul>
            </div>

        </div>

        <?php get_template_part( 'templates/partials/copyright' ); ?>

        <?php get_template_part( 'templates/partials/social/footer', 'icons' ); ?>
    </div>

</footer>

<!-- TODO: TrustBox script TEMP until GTM implemented -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->

<?php get_template_part( 'templates/partials/document-close' );
