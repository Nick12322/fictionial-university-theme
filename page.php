<?php
    
    while(have_posts()) {
        the_post(); ?>
        <h1>Page. not a post</h1>
        <h2><?php the_title() ?></h2>
        <p><?php the_content() ?>
    <?php };

?>