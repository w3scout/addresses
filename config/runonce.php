<?php

/**
 * addresses
 * Module for Contao Open Source CMS (contao.org)
 *
 * Copyright (c) 2017 Darko Selesi
 *
 * @package addresses
 * @author  Darko Selesi
 * @link    http://w3scouts.com
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


if(class_exists('\\w3scouts\\addresses\\UpgradeHelper'))
{
    \w3scouts\addresses\UpgradeHelper::run();
}