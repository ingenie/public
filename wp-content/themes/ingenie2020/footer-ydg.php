<footer class="md:mb-4 bg-ydg-ingenie-blog-900 py-8">
    <div class="lg:container lg:mx-auto">
        <div class="flex flex-col sm:flex-row flex-wrap items-center sm:items-start justify-between p-4 text-white">

            <div class="sm:flex-1/4 p-3 sm:p-1">
                <?php get_template_part( 'templates/partials/thirdparty/trustpilot', 'footer' ); ?>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a href="//ingenie.com/about">About ingenie</a></li>
                    <li><a href="//ingenie.com/contact-us">Contact us</a></li>
                    <li><a href="//ingenie.com/careers">Careers</a></li>
                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a href="//ingeniebusiness.com" target="_blank" rel="noopener noreferrer">ingenieBusiness</a>
                    </li>
                    <li><a href="//ingenie.com/sitemap">Sitemap</a></li>
                    <li><a href="//ingenie.com/press-centre">Press</a></li>
                </ul>
            </div>

            <div class="sm:flex-1/4 p-0 text-sm sm:p-1 text-center">
                <ul>
                    <li><a class="footer__link" href="//ingenie.com/privacy-policy">Privacy &amp; cookie policy</a></li>
                    <li><a class="footer__link" href="//ingenie.com/terms-and-conditions">Terms &amp; conditions</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="flex">
            <p class="text-white p-8 text-xs">ingenie Services Limited is registered in England &amp;
                Wales
                (No.07465078) and authorised and regulated by the Financial Conduct Authority (FRN 568113). The
                Financial Conduct Authority's Register can be accessed through the <a
                    href="https://www.fca.org.uk/firms/financial-services-register" target="_blank">fca.org.uk
                    site</a>. Ingenie Services Limited offers general insurance policies from a limited number of
                insurers.</p>
        </div>

        <?php get_template_part( 'templates/partials/social/footer', 'icons' ); ?>
    </div>

</footer>

<!-- !! TrustBox script TEMP until GTM implemented -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->

<?php get_template_part( 'templates/partials/document-close' );?>
