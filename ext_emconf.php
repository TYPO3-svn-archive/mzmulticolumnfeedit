<?php

########################################################################
# Extension Manager/Repository config file for ext "mzmulticolumnfeedit".
#
# Auto generated 30-12-2010 10:51
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'FE Edit for multicolumn',
	'description' => 'Adds FrontendEdit support to multicolumn extension',
	'category' => 'fe',
	'author' => 'Markus Zuercher',
	'author_email' => 'mzmulticolumnfeedit@markus-zuercher.ch',
	'shy' => '',
	'dependencies' => 'multicolumn,feedit',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.1',
	'constraints' => array(
		'depends' => array(
			'multicolumn' => '2.1.2',
			'feedit' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:9:"ChangeLog";s:4:"3a3a";s:10:"README.txt";s:4:"ee2d";s:31:"class.ux_tx_multicolumn_pi1.php";s:4:"4fb6";s:12:"ext_icon.gif";s:4:"e000";s:17:"ext_localconf.php";s:4:"b068";s:14:"doc/manual.pdf";s:4:"26b7";s:14:"doc/manual.sxw";s:4:"91fa";s:14:"doc/manual.txt";s:4:"a366";s:19:"doc/wizard_form.dat";s:4:"1b52";s:20:"doc/wizard_form.html";s:4:"6ec2";}',
	'suggests' => array(
	),
);

?>