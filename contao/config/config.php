<?php

$GLOBALS['TL_HOOKS']['outputBackendTemplate']['be-formbox'] = array('BeFormbox\Formbox', 'outputBackendTemplate');

$GLOBALS['BE_MOD']['system']['undo']['be-formbox'] = array('BeFormbox\Formbox', 'showPopup');