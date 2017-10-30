<?php
/**
 * Theme Functions
 *
 * @package Tiga Demo
 * @since   1.0.0
 * @version 1.0.0
 */

class Demo_Routes {

	private $session;

	function __construct() {
		add_action( 'tiga_route', array( $this, 'register_routes' ) );
		$this->session = new \Tiga\Session;
	}

	/**
	 * Register Routes
	 */
	function register_routes() {
		TigaRoute::get( '/items/new', array( $this, 'item_new' ) );
		TigaRoute::post( '/items/new', array( $this, 'item_create' ) );
		TigaRoute::get( '/items/{id:num}/edit', array( $this, 'item_edit' ) );
		TigaRoute::post( '/items/{id:num}/edit', array( $this, 'item_update' ) );
		TigaRoute::get( '/items/{id:num}/delete', array( $this, 'item_delete' ) );
		TigaRoute::get( '/items', array( $this, 'item_index' ) );
	}

	/**
	 * Item Index Controller
	 */
	function item_index() {
		global $wpdb;
		$items = $wpdb->get_results( "SELECT * FROM items" );
		$data = array(
			'items'	=> $items
		);
		set_tiga_template( 'template/item-index.php', $data );
	}

	/**
	 * New Item Controller
	 */
	function item_new() {
		$data = array(
			'repopulate'	=> $this->session->pull( 'input' )
		);
		set_tiga_template( 'template/item-new.php', $data );
	}

	/**
	 * New Item Process Controller
	 *
	 * @param object $request   Request object.
	 */
	function item_create( $request ) {
		global $wpdb;
		if ( $request->has('name|price|description') ) {
			$data = $request->all();
			$wpdb->insert( 'items', $data );
			wp_redirect( site_url().'/items' );
		} else {
			$this->session->set( 'input', $request->all() );
			wp_redirect( site_url().'/items/new' );
		}
	}

	/**
	 * Update Item Controller
	 */
	function item_edit( $request ) {
		global $wpdb;
		$item = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM items WHERE id = %d", $request->input('id') ) );
		$data = array(
			'item'			=> $item,
			'repopulate'	=> $this->session->pull( 'input' )
		);
		set_tiga_template( 'template/item-edit.php', $data );
	}

	/**
	 * Update Item Controller
	 *
	 * @param object $request Request object.
	 */
	function item_update( $request ) {
		global $wpdb;
		if ( $request->has('name|price|description') ) {
			$data = $request->all();
			$wpdb->update( 'items', $data, array( 'id' => $request->input('id') ) );
			wp_redirect( site_url().'/items' );
		} else {
			$this->session->set( 'input', $request->all() );
			wp_redirect( site_url().'/items/'.$request->input('id').'/edit' );
		}
	}

	/**
	 * Delete Item Controller
	 */
	function item_delete( $request ) {
		global $wpdb;
		$wpdb->delete( 'items', array( 'id' => $request->input( 'id' ) ) );
		wp_redirect( site_url().'/items' );
	}

}
new Demo_Routes();
