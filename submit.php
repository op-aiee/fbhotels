<?php
// Include FB config file && User class
require_once 'fbConfig.php';
require_once 'User.php';
include 'head.php';
?>
 <div class="container">
 	<div class="row">
 		<div class="col-sm-6 col-sm-push-3">
 			<div class="panel-default">
 			<div class="panel-heading">
 				<h2>Köszönjük, hogy szavazott!</h2>
 			</div>
 			<div class="panel-body">
 			<h3>Ossze meg az oldalt ismerőseivel is</h3>
			<a href="javascript:fbShare('https://www.facebook.com/Omtestshop-1858016931148454', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)" class="btn btn-info btn-lg btn-block">Megosztom</a>
 			</div>
 		</div>
 	</div>
 </div>