<?php
require "DatabasePDO.php";

$db = new DatabasePDO("localhost", "test", "test", "test");

$specificFirstnameSql = "SELECT first_name FROM persons WHERE person_id=3";
$specificFirstname = $db->getValue($specificFirstnameSql);


$firstnamesSql = "SELECT person_id, first_name FROM persons ORDER BY first_name";
$firstnames = $db->getKeyPair($firstnamesSql);


?>




<!doctype html>
<html>
	<head>
		<title>DatabasePDO test</title>
		<meta charset="utf-8" />
		<style>
			body {
				font-family: sans-serif;
				color: #444;
				font-size: 13px;
				background-color: #E9EEE8;
				text-align: center;
			}
			
			h2 {
				margin: 0 0 0.2em 0;
				color: #897;
				font-size: 1.4em;
				
			}
			h3 {
				margin: 0 0 1em 0;
				color: #bbb;
				font-size: 1.1em;
			}
			
			section {
				text-align: left;
				padding: 2em;
				box-shadow: 1px 3px 3px rgba(0, 0, 0, 0.2);
				margin: 0 auto 2em auto;
				max-width: 800px;
				background-color: #fff;
			}
			
			pre {
				margin: 0;
			}
		
		</style>
	</head>
	<body>
		<h1>DatabasePDO test</h1>

		<section>
			<h2>getValue($sql, [$values])</h2>
			<h3>return a single value</h3>
			<code><?=$specificFirstnameSql?></code>
			<pre>Returns: <?=$specificFirstname?></pre>
		</section>
		
		<section>
			<h2>getKeyPair($sql, [$values])</h2>
			<h3>return a pair of keys and values</h3>
			<code><?=$firstnamesSql?></code>
			<pre>Returns: <?print_r($firstnames)?></pre>
		</section>

	</body>
</html>


