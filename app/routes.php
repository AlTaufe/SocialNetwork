<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/activities', 'Activity#all', 'activity_all'],
		['GET|POST', '/activity/create', 'Activity#create', 'activity_create']
	);
