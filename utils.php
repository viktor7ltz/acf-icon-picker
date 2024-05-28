<?php
function get_acf_icon( $filename ) {
	return get_template_directory_uri() . '/' . ICON_DIR . $filename . '.svg';
}