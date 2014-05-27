<?php 
// Include the TextKey classes
include_once("../textkey_soap.php");

// Setup the API call parameters
$tempapikey = "E4E334BA-0A8F-4DA0-9E2B-08F77B380E60";
$minutesDuration = 2;

// Set the authentication
$apikey = "PUT API KEY HERE";

// Create a textkey object
$tk = new textKey("", "", "", "", $apikey);

// Handle the operation
$textkey_result = $tk->perform_RemoveTempAPIKey($tempapikey, $minutesDuration);

// Show the textkey API payload object
print_r($textkey_result);
echo "<HR>";

// Handle the results
if ($textkey_result->errorDescr == "") {
    $tkResultsArr = get_object_vars($textkey_result);
  	$results = "";
  foreach($tkResultsArr as $key => $value) { 
        $results .= $key . ': ' . $value . "<BR />";
    } 			
}
else {
    $results = 'Error: ' . $textkey_result->errorDescr . "<BR />";
}
echo $results;
?>