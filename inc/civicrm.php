<?php

add_filter('civicrm_basepage_template', 'my_base_template');

function my_base_template($template){
	return 'swwb--get-involved.php';
}

?>
