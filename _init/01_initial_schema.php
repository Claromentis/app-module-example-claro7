<?php
/** @var $migrations \Claromentis\Setup\SetupFacade */
$db = $migrations->GetDb();


$table_descr = array(
	'id'            => "IDENTITY",
	'title'         => "VARCHAR(255) NULL",
	'description'   => "VARCHAR_MAX NULL",
);
$db->CreateTable('myapp_category', $table_descr, true);


$table_descr = array(
	'id'            => "IDENTITY",
	'title'         => "VARCHAR(255) NULL",
	'description'   => "VARCHAR_MAX NULL",
	'category_id'	=> "INT NOT_NULL",
	'status'        => "INT NOT_NULL",
);
$db->CreateTable('myapp_object', $table_descr, true);
