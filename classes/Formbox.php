<?php

namespace BeFormbox;

class Formbox extends \BackendModule {
    
    public function generate() {
        return parent::generate();
    }
    
    public function compile() {
        
    }
    
    public function showPopup() {
        $objTemplate = new \BackendTemplate('be_formbox');
        if (\Input::post('FORM_SUBMIT') == 'formbox') {
            $objDate = new \Date();
            $objEmail = new \Email();
            $objEmail->subject = $GLOBALS['TL_CONFIG']['be_formbox_button_text'];
            $strHtml = '<p>User: ' . \Input::post('username') . '</p>';
            $strHtml .= '<p>Site: ' . \Input::post('url') . '</p>';
            $strHtml .= '<p>Datum: ' . $objDate->datim . '</p>';
            $strHtml .= '<p>Message: ' . \Input::post('message') . '</p>';
            $objEmail->html =  $strHtml;
            $objEmail->sendTo($GLOBALS['TL_CONFIG']['be_formbox_email']);
            $objTemplate->strMessageSent = $GLOBALS['TL_CONFIG']['be_formbox_message_sent'];
        }
        $objUser = \BackendUser::getInstance();
        $objTemplate->strFormUrl = 'contao/main.php?do=settings&key=be-formbox&nb=1&popup=1'; 
        $objTemplate->strUrl = base64_decode(\Input::get('link'));
        $objTemplate->strUser = $objUser->username;
        $objTemplate->strFormboxMessage = $GLOBALS['TL_CONFIG']['be_formbox_message'];
        return $objTemplate->parse();
    }
}