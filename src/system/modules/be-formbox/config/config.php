<?php

$GLOBALS['TL_HOOKS']['outputBackendTemplate']['be-formbox'] = array('BeFormbox\Hooks', 'outputBackendTemplate');

$GLOBALS['BE_MOD']['system']['undo']['be-formbox'] = array('Formbox', 'showPopup');