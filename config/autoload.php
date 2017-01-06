<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Addresses
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

ClassLoader::addNamespaces(array
(
    'w3scouts\addresses',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'w3scouts\addresses\Address' => 'system/modules/addresses/classes/Address.php',
));
