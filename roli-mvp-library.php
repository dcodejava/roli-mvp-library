<?php
	/*
	Plugin Name: Roli Mvp Library
	Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
	Description: A brief description of the Plugin.
	Version: 1.0
	Author: Dick
	Author URI: http://URI_Of_The_Plugin_Author
	License: A "Slug" license name e.g. GPL2
	*/

	/**
	 * Software Engineer Task
	 *
	 * Task Overview
	 * You are required to build an MVP Online Library system with 3 basic modules:
	 * 1. Book management
	 * 2. User management (Authentication system) and
	 * 3. Check in / Check out functionality
	 *
	 * Online Library
	 * 1. User Management Module: There are 2 active users in this system: Librarian and Reader.
	 * All users should be able to:
	 * - register in the library with email and password
	 * - upload a profile photo
	 * Additional fields can be added, based on your discretion.
	 * Librarians will double as the admin in this system and one should be created by default.
	 * 2. Book Management Module: This will be demonstrated through the activities accessible to the various
	 * players.
	 *
	 * Librarian should be able to:-
	 * - upload books with the following parameters
	 * -- cover page image
	 * -- title
	 * -- ISBN
	 * -- revision number
	 * -- published date
	 * -- publisher
	 * -- author (or authors)
	 * -- date added to library
	 * -- genre of the book (additional fields can be added, based on your discretion).
	 * - update/modify any book details.
	 * - see list of checked-out books
	 * - see reader’s details, checked-out date, expected check-in date, number of days remaining or over the
	 * check-in date.
	 *
	 * 3. Book check-out/check-in Management Module
	 * Reader should be able to: -
	 * - search for books based on one or more of the following fields: -
	 * - title
	 * - ISBN
	 * - publisher
	 * - date added to library
	 * (books results are displayed with cover page, title and author(s))
	 * - borrow a book by checking it out. (Checked-out books must be returned within 10 days after checkout)
	 * - return a book by checking it in.
	 * - receive an email notification 2 days to the expected check-in date, if the book(s) hasn't been checked in.
	 * - notify the Librarian (email notification) when books are not returned by End-of-Day of the expected
	 *   check-in date.
	 * Things to note on this project
	 * You are required to use the above information to come up with a high fidelity prototype that caters to the
	 * client’s requirements.
	 */

	use Roli\MVP\Library;
	use WhichBrowser\Parser;
	require 'vendor\autoload.php';
	function my_plugin_activate()
	: void
	{
		/* activation code here */
		$lib    = new Library();
		$result = new Parser(getallheaders());
		echo "Testing autoload: $lib, WhichBrowser : {$result->toString()}";
	}

	register_activation_hook(__FILE__, function () {});
	// * Add actions
	add_action('init', 'my_plugin_activate', 1);