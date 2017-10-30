<?php
/**
 * Theme Functions
 *
 * @package Tiga Demo
 * @since   1.0.0
 * @version 1.0.0
 */

/**
 * Register Routes
 */
function register_routes() {
	TigaRoute::get( '/items/new', 'item_new' );
	TigaRoute::post( '/items/create', 'item_create' );
	TigaRoute::get( '/items/{id:num}', 'item_edit' );
	TigaRoute::post( '/items/{id:num}', 'item_update' );
	TigaRoute::delete( '/items/{id:num}', 'item_delete' );
	TigaRoute::get( '/items', 'item_index' );
}
add_action( 'tiga_route', 'register_routes' );

/**
 * New Item Controller
 */
function item_new() {

	set_tiga_template( 'template/item-new.php' );
}

/**
 * New Item Process Controller
 *
 * @param object $request   Request object.
 */
function item_create( $request ) {

}

/**
 * Update Item Controller
 */
function item_edit() {

	set_tiga_template( 'template/item-edit.php' );
}

/**
 * Update Item Controller
 *
 * @param object $request Request object.
 */
function item_update( $request ) {

}

/**
 * Item Index Controller
 */
function item_index() {

	set_tiga_template( 'template/item-index.php' );
}
