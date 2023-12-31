/**
 * Get URL Queries
 */
/* eslint camelcase: 0 */
/* eslint no-shadow: 0 */
import {
	query_string,
	get_url_queries,
} from '@vk-filter-search/common/enque-front-component';

const form_html = document.getElementsByClassName( `vk-filter-search` );
const url_queries = get_url_queries();

const set_query_value = ( i ) => {
	Object.keys( url_queries ).forEach( ( key ) => {
		let value_array;
		if ( url_queries[ key ].indexOf( ',' ) !== -1 ) {
			value_array = url_queries[ key ].split( ',' );
		} else {
			value_array = [ url_queries[ key ] ];
		}
		if ( key === 's' ) {
			const keyword_selector = form_html[ i ].querySelector(
				'.vkfs__keyword input[name="s"]'
			);
			if ( keyword_selector !== null ) {
				keyword_selector.value = decodeURI( url_queries[ key ] );
			}
		} else if ( key === 'post_type' ) {
			const post_type_select_selector = form_html[ i ].querySelectorAll(
				'.vkfs__input-wrap--select.vkfs__input-wrap--post_type'
			);
			if (
				post_type_select_selector !== null &&
				post_type_select_selector !== undefined
			) {
				for ( let j = 0; j < post_type_select_selector.length; j++ ) {
					const post_type_select_options =
						post_type_select_selector[ j ].querySelectorAll(
							'option'
						);
					if (
						post_type_select_options !== null &&
						post_type_select_options !== undefined
					) {
						for (
							let k = 0;
							k < post_type_select_options.length;
							k++
						) {
							Object.keys( value_array ).forEach( ( key ) => {
								if (
									post_type_select_options[ k ].value ===
									decodeURI( value_array[ key ] )
								) {
									post_type_select_options[
										k
									].selected = true;
								}
							} );
						}
					}
				}
			}
		} else if ( key !== 'vkfs_form_id' ) {
			const taxonomy_select_selector = form_html[ i ].querySelectorAll(
				`.vkfs__input-wrap--select.vkfs__input-wrap--${ key }`
			);
			if (
				taxonomy_select_selector !== null &&
				taxonomy_select_selector !== undefined
			) {
				for ( let j = 0; j < taxonomy_select_selector.length; j++ ) {
					const taxonomy_select_options =
						taxonomy_select_selector[ j ].querySelectorAll(
							'option'
						);
					if (
						taxonomy_select_options !== null &&
						taxonomy_select_options !== undefined
					) {
						for (
							let k = 0;
							k < taxonomy_select_options.length;
							k++
						) {
							Object.keys( value_array ).forEach( ( key ) => {
								if (
									taxonomy_select_options[ k ].value ===
									decodeURI( value_array[ key ] )
								) {
									taxonomy_select_options[
										k
									].selected = true;
								}
							} );
						}
					}
				}
			}
		}
	} );
};

if ( query_string.indexOf( 'vkfs_submitted=true' ) === -1 ) {
	for ( let i = 0; i < form_html.length; i++ ) {
		set_query_value( i );
	}
}
