<?php
/*
** Output Settings
*/
define('OUTPUT_PLAYLOAD', 0);				// Just show the output payload
define('OUTPUT_LIMITED', 1);				// Show more details about the API call
define('OUTPUT_FULL', 2);					// Show all detials about the API call

/*
** Display Settings
*/
define('DEBUGGING', false);					// Turn this on to show output
define('OUTPUT_STATE', OUTPUT_FULL);		// Set the output level

define('TK_NEWLINE', "<BR>");				// Set the character with a newline in the output

/*
** TextKey Settings
*/
// TextKey API
define('TK_API', 'PUT YOUR API KEY HERE');
define('TK_DISPLAY_API', TK_API);

// TextKey Header settings
define('TK_UID', 'PUT YOUR UID HERE');
define('TK_PWD', 'PUT YOUR PASSWORD HERE');
define('TK_DISPLAY_UID', TK_UID);
define('TK_DISPLAY_PWD', TK_PWD);

// If testing with no campaign setup
define('TK_CAMPAIGN', '');
define('TK_KEYWORD', '');

// TextKey SOAP paths
define('TK_WSDL', 'https://secure.textkey.com/ws/textkey.asmx?wsdl');
define('TK_NS', 'https://secure.textkey.com/services/');

// TextKey REST path
define('TK_REST', 'https://secure.textkey.com/REST/TKRest.asmx/');
?>