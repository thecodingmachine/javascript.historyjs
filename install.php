<?php
use Mouf\Html\Utils\WebLibraryManager\WebLibraryInstaller;

require_once __DIR__."/../../autoload.php";

use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// Let's init Mouf
InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

WebLibraryInstaller::installLibrary("jQueryHistory",
	array('vendor/mouf/javascript.historyjs/scripts/bundled/html4+html5/jquery.history.js'),
	array(),
	array(),
	true
);


// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();
