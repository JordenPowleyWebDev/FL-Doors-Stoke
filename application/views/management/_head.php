<?php

/**
 * ------------------------------------------------
 * Management GUI
 * ------------------------------------------------
 * Head Partial View
 * ------------------------------------------------
 */


// Check for passed variables
if(isset($pageData) && !empty($pageData)){
    $pageData['page_title'] = (array_key_exists('page_title', $pageData) && isset($pageData['page_title']) && !empty($pageData['page_title'])) ? $pageData['page_title'] : "";
    $pageData['page_id'] = (array_key_exists('page_id', $pageData) && isset($pageData['page_id']) && !empty($pageData['page_id'])) ? $pageData['page_id'] : "";
} else{
    $pageData['page_title'] = "Management";
    $pageData['page_id'] = "";
}

?>
<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
    <title><?php echo $pageData['page_title']; ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="author" content="Jorden Powley">
    <meta name="description" content="Management area. Manages products, user and display reporting.">
    <meta name="keywords" content="management,area,admin,products,reporting,users">

</head>
<body id="<?php echo $pageData['page_id'];?>">