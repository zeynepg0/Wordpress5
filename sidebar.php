<aside class="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <p>Bu alana widget eklemek için “Görünüm > Bileşenler” menüsüne gidin.</p>
    <?php endif; ?>
</aside>
