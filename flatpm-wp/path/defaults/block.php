<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$flat_pm_default_selectors = get_option( 'flat_pm_default_selectors' );

return array(
	'origin'  => 'programmatically',
	'id'      => '',
	'turned'  => 'true',
	'name'    => '',
	'fast'    => 'false',
	'abgroup' => '',
	'lazy'    => 'true',
	'order'   => '',
	'html' => array(
		'block' => array(
			'block_0' => array(
				'id' => '0',
				'name' => '',
				'minwidth' => '',
				'maxwidth' => '',
				'abgroup' => '',
				'turned' => 'true',
				'html' => array(
					'code' => '',
					'minheight' => '',
					'autorefresh' => '',
					'timeout' => ''
				),
				'adb' => array(
					'code' => '',
					'minheight' => '',
					'autorefresh' => '',
					'timeout' => ''
				)
			)
		)
	),
	'view' => array(
		'pixels' => array(
			'enabled' => 'false',
			'type'    => 'percent_once',
			'exclude' => $flat_pm_default_selectors['pixels'],
			'xpath'   => $flat_pm_default_selectors['pixels_xpath'],
			'n'       => '',
			'm'       => '',
			'start'   => '',
			'max'     => ''
		),
		'symbols' => array(
			'enabled' => 'false',
			'type'    => 'percent_once',
			'exclude' => $flat_pm_default_selectors['symbols'],
			'xpath'   => $flat_pm_default_selectors['symbols_xpath'],
			'n'       => '',
			'm'       => '',
			'start'   => '',
			'max'     => ''
		),
		'once' => array(
			'enabled'     => 'false',
			'derection'   => 'top',
			'insert_type' => 'before',
			'selector'    => '.fpm_start ~ p',
			'xpath'       => './/*[contains(concat(" ",normalize-space(@class)," ")," fpm_start ")]/following-sibling::p',
			'n'           => '',
			'document'    => 'false'
		),
		'iterable' => array(
			'enabled'     => 'false',
			'derection'   => 'top',
			'insert_type' => 'before',
			'selector'    => '.fpm_start ~ p',
			'xpath'       => './/*[contains(concat(" ",normalize-space(@class)," ")," fpm_start ")]/following-sibling::p',
			'n'           => '',
			'start'       => '',
			'max'         => '',
			'document'    => 'false',
		),
		'outgoing' => array(
			'enabled'  => 'false',
			'side'     => 'left-bottom',
			'show'     => '',
			'hide'     => '',
			'type'     => 'sec',
			'cross'    => 'true',
			'timer'    => 'false',
			'timeout'  => '0',
			'again'    => false,
			'interval' => '',
			'count'    => '',
			'cookie'   => 'true',
			'close'    => 'false',
			'action'   => 'false',
			'selector' => '',
		),
		'preroll' => array(
			'enabled'      => 'false',
			'selector'     => $flat_pm_default_selectors['pixels'],
			'xpath'        => $flat_pm_default_selectors['pixels_xpath'],
			'timer'        => 'false',
			'timeout'      => '0',
			'cross'        => 'true',
			'cross_offset' => 'false',
			'once'         => 'false'
		),
		'hoverroll' => array(
			'enabled'  => 'false',
			'selector' => $flat_pm_default_selectors['pixels'],
			'xpath'    => $flat_pm_default_selectors['pixels_xpath'],
			'cross'    => 'true'
		),
		// 'vignette' => array(
		// 	'enabled' => 'false',
		// 	'exclude' => ''
		// )
	),
	'content' => array(
		'post_types' => array(
			'post' => 'true',
			'page' => 'true'
		),
		'templates' => array(
			'404'        => 'false',
			'home'       => 'false',
			'archives'   => 'false',
			'categories' => 'false',
			'search'     => 'false',
			'paged'      => 'true',
			'singular'   => 'true',
		),
		'restriction' => array(
			'content_less' => '',
			'content_more' => '',
			'title_less'   => '',
			'title_more'   => '',
		),
		'author' => array(
			'allow' => array(),
			'disallow' => array()
		),
		'taxonomy_enabled'  => array(), // type as id => id
		'taxonomy_disabled' => array(), // type as id => id
		'publish_enabled'   => array(), // type as id => id
		'publish_disabled'  => array(), // type as id => id
	),
	'user' => array(
		'geo' => array(
			'enabled'  => 'false',
			'country'  => array(
				'allow'    => '',
				'disallow' => '',
			),
			'city'     => array(
				'allow'    => '',
				'disallow' => '',
			),
		),
		'referer' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'browser' => array(
			'enabled'  => 'false',
			'allow'    => array(),
			'disallow' => array(),
		),
		'os' => array(
			'enabled'  => 'false',
			'allow'    => array(),
			'disallow' => array(),
		),
		'isp' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'utm' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'cookies' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'date' => array(
			'enabled'  => 'false',
			'from'     => '',
			'to'       => '',
		),
		'time' => array(
			'enabled'  => 'false',
			'from'     => '',
			'to'       => '',
		),
		'schedule' => array(
			'enabled'  => 'false',
			'value'    => '["FFFFFF","FFFFFF","FFFFFF","FFFFFF","FFFFFF","FFFFFF","FFFFFF"]',
		),
		'role' => array(
			'enabled'  => 'false',
			'allow'    => array(),
			'disallow' => array(),
		),
		'agent' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'language' => array(
			'enabled'  => 'false',
			'allow'    => '',
			'disallow' => '',
		),
		'ip' => array(
			'enabled'  => 'false',
		),
	)
);
?>