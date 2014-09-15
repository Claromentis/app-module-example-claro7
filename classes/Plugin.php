<?php

namespace Claromentis\Myapp;
use ClaPlugin;
use ClaPluginAuditHandler;
use Claromentis\Core\Event\EventSubscriberInterface;
use Claromentis\Core\REST\ApplicationsFilterEvent;

/**
 * Learning app plugin
 */
class Plugin implements ClaPlugin, EventSubscriberInterface, ClaPluginAuditHandler
{
	/**
	 * Returns an array of event names this subscriber wants to listen to.
	 *
	 * The array keys are event names and the value can be:
	 *
	 *  * The method name to call (priority defaults to 0)
	 *  * An array composed of the method name to call and the priority
	 *  * An array of arrays composed of the method names to call and respective
	 *    priorities, or 0 if unset
	 *
	 * For instance:
	 *
	 *  * array('eventName' => 'methodName')
	 *  * array('eventName' => array('methodName', $priority))
	 *  * array('eventName' => array(array('methodName1', $priority), array('methodName2'))
	 *
	 * @return array The event names to listen to
	 */
	public static function getSubscribedEvents()
	{
		return array(
			'rest.applications_filter' => 'RestApplicationsFilter',
		);
	}

	public function RestApplicationsFilter(ApplicationsFilterEvent $e)
	{
		$e->applications['myapp'] = '\\Claromentis\\Myapp\\Rest\\MyAppRest';
	}

	/**
	 * Returns two-elements array where first element is application code, second is application name
	 *
	 * @return array($app_code, $app_name)
	 */
	public function GetAuditApplication()
	{
		return array('myapp', __('My application'));
	}

	/**
	 * Returns associative array of audit events within this application.
	 * Keys are events codes, values are events names
	 *
	 * @return array
	 */
	public function GetAuditEvents()
	{
		// TODO: Implement GetAuditEvents() method.
		return array();
	}

	/**
	 * Returns object name by its id and event code
	 *
	 * @param string $event_code
	 * @param int $object_id
	 *
	 * @return string
	 */
	public function GetAuditObjectName($event_code, $object_id)
	{
		// TODO: Implement GetAuditObjectName() method.
		return '';
	}
}
