<?php
require_once("../common/core.php");
require_once("../common/connect.php");
require_once("../common/sessioncheck.php");

ClaApplication::Enter('myapp'); // load localization

// your code here


if (empty($page_title))
	$page_title = "My application";
$template = "myapp/index.html";
require_once("../common/process_template.php");