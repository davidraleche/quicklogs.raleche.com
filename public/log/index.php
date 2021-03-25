
<?php
require_once __DIR__.'/../../vendor/autoload.php';




/**
 * Extend Logs
 *
 * @author David Raleche
 * @date 21 March 2021
 *
 * Class QuickAuthentication - Dependency Injection
 * Class QuickLogs - parse errorLogs
 */


$userAllowed = array('admin' => 'david');
$authenticationInstance = new \Yana\Authentication\QuickAuthentication($userAllowed);
$quickLogs = new \Yana\Logs\QuickLogs($authenticationInstance);

/**
 * @todo
 * - Define Paths (multiple) of error Log
 * - Define password
 * - Define links in bootstraps
 * - bootstrap grid for each rows
 */

$quickLogs->process();
