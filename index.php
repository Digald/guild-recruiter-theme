<?php get_header(); ?>
    <img class="guild-banner" src="<?php 
    $post_id = 20;
    $queried_post = get_post($post_id);
    // var_dump($queried_post);
    echo $queried_post->guid;
    ?>" alt="banner image"/>
<?php get_footer(); ?>