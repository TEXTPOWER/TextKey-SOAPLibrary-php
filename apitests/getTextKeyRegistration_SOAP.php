<?php 
// Include the TextKey classes
include_once("../textkey_soap.php");

// Setup the API call parameters
$RetrieveBy = "ByCellNumber";
$CellNumber = "1231231234";
$Suppl1 = "";
$Suppl2 = "";

// Set the authentication
$apikey = "PUT API KEY HERE";

// Create a textkey object
$tk = new textKey("", "", "", "", $apikey);

// Handle the operation
$textkey_result = $tk->perform_getTextKeyRegistration($RetrieveBy, $CellNumber, $Suppl1, $Suppl2);

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