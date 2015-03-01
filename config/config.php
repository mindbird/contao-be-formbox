<?php

$GLOBALS['TL_HOOKS']['outputBackendTemplate']['be-formbox'] = array('BeFormbox\Hooks', 'outputBackendTemplate');

$GLOBALS['BE_MOD']['system']['settings']['be-formbox'] = array('Formbox', 'showPopup');