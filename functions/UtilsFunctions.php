<?php
function includeJQuery(){
	$html=<<<SCRIPT
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
SCRIPT;
	echo $html;
}