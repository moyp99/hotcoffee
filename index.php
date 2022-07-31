<?php
get_header();
?>

<section class="fp_welcome">

    <div>


        <h1>Make better coffee <img src="<?php echo get_template_directory_uri() . "/assets/images/image 6.png" ?>" alt=""></h1>

        <form class="fp_form">
            <input placeholder="you@domain.com"> <button class="btn btn-primary">subscribe</button>
        </form>
    </div>

    <img src="<?php echo get_template_directory_uri() . "/assets/images/croods 1.png" ?>">


</section>

<article class="content px-3 py-5 p-md-5">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

    <?php
    the_posts_pagination() ?>

</article>


<?php
get_footer();
?>