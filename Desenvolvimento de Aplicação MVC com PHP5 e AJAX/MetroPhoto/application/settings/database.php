<?php


	/**
	 * 	This variable identifies which database will be used 
	 *  in this project.
	 *
	 * 	@since  Flash PHP 1.0 
	 * 	
	 */
	$database['name'] = "metrophoto";

	/**
	 * 	This variable defines host address from server where database 
	 *  is storaged, that it must follow IPV4 address pattern.
	 *  If the database is in the same host of website, it can be identify 
	 *  by 127.0.0.1 or 'localhost'.
	 *
	 * 	@since  Flash PHP 1.0
	 * 	
	 */
	$database['host'] = "localhost";

	/**
	 * 	This variable identifies the username of database management system.
	 * 	For example, the default user in MySQL databases is 'root'.
	 *
	 * 	@since 	Flash PHP 1.0
	 * 	
	 */
	$database['user'] = "root";


	/**
	 * 	This variable identifies the password of database management system.
	 * 	For example, at MySQL database default user's password is a empty string.
	 *
	 * 	@since  Flash PHP 1.0
	 *
	 *  -- For improvements in security, we should think a way to become this information safier,
	 *     this is a real problem!
	 */	
	$database['password'] = "";

	/**
	 *	The variable identifies which relational database management system 
	 *	will be used for data storage in this project. 
	 *	Until the current version, only RDBMS that is accept by PDO module.
	 *	Variable's name must follow name patterns at PDO connections.
	 *
	 * @since 	Flash PHP 1.0
	 * 
	 */
	$database['sgbd'] = "mysql";