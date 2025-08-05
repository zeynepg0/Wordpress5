</div> <!-- .content-wrapper -->
<footer class="site-footer">
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
    <nav class="footer-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>
