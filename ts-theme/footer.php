
    </section><!-- /telespor-container -->

    <!-- telespor-footer -->
    <footer class="telespor-footer">

        <div class="footer-wrap">

            <nav class="footer-nav">
                <h2>Navigasjon</h2>
                <?php wp_nav_menu( array( 'theme_location' => 'footernav' ) ); ?>
            </nav>

            <div class="footer-contact">
                <h2>Kontakt oss</h2>
                <p>Sykehusveien 23<br />
                Postboks 6427<br />
                9294 Tromsø</p>
                <p>(+47) 90 47 46 00<br />
                    Kl. 0800 – 1600<br />
                    <em>NB! Vi kan ikke motta SMS.</em></p>
            </div>

        </div>

        <p class="copyright"><?php bloginfo( 'name' ) ?> &copy; <?php echo date( 'Y' ); ?></p>

    </footer>
    <!-- /telespor-footer -->

<?php wp_footer(); ?>
</body>
</html>
