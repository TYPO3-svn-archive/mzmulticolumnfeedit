<?php

if (!defined ('TYPO3_MODE')) die ('Access denied.');

$TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/multicolumn/pi1/class.tx_multicolumn_pi1.php'] = t3lib_extMgm::extPath($_EXTKEY).'class.ux_tx_multicolumn_pi1.php';

?>
