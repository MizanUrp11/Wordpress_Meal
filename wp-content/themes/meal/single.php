<?php
get_header();
$meal_section_id = 30;
get_template_part( 'section-templates/banar' );
the_post(  );
?>

<?php

comments_template();
?>

<?php get_footer( );?>