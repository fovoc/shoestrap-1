<?php

$sections = array(
	'colors',
	'header',
	'layout',
	'typography',
	'title_tagline',
);
foreach ( $sections as $section ) {
	get_template_part( 'inc/customizer/fields-' . $section );
}
