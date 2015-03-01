<?php

$GLOBALS['TL_DCA']['tl_settings']['fields']['be_formbox_button_text'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['be_formbox_button_text'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array(
        'mandatory' => true,
        'maxlength' => 255,
        'tl_class' => 'w50'
    )
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['be_formbox_email'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['be_formbox_email'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array(
        'mandatory' => true,
        'maxlength' => 255,
        'tl_class' => 'w50'
    )
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['be_formbox_message'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['be_formbox_message'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => array(
        'mandatory' => true,
        'rte' => 'tinyMCE',
        'tl_class' => 'clr'
    )
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['be_formbox_message_sent'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_settings']['be_formbox_message_sent'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => array(
        'mandatory' => true,
        'rte' => 'tinyMCE',
        'tl_class' => 'clr'
    )
);

if (substr($GLOBALS['TL_DCA']['tl_settings']['palettes']['default'], -1) != ';') {
    $GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';';
}
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= '{be_formbox_lgend},be_formbox_button_text,be_formbox_email,be_formbox_message,be_formbox_message_sent;';
