<?php 
// Include the TextKey classes
include_once("../textkey_soap.php");

// Setup the API call parameters
$Command = "Query";
$CellNumber = "1231231234";
$OwnerFName = "";
$OwnerLName = "";
$Suppl1 = "";
$Suppl2 = "";
$RegUserID = "";
$isHashed = TRUE;
$PinCode = "";
$DistressPinCode = "";
$TextKeyMode = "TextKeyOnly";
$ReceiveMode = "AnyCode";
$Ownerbirthdate = "";
$Gender = "";
$q1 = "";
$a1 = "";
$q2 ="";
$a2 = "";
$q3 = "";
$a3 = "";

// Set the authentication
$apikey = "PUT API KEY HERE";

// Create a textkey object
$tk = new textKey("", "", "", "", $apikey);

// Handle the operation
$textkey_result = $tk->perform_registerTextKeyUserCSA($Command, $CellNumber, $OwnerFName, $OwnerLName, $Suppl1, $Suppl2, $Ownerbirthdate, $Gender, $RegUserID, $isHashed, $PinCode, $DistressPinCode, $q1, $a1, $q2, $a2, $q3, $a3, $TextKeyMode, $ReceiveMode);

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