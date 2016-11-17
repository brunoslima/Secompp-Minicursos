<?php
	
	/**
	 * This file constains all constants defined to the entire project, 
	 * since simple names, for example, projects name, until resource locations.
	 *
	 * If the user needs use some of these constants, the user has to declare and assign
	 * their respectives values at the following file:
	 * 		-- application/settings/constant.php
	 * 		
	 * At first, this file will be empty and the user will fill it by demand.
	 * 
	 */

	//////////////////////////////////////////////////
	
	/**
	 *	This variable refers to project's name created by user.
	 *	This also will be part of string URL of web site.
	 *
	 *  @since  Flash PHP 1.0
	 */
	$project['name'] = "";

	/**
	 * 	This variable just indicates the project folder name.
	 *
	 * 	@since  Flash PHP 1.0
	 */
	$project['folder'] = $project['name']."/";

	/**
	 * 	The variable refers to name of company that this project belongs to.
	 *  This isn't used anywhere at framework, but it can be incorporated to 
	 *  page elements, as footer. 
	 * 
	 * 	It isn't required.
	 *
	 *	@since 	Flash PHP 1.0
	 * 
	 */
	$project['company'] = "";

	//////////////////////////////////////////////////

	/**
	 * 	The following variables $assets[] identify the path folder to some webpages resources as
	 *  scripts, cascading stylesheets, images, video and another elements that you may
	 *  create its own directory resource.
	 *
	 *  @since  Flash PHP 1.0
	 */
	$assets['style'] = $project['folder']."system/assets/css/";
	
	$assets['script'] = $project['folder']."system/assets/js/";
	
	$assets['video'] = $project['folder']."system/assets/video/";
	
	$assets['images'] = $project['folder']."system/assets/css/images/";
	
	$assets['fonts'] = $project['folder']."system/assets/css/fonts/";


	//////////////////////////////////////////////////