<?php
if (!defined('INSTALL_PROGRESS'))
	die("This file cannot be executed directly");

if (!isset($installer))
	throw new Exception("Install options are not defined");
/** @var $installer Claromentis\Setup\SetupFacade */

$application_code = 'myapp';

$admin_panel = new \Claromentis\Setup\AdminPanel();
$admin_panel->Create($application_code, "../{$application_code}/admin.php", array('name' => 'My application', 'css_class' => 'icon-cargo'));

/** @var $installer SetupFacade */
$config = $installer->GetConfigEditor();
$config->AddText('$cfg_cla_plugins[] = "\\Claromentis\\Myapp\\Plugin";');
