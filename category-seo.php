<?php
/*
Plugin Name: Category SEO
Plugin URI: 
Description: CategorySeo will be able to set to the string to be used in the title element to the registration screen and editing screen categories.
Author: 8suzuran8
Author URI: https://profiles.wordpress.org/8suzuran8/
Version: 1.2
Text Domain: category-seo
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function category_seo_get_fields( $key = null ) {
	$fields = array(
		'title-element-first-page' => array(
			'name' => __( 'Title Element Of First Page', 'category-seo' ),
			'id' => 'category-seo-title-element-first-page',
		),
		'title-element-second-page' => array(
			'name' => __( 'Title Element Of Second And Subsequent Page', 'category-seo' ),
			'id' => 'category-seo-title-element-second-page',
		),
	);

	if ( is_null( $key ) ) {
		return $fields;
	}

	return $fields[ $key ];
}

if ( is_admin() ) {
	function category_seo_button_tag( $from_id = 'category-seo-title-element-first-page', $to_id = 'category-seo-title-element-second-page') {
		$html = '<button type="button" title="copy to next" name="copy" style="font-size:0;height:28px;" onclick="document.querySelector( \'#' . $to_id . '\' ).value = document.querySelector( \'#' . $from_id . '\' ).value"><img src="data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22utf-8%22%3F%3E%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2012.0.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%2051448%29%20%20--%3E%0A%3C%21DOCTYPE%20svg%20PUBLIC%20%22-//W3C//DTD%20SVG%201.1//EN%22%20%22http%3A//www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd%22%20%5B%0A%09%3C%21ENTITY%20ns_svg%20%22http%3A//www.w3.org/2000/svg%22%3E%0A%09%3C%21ENTITY%20ns_xlink%20%22http%3A//www.w3.org/1999/xlink%22%3E%0A%5D%3E%0A%3Csvg%20%20version%3D%221.1%22%20id%3D%22%u30EC%u30A4%u30E4%u30FC_1%22%20xmlns%3D%22%26ns_svg%3B%22%20xmlns%3Axlink%3D%22%26ns_xlink%3B%22%20width%3D%2216.117%22%20height%3D%2217.886%22%0A%09%20viewBox%3D%220%200%2016.117%2017.886%22%20overflow%3D%22visible%22%20enable-background%3D%22new%200%200%2016.117%2017.886%22%20xml%3Aspace%3D%22preserve%22%3E%0A%3Cg%3E%0A%09%3Cg%3E%0A%09%09%3Crect%20x%3D%225.089%22%20y%3D%223.464%22%20fill%3D%22%23FFFFFF%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20width%3D%2210.746%22%20height%3D%2214.139%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%227.323%22%20y1%3D%225.991%22%20x2%3D%2213.499%22%20y2%3D%225.991%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%227.323%22%20y1%3D%229.021%22%20x2%3D%2213.499%22%20y2%3D%229.021%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%227.323%22%20y1%3D%2212.052%22%20x2%3D%2213.499%22%20y2%3D%2212.052%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%227.323%22%20y1%3D%2215.084%22%20x2%3D%2213.499%22%20y2%3D%2215.084%22/%3E%0A%09%3C/g%3E%0A%09%3Cg%3E%0A%09%09%3Crect%20x%3D%220.283%22%20y%3D%220.283%22%20fill%3D%22%23FFFFFF%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20width%3D%2210.745%22%20height%3D%2214.137%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%222.517%22%20y1%3D%222.81%22%20x2%3D%228.69%22%20y2%3D%222.81%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%222.517%22%20y1%3D%225.841%22%20x2%3D%228.69%22%20y2%3D%225.841%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%222.517%22%20y1%3D%228.871%22%20x2%3D%228.69%22%20y2%3D%228.871%22/%3E%0A%09%09%3Cline%20fill%3D%22none%22%20stroke%3D%22%23000000%22%20stroke-width%3D%220.5655%22%20x1%3D%222.517%22%20y1%3D%2211.902%22%20x2%3D%228.69%22%20y2%3D%2211.902%22/%3E%0A%09%3C/g%3E%0A%3C/g%3E%0A%3C/svg%3E%0A" alt="copy icon"></button>';

		return $html;
	}

	function category_seo_category_add_form_fields( $taxonomy ) {
		$tag = '';

		$i = 0;
		foreach ( category_seo_get_fields() as $category_field ) {
			$tag .= '<div class="form-field">';
			$tag .= '<label for="' . $category_field[ 'id' ] . '">' . $category_field[ 'name' ] . '</label>';
			$style_attr = '';
			if ( $i == 0 ) {
				$style_attr = ' style="vertical-align:top;width:calc(95% - 32px);"';
			}
			$tag .= '<input type="text" name="' . $category_field[ 'id' ] . '" id="' . $category_field[ 'id' ] . '"' . $style_attr . ' value="">';
			if ( $i == 0 ) {
				$tag .= category_seo_button_tag();
			}
			$tag .= '</div>';

			$i ++;
		}

		echo $tag;
	}

	add_action ( 'category_add_form_fields', 'category_seo_category_add_form_fields' );

	function category_seo_category_add_form( $taxonomy ) {
		$tag = '';

		$i = 0;
		foreach ( category_seo_get_fields() as $category_field ) {
			$value = get_option( $category_field[ 'id' ] . '-' . $taxonomy->term_id );

			$tag .= '<tr class="form-field">';
			$tag .= '<th><label for="' . $category_field[ 'id' ] . '">' . $category_field[ 'name' ] . '</label></th>';
			$style_attr = '';
			if ( $i == 0 ) {
				$style_attr = ' style="vertical-align:top;width:calc(95% - 32px);"';
			}
			$tag .= '<td>';
			$tag .= '<input type="text" name="' . $category_field[ 'id' ] . '" id="' . $category_field[ 'id' ] . '"' . $style_attr . ' value="' . $value . '">';
			if ( $i == 0 ) {
				$tag .= category_seo_button_tag();
			}
			$tag .= '</td>';
			$tag .= '</tr>';

			$i ++;
		}

		echo $tag;
	}

	add_action ( 'edit_category_form_fields', 'category_seo_category_add_form' );

	function category_seo_validate( $value ) {
		return true;
	}

	function category_seo_sanitize_title_with_dashes( $title, $raw_title = '', $context = 'display' ) {

		$title = strip_tags($title);
		// Preserve escaped octets.
		$title = preg_replace('|%([a-fA-F0-9][a-fA-F0-9])|', '---$1---', $title);
		// Remove percent signs that are not part of an octet.
		$title = str_replace('%', '', $title);
		// Restore octets.
		$title = preg_replace('|---([a-fA-F0-9][a-fA-F0-9])---|', '%$1', $title);

		if ( 'save' == $context ) {
			// Convert nbsp, ndash and mdash to hyphens
			$title = str_replace( array( '%c2%a0', '%e2%80%93', '%e2%80%94' ), '-', $title );
			// Convert nbsp, ndash and mdash HTML entities to hyphens
			$title = str_replace( array( '&nbsp;', '&#160;', '&ndash;', '&#8211;', '&mdash;', '&#8212;' ), '-', $title );

			// Strip these characters entirely
			$title = str_replace( array(
				// iexcl and iquest
				'%c2%a1', '%c2%bf',
				// angle quotes
				'%c2%ab', '%c2%bb', '%e2%80%b9', '%e2%80%ba',
				// curly quotes
				'%e2%80%98', '%e2%80%99', '%e2%80%9c', '%e2%80%9d',
				'%e2%80%9a', '%e2%80%9b', '%e2%80%9e', '%e2%80%9f',
				// copy, reg, deg, hellip and trade
				'%c2%a9', '%c2%ae', '%c2%b0', '%e2%80%a6', '%e2%84%a2',
				// acute accents
				'%c2%b4', '%cb%8a', '%cc%81', '%cd%81',
				// grave accent, macron, caron
				'%cc%80', '%cc%84', '%cc%8c',
			), '', $title );

			// Convert times to x
			$title = str_replace( '%c3%97', 'x', $title );
		}

		$title = trim($title, '-');

		return $title;
	}

	function category_seo_sanitize( $value ) {
		$value = sanitize_title( $value );
		return $value;
	}

	remove_filter( 'sanitize_title', 'sanitize_title_with_dashes', 10 );
	add_filter( 'sanitize_title', 'category_seo_sanitize_title_with_dashes', 10, 3 );

	function category_seo_edited_term( $term_id, $tt_id, $taxonomy ) {
		foreach ( category_seo_get_fields() as $category_field ) {
			if ( isset( $_POST[ $category_field[ 'id' ] ] ) ) {
				category_seo_validate( $_POST[ $category_field[ 'id' ] ] );

				update_option( $category_field[ 'id' ] . '-' . $term_id, category_seo_sanitize( $_POST[ $category_field[ 'id' ] ] ) );
			}
		}
	}

	add_action ( 'edited_term', 'category_seo_edited_term', 10, 3 );
	add_action ( 'create_term', 'category_seo_edited_term', 10, 3 );

	function category_seo_admin_menu() {
		function category_seo_settings() {
			if ( isset( $_POST[ 'submited' ] ) && $_POST[ 'submited' ] == 'Y' ) {
				$category_seo_settings = array(
					'type' => $_POST[ 'category-seo-settings-type' ],
					'first-page' => $_POST[ 'category-seo-settings-first' ],
					'second-page' => $_POST[ 'category-seo-settings-second' ],
				);

				foreach ( $category_seo_settings as $key => $value ) {
					category_seo_validate( $value );

					$category_seo_titles[ $key ] = category_seo_sanitize( $value );
				}

				update_option( 'category-seo-settings', $category_seo_settings );
			}

			$category_seo_settings = get_option( 'category-seo-settings' );
			if ( $category_seo_settings === false ) {
				$category_seo_settings = array(
					'type' => 2,
					'first-page' => '',
					'second-page' => '',
				);
			}

			$html = '';

			$html .= '<form name="form1" method="post" action="" style="white-space:pre;">';
			$html .= '<input type="hidden" name="submited" value="Y">';

			$html .= '<h1>' . __( 'Category SEO Settings', 'category-seo' ) . '</h1>';
			$html .= '<h2>' . __( 'Processing in the case of non-input', 'category-seo' ) . '</h2>';
			$html .= '<label><input type="radio" name="category-seo-settings-type" value="1"' . checked( $category_seo_settings[ 'type' ], 1, false ) . ' required>' . __( 'Do not process', 'category-seo' ) . '</label>' . "\n";
			$html .= '<label><input type="radio" name="category-seo-settings-type" value="2"' . checked( $category_seo_settings[ 'type' ], 2, false ) . '>' . __( 'Use the following values', 'category-seo' ) . '</label>' . "\n";
			$html .= '<div style="padding-left:2em;">';
			$html .= '<label class="form-field">';
			$html .= __( 'Title Element Of First Page', 'category-seo' ) . "\n";
			$html .= '<input type="text" name="category-seo-settings-first" id="category-seo-settings-first" placeholder="%s | Hello World!!" value="' . $category_seo_settings[ 'first-page' ] . '" required style="vertical-align:top;width:calc(95% - 32px);">';
			$html .= category_seo_button_tag( 'category-seo-settings-first', 'category-seo-settings-second' );
			$html .= '</label>' . "\n\n";
			$html .= '<label class="form-field">' . __( 'Title Element Of Second And Subsequent Page', 'category-seo' ) . "\n" . '<input type="text" name="category-seo-settings-second" id="category-seo-settings-second" placeholder="%s %d page | Hello World!!" value="' . $category_seo_settings[ 'second-page' ] . '" required></label>' . "\n\n";
			$html .= '</div>';
			$html .= '<h2>Keywords</h2>';
			$html .= '<dl>';
			$html .= '<dt>%s';
			$html .= '<dd>category name';
			$html .= '<dt>%d';
			$html .= '<dd>page number';
			$html .= '</dl>';

			$html .= get_submit_button();

			$html .= '</form>';

			echo $html;
		}

		add_plugins_page( 'Category SEO', 'Category SEO', 'install_plugins', 'category-seo', 'category_seo_settings' );
	}

	add_action( 'admin_menu', 'category_seo_admin_menu' );

	function category_seo_delete_category( $term, $tt_id, $deleted_term, $object_ids ) {
		foreach ( category_seo_get_fields() as $category_field ) {
			delete_option( $category_field[ 'id' ] . '-' . $deleted_term->term_id );
		}
	}

	add_action( 'delete_category', 'category_seo_delete_category', 10, 4 );

	function category_seo_deactivate_plugin( $network_deactivating ) {
		delete_option( 'category-seo-settings' );
	}

	add_action( 'deactivate_' . plugin_basename( __FILE__ ), 'category_seo_deactivate_plugin' );

	function category_seo_plugin_action_links( $actions, $plugin_file ) {
		$links = array(
			'<a href="' . get_admin_url( null, "plugins.php?page=" . dirname( plugin_basename( __FILE__ ) ) ) . '">Settings</a>',
		);

		$actions = array_merge( $links, $actions );
		return $actions;
	}

	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'category_seo_plugin_action_links', 10, 2 );
} else {
	function category_seo_esc( $value ) {
		return esc_html( $value );
	}

	function category_seo_get_title() {
		$page = get_query_var( 'paged', 1 );

		$field_name = 'title-element-first-page';
		if ( $page >= 2 ) {
			$field_name = 'title-element-second-page';
		}

		$term = get_queried_object();

		$category_seo_title_field = category_seo_get_fields( $field_name );
		$category_seo_title = get_option( $category_seo_title_field[ 'id' ] . '-' . $term->term_id );

		if ( ! $category_seo_title ) {
			$category_seo_settings = get_option( 'category-seo-settings' );
			if ( $category_seo_settings !== false && $category_seo_settings[ 'type' ] == 2 ) {
				$category_seo_title = $category_seo_settings[ 'first-page' ];
				if ( $page >= 2 ) {
					$category_seo_title = $category_seo_settings[ 'second-page' ];
				}
			}
		}

		if ( $category_seo_title !== false && $category_seo_title != '' ) {
			$category_seo_title = str_replace( array( '%d', '%s' ), array( $page, get_query_var( 'category_name' ) ), $category_seo_title );
		}

		return category_seo_esc( $category_seo_title );
	}

	function category_seo_document_title_parts( $title ) {
		if ( is_category() ) {
			$category_seo_title = category_seo_get_title();

			if ( $category_seo_title !== false && $category_seo_title != '' ) {
				$title = array(
					'title' => urldecode( $category_seo_title ),
					'page' => '',
					'tagline' => '',
					'site' => '',
				);
			}
		}

		return $title;
	}

	add_filter( 'document_title_parts', 'category_seo_document_title_parts' );
 
	function category_seo_aioseop_title( $title ) {
		if( is_category() ) {
			$category_seo_title = category_seo_get_title();

			if ( $category_seo_title !== false && $category_seo_title != '' ) {
				return $category_seo_title;
			}
		}
 
		return $title;
	}

	add_filter( 'aioseop_title', 'category_seo_aioseop_title' );
}