<?php

// Author: Amr A. AlKhuffash 
// Last Modified: October 2nd, 2026
// Compatibility: version > 8.4
// An application Back-End Routing Script based on an ID that is sent by the client
// this ID might be a task to be done or a resource to be sent back. In the script below,
// this ID is named reqid

if (array_key_exists('rqstid', $_GET)) {
	$reqid = $_GET["rqstid"];
	if(!is_null($reqid)) {
		switch($reqid) {
			case "reqid1": /*Do the thing that is required for Request 1*/ break;
			case "reqid2": /*Do the thing that is required for Request 2*/ break;
			case "reqid3": /*Do the thing that is required for Request 3*/ break;
			default: /*Do the default thing*/
		}
}
else {
	/*Either a default action (function or resource, like home page
	or some function), or an error that need to be reported.*/
}
exit();
?>