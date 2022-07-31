<div class="container">
    <header>
        <img data-aos="zoom-out-down" data-aos-duration="500" src="<?php the_post_thumbnail_url('thumbnail'); ?>">

    </header>
    <div data-aos="fade-right" data-aos-delay="500" class="single-content">
        <h1><?php the_title() ?></h1>
        <div class="meta">
            <p class="date"> Written by: <?php the_author(); ?></p>
            <p class="date"><?php echo get_the_date('l M j',); ?></p>
        </div>

        <?php

    the_content();

    ?>
    </div>

    
</div>