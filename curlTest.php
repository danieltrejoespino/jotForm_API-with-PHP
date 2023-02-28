<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'ddd';

include "jotform-api-php/JotForm.php";
    
$jotformAPI = new JotForm("3cbcb9317051535b1864a3619ed33eca");
$forms = $jotformAPI->getForms();

foreach ($forms as $form) {
    print $form["title"];
}
echo '<hr>';
// $submission = $jotformAPI->getSubmission("230506419928056");
// var_dump($submission);

$form = $jotformAPI->getForm("230506419928056");

var_dump($form);