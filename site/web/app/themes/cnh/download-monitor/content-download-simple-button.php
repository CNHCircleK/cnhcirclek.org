<?php
/**
 * Download button
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly
?>
<a class="btn btn-primary btn-block" href="<?php $dlm_download->the_download_link(); ?>" rel="nofollow">
		<?php echo $dlm_download->get_the_title(); ?>
    </a>