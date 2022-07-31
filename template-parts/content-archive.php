<div data-aos="fade-up-right" data-aos-duration="1000" data-aos-delay="500" class="container">
    <div class="post">
        <div class="media">
            <img class="post-thumb" src="<?php the_post_thumbnail_url('thumbnail');?>" alt="image">
            <div class="media-body">
                <h3 class="title"><a href="<?php the_permalink() ?>"> <?php the_title();?></a></h3>
                
                <div class="intro"> <?php the_excerpt(); ?></div>
                <div class="meta "><p class="date"><?php echo get_the_date('F dS Y',); ?></p> <a class="more-link" href="<?php the_permalink() ?>">Read more</a></div> 
                
            </div>
            <!--//media-body-->
        </div>
        <!--//media-->
    </div>



</div>