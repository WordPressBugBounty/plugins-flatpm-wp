<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$flat_pm_default_selectors = get_option( 'flat_pm_default_selectors' );
?>
<div class="collapsible-header">
	<b><?php _e( 'Hover-roll:', 'flatpm_l10n' ); ?></b>
	<span class="badge"></span>
</div>

<div class="collapsible-body">
	<div class="switch">
		<label>
			Off
			<input class="hidden" type="checkbox" name="view[hoverroll][enabled]">
			<span class="lever"></span>
			On
		</label>
	</div>

	<br>

	<div class="row">
		<div class="col s12">
			<p><?php _e( 'Hover-roll is an ad that appears above an image when the user hovers over it.', 'flatpm_l10n' ); ?></p>
			<p><?php _e( 'This ad format is ideal for image sites. Ads are hidden and do not clutter up the look of the site.', 'flatpm_l10n' ); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 l6 xl5">
			<input type="text" name="view[hoverroll][selector]" id="view_hoverroll_selector" value="<?php echo esc_attr( $flat_pm_default_selectors['hoverroll'] ); ?>">
			<label for="view_hoverroll_selector">
				<i class="material-icons tooltipped"
					data-position="bottom"
					data-tooltip="<?php esc_attr_e( 'Specify container selectors, default is:<br><code>.fpm_start ~ p > img, .fpm_start ~ a:has(img)</code>', 'flatpm_l10n' ); ?>"
				>info_outline</i>
				<?php _e( 'Selector for containers', 'flatpm_l10n' ); ?>
			</label>
			<span class="helper-text" data-error="<?php _e( 'Wrong selector', 'flatpm_l10n' ); ?>" data-success=""></span>
		</div>

		<div class="input-field col s12 l4 xl3 hidden">
			<input type="text" name="view[hoverroll][xpath]" value="<?php echo esc_attr( $flat_pm_default_selectors['hoverroll_xpath'] ); ?>">
			<label for="view_hoverroll_selector"><?php _e( 'Selector', 'flatpm_l10n' ); ?></label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[hoverroll][cross]" checked>
				<span>
					<?php _e( 'Show close cross', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'Enable this option to give the user the option to close the ad.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>
		</div>
	</div>
</div>