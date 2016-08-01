<?php

namespace BeFormbox;

class Formbox  {

    public function showPopup() {
        $objTemplate = new \BackendTemplate('be_formbox');
        $objUser = \BackendUser::getInstance();
        if (\Input::post('FORM_SUBMIT') == 'formbox') {
            $objDate = new \Date();
            $objEmail = new \Email();
            $objEmail->subject = $GLOBALS['TL_CONFIG']['websiteTitle'] . ' - ' . $GLOBALS['TL_CONFIG']['be_formbox_button_text'];
            $strHtml = '<p>User: ' . $objUser->username . ' (' . $objUser->email . ')</p>';
            $strHtml .= '<p>Site: ' . \Input::post('url') . '</p>';
            $strHtml .= '<p>Datum: ' . $objDate->datim . '</p>';
            $strHtml .= '<p>Message: ' . \Input::post('message') . '</p>';
            $objEmail->html =  $strHtml;
            $objEmail->replyTo($objUser->name . ' <' . $objUser->email . '>');
            $objEmail->sendTo($GLOBALS['TL_CONFIG']['be_formbox_email']);
            $objTemplate->strMessageSent = $GLOBALS['TL_CONFIG']['be_formbox_message_sent'];
        }
        $objTemplate->strFormUrl = 'contao/main.php?do=undo&key=be-formbox&nb=1&popup=1'; 
        $objTemplate->strUrl = base64_decode(\Input::get('link'));
        $objTemplate->strFormboxMessage = $GLOBALS['TL_CONFIG']['be_formbox_message'];
        return $objTemplate->parse();
    }

    public function outputBackendTemplate($content, $template)
    {
        $objUser = \BackendUser::getInstance();
        if ($objUser->username != '' && \Environment::get('script') == 'contao/main.php') {
            $objTemplate = new \BackendTemplate('be_formbox_button');
            $objTemplate->strButtonText = $GLOBALS['TL_CONFIG']['be_formbox_button_text'];
            $objTemplate->strLink = 'contao/main.php?do=undo&key=be-formbox&popup=1&nb=1&rt=' . REQUEST_TOKEN . '&link=' . base64_encode(\Environment::get('request'));
            if (! \Input::get('popup')) {
                $content = preg_replace('~<body[^>]*>~', '$0' . $objTemplate->parse(), $content);
            }
            $content = str_replace('</head>', '<link rel="stylesheet" href="system/modules/be-formbox/assets/css/backend.css"></head>', $content);
        }
        return $content;
    }
}