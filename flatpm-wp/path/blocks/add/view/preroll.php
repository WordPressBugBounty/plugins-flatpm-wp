<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div class="collapsible-header">
	<b><?php _e( 'Video pre-roll:', 'flatpm_l10n' ); ?></b>
	<span class="badge"></span>
</div>

<div class="collapsible-body">
	<div class="switch">
		<label>
			Off
			<input class="hidden" type="checkbox" name="view[preroll][enabled]">
			<span class="lever"></span>
			On
		</label>
	</div>

	<br>

	<div class="row">
		<div class="col s12">
			<p><?php _e( 'Pre-rolls are ads that are shown before you start watching videos on your site.', 'flatpm_l10n' ); ?></p>
			<p><?php _e( 'But this functionality can also be used for other purposes, such as before viewing a full size image or gallery on your site.', 'flatpm_l10n' ); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="input-field col s12 l6 xl5">
			<input type="text" name="view[preroll][selector]" id="view_preroll_selector" value="<?php echo esc_attr( $flat_pm_default_selectors['preroll'] ); ?>">
			<label for="view_preroll_selector">
				<i class="material-icons tooltipped"
					data-position="bottom"
					data-tooltip="<?php esc_attr_e( 'Specify video container selectors, default is: <code>iframe[src*="youtu"], iframe[data-lazy-src*="youtu"], .rll-youtube-player</code>', 'flatpm_l10n' ); ?>"
				>info_outline</i>
				<?php _e( 'Selector for iframes or video containers', 'flatpm_l10n' ); ?>
			</label>
			<span class="helper-text" data-error="<?php _e( 'Wrong selector', 'flatpm_l10n' ); ?>" data-success=""></span>
		</div>

		<div class="input-field col s12 l4 xl3 hidden">
			<input type="text" name="view[preroll][xpath]" value="<?php echo esc_attr( $flat_pm_default_selectors['preroll_xpath'] ); ?>">
			<label for="view_preroll_selector"><?php _e( 'Selector', 'flatpm_l10n' ); ?></label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[preroll][timer]">
				<span>
					<?php _e( 'Display close timer', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'Before the appearance of the cross, a timer with a countdown of N seconds will be displayed. As soon as the timer ends, a cross will be displayed.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>

			<div class="col s12"><br></div>

			<div class="input-field col">
				<input id="view_preroll_timer_count" type="number" class="validate" min="0" name="view[preroll][timeout]">
				<label for="view_preroll_timer_count"><?php _e( 'Time in seconds', 'flatpm_l10n' ); ?></label>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[preroll][cross]" checked>
				<span>
					<?php _e( 'Show closing cross', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'Enable this option so that the user has to close the ad himself.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[preroll][cross_offset]">
				<span>
					<?php _e( 'Display a cross and a timer directly on the ad', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'The cross can be displayed directly on the ad or outside of it, but within the block itself.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[preroll][once]">
				<span>
					<?php _e( 'Show only for the first video', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'Enable this option to have the user see ads before watching only the first video on the page.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>
		</div>
	</div>
</div>