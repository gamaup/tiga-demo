<?php

function register_routes() {
	TigaRoute::get( '/items', 'item_index' );
	TigaRoute::get( '/items/{id:num}', 'item_detail' );
}
add_action( 'tiga_route', 'register_routes' );