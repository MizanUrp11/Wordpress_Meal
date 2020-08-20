<?php
get_header();
$meal_section_id = 30;
get_template_part( 'section-templates/banar' );
the_post();
the_post_thumbnail( 'full' );
the_title();
the_content();

get_footer();

?>