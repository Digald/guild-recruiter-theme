<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description');?>">
    <title><?php bloginfo('name'); ?><?php wp_title('|');?></title>
    <?php wp_head(); ?>
</head>
<?php 
    if(is_front_page()):
        $body_class = array('landingpage');
    else:
        $body_class = array('childpage');
    endif;
?>
<body <?php body_class($body_class); ?>>
    <nav class="navcontainer">
        <div class="navcontainer__brand">
            <p>Image or Logo</p>
        </div>
        <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
  
    </nav>
