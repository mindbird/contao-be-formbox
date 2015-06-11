<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Be-formbox
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'BeFormbox',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'BeFormbox\Hooks' => 'system/modules/be-formbox/classes/Hooks.php',
	'BeFormbox\Formbox' => 'system/modules/be-formbox/classes/Formbox.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_formbox_button' => 'system/modules/be-formbox/templates',
	'be_formbox'        => 'system/modules/be-formbox/templates',
));
