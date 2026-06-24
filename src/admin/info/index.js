/* CSS */
/* global PatternsTravelLocalize */
/* eslint-disable no-console */
import './index.scss';

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class PatternsTravelPluginApi {
	constructor() {
		this.nonce = PatternsTravelLocalize.nonce;
		this.bindEvents();
	}

	bindEvents() {
		document.addEventListener( 'click', ( event ) => {
			if (
				event.target.classList.contains(
					'patterns-travel-install-plugin'
				)
			) {
				event.target.classList.add( 'patterns-travel-processing' );
				this.installPlugin( event.target );
			}
		} );
	}

	async installPlugin( el ) {
		const pluginData = el.dataset.plugin;
		const plugin = JSON.parse( pluginData );
		try {
			const result = await apiFetch( {
				path: 'patterns-travel/v1/install-plugin',
				method: 'POST',
				data: plugin,
				headers: {
					'X-WP-Nonce': this.nonce,
				},
			} );
			if ( result ) {
				if ( result.success ) {
					el.innerText = el.dataset.successText;
					el.disabled = true;
					el.classList.remove( 'patterns-travel-install-plugin' );
				} else {
					el.innerText = el.dataset.failText;
				}
			}
		} catch ( error ) {
			console.error( error );
			el.innerText = el.dataset.failText;
		}
		el.classList.remove( 'patterns-travel-processing' );
	}
}

document.addEventListener( 'DOMContentLoaded', () => {
	new PatternsTravelPluginApi();
} );
