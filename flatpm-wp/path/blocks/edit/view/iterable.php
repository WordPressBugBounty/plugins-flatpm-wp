<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


$id = sanitize_text_field( $_GET['id'] );
$view = get_post_meta( $id, 'view', true );

$iterable = $view['iterable'];
?>
<div class="collapsible-header">
	<b><?php _e( 'Based on selectors (Iterable):', 'flatpm_l10n' ); ?></b>
	<span class="badge"></span>
</div>

<div class="collapsible-body">
	<div class="switch">
		<label>
			Off
			<input class="hidden" type="checkbox" name="view[iterable][enabled]" <?php if( $iterable['enabled'] === 'true') echo 'checked'; ?>>
			<span class="lever"></span>
			On
		</label>
	</div>

	<br>

	<div class="row">
		<div class="col s12">
			<p><?php _e( 'Search direction by article:', 'flatpm_l10n' ); ?></p>
		</div>
		<div class="col s12" style="display:flex;flex-wrap:wrap;column-gap:40px">
			<label>
				<input class="with-gap" name="view[iterable][derection]" type="radio"
					<?php checked( $iterable['derection'], 'top' ); ?>
					value="top">
				<span><?php _e( 'From the start', 'flatpm_l10n' ); ?></span>
			</label>
			<label>
				<input class="with-gap" name="view[iterable][derection]" type="radio"
					<?php checked( $iterable['derection'], 'bottom' ); ?>
					value="bottom"
				>
				<span><?php _e( 'From the end', 'flatpm_l10n' ); ?></span>
			</label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<p><?php _e( 'Insert type:', 'flatpm_l10n' ); ?></p>
		</div>
		<div class="col s12" style="display:flex;flex-wrap:wrap;column-gap:40px">
			<label>
				<input class="with-gap" name="view[iterable][insert_type]" type="radio"
					<?php checked( $iterable['insert_type'], 'before' ); ?>
					value="before"
				>
				<span><?php _e( 'Before', 'flatpm_l10n' ); ?></span>
			</label>
			<label>
				<input class="with-gap" name="view[iterable][insert_type]" type="radio"
					<?php checked( $iterable['insert_type'], 'after' ); ?>
					value="after"
				>
				<span><?php _e( 'After', 'flatpm_l10n' ); ?></span>
			</label>
			<label>
				<input class="with-gap" name="view[iterable][insert_type]" type="radio"
					<?php checked( $iterable['insert_type'], 'prepend' ); ?>
					value="prepend"
				>
				<span><?php _e( 'Prepend', 'flatpm_l10n' ); ?></span>
			</label>
			<label>
				<input class="with-gap" name="view[iterable][insert_type]" type="radio"
					<?php checked( $iterable['insert_type'], 'append' ); ?>
					value="append"
				>
				<span><?php _e( 'Append', 'flatpm_l10n' ); ?></span>
			</label>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<p><?php _e( 'The element with respect to which the output will occur:', 'flatpm_l10n' ); ?></p>
		</div>

		<?php
		$select = array(
			'h2'             => '<h2> H2',
			'h3'             => '<h3> H3',
			'h4'             => '<h4> H4',
			'h5'             => '<h5> H5',
			'h6'             => '<h6> H6',
			'.fpm_start ~ p' => '<p> '          . __( 'Paragraph', 'flatpm_l10n' ),
			'img'            => '<img> '        . __( 'Image', 'flatpm_l10n' ),
			'picture'        => '<picture> '    . __( 'Image', 'flatpm_l10n' ),
			'a:has(img)'     =>                   __( 'Image in the link', 'flatpm_l10n' ),
			'iframe'         => '<iframe> '     . __( 'Video', 'flatpm_l10n' ),
			'blockquote'     => '<blockquote> ' . __( 'Quote', 'flatpm_l10n' ),
			'ul'             => '<ul> '         . __( 'List', 'flatpm_l10n' ),
			'ol'             => '<ol> '         . __( 'List', 'flatpm_l10n' ),
			'[id^="more-"]'  => '<!--more--> '  . __( 'Tag', 'flatpm_l10n' ),
			''               =>                   __( 'Custom', 'flatpm_l10n' ),
		);
		?>

		<div class="input-field col s12 l4 xl3">
			<select id="view[iterable][element]">
				<?php
				foreach( $select as $key => $value ){
					echo '<option value="' . esc_attr( $key ) . '">' . esc_html( $value ) . '</option>';
				}
				?>
			</select>
			<label><?php _e( 'Select an element', 'flatpm_l10n' ); ?></label>
		</div>

		<div class="input-field col s12 l4 xl3">
			<input type="text" name="view[iterable][selector]" id="view_iterable_selector" value="<?php echo esc_attr( $iterable['selector'] ); ?>">
			<label for="view_iterable_selector">
				<?php _e( 'Selector', 'flatpm_l10n' ); ?>
			</label>
		</div>

		<div class="input-field col s12 l4 xl3 hidden">
			<input type="text" name="view[iterable][xpath]" value="<?php echo esc_attr( $iterable['xpath'] ); ?>">
			<label for="view_iterable_selector"><?php _e( 'Selector', 'flatpm_l10n' ); ?></label>
		</div>

		<div class="input-field col s12 l4 xl3">
			<input type="number" name="view[iterable][n]" id="view_iterable_n" min="1" step="1" value="<?php echo esc_attr( $iterable['n'] ); ?>">
			<label for="view_iterable_n"><?php _e( 'Each number', 'flatpm_l10n' ); ?></label>
		</div>

		<div class="input-field col s12 l4 xl3 show-on-xl" style="opacity:0;pointer-events:none;display:none">
			<input type="text">
		</div>

		<div class="input-field col s12 l4 xl3">
			<input type="number" name="view[iterable][start]" id="view_iterable_start" min="1" step="1" value="<?php echo esc_attr( $iterable['start'] ); ?>">
			<label for="view_iterable_start"><?php _e( 'Start from', 'flatpm_l10n' ); ?></label>
		</div>

		<div class="input-field col s12 l4 xl3">
			<input type="number" name="view[iterable][max]" id="view_iterable_max" min="1" step="1" value="<?php echo esc_attr( $iterable['max'] ); ?>">
			<label for="view_iterable_max"><?php _e( 'Iterations count', 'flatpm_l10n' ); ?></label>
		</div>

		<div class="col s12">
			<p style="margin-top:0"><?php _e( 'You can read more about selectors on the Internet or on <a href="https://mehanoid.pro/css-selektory-kotorye-vy-dolzhny-znat/" target="_blank">our blog</a>.', 'flatpm_l10n' ); ?></p>
		</div>
	</div>

	<div class="row">
		<div class="col s12">
			<label>
				<input type="checkbox" name="view[iterable][document]" <?php if( $iterable['document'] === 'true') echo 'checked'; ?>>
				<span>
					<?php _e( 'Enable search throughout the document', 'flatpm_l10n' ); ?>
					<i class="material-icons tooltipped"
						data-position="bottom"
						data-tooltip="<?php esc_attr_e( 'Enable this option to search not only for the content of the article: the part that is displayed by the_content() function. Keep in mind that the H1 tag is usually outside of the article.', 'flatpm_l10n' ); ?>"
					>info_outline</i>
				</span>
			</label>
		</div>
	</div>
</div>