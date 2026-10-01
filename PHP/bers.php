<?php

// Author: Amr A. AlKhuffash 
// Last Modified: October 1st, 2026
// Compatibility: version > 8.4
// An application Back-End Routing Script


switch ($_SERVER['REQUEST_METHOD']) {
	case "GET": /*do somethig*/ break;
	case "POST": /*do somethig*/ break;
	case "PUT": /*do somethig*/ break;
	default: {
		echo "The actual method was not included in the options.";
		http_response_code(404);
	}
}
exit();
?>