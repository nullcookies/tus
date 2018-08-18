<?php
	$mysql = array(
		'user' => 'ucfuwr641gjrjcjk',
		'password' => '5D9dNmPDwUdKZd4W7bA',
		'host' => 'b5lqdmwhm-mysql.services.clever-cloud.com',
		'database' => 'b5lqdmwhm'
	);

	mysql_connect($mysql['host'], $mysql['user'], $mysql['password']) or die("Cannot connect to database.");
	mysql_select_db($mysql['database']);
	
	$rpc = array(
		'login' => 'RPC_login',
		'password' => 'RPC_password',
		'ip' => '127.0.0.1',
		'port' => '8332'
	);
	
	$config = array(
		'name' => 'Bitcoin play',																	// Name of your ponzi
		'title' => 'get rich!',																// Description
		'full-name' => 'Bitcoin',												// Full name of your ponzi
		'val' => 'BTC',																				// Cryptocurrency abbreviation
		'precision' => 4,
		'confirmations' => 1,																	// Minimum number of confirmations to add transaction
		'min' => 0.001,																				// Minimum pay in
		'max' => 0.25,																				// Maximum pay in
		'income' => 0.1,																			// How much money to send - default: 0.1 - 110%
		'fee' => 0.01,																				// Fee taken from pay in amount
		'payout-check' => 180,																// Time between payouts
		'ownaddress' => '32GaGpjWET6SDvypzC7UPefmuvdtmEwqYW', // Your address
		'sendback' => false,																	// What to do with txs that are over maximum or under minimum | true - send back, false - send to your address
		'ponziacc' => 'btc',																	// Name of daemon account
		'address' => '32GaGpjWET6SDvypzC7UPefmuvdtmEwqYW',			// Ponzi address
		'privkey' => '',																			// Needed in setup, private key of your address
		'blockchain-addr' => 'https://blockchain.info/en/address/',
		'blockchain-tx' => 'https://blockchain.info/en/tx/'
	);
?>