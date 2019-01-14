
<?php
// el silecio es oro

get_header();
//get_header('secundario');
//include TEMPLATEPATH . '/content.php'; // con  php puro
get_template_part('content');
get_sidebar();
get_footer();