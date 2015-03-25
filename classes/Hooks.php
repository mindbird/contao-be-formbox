<?php
namespace BeFormbox;

class Hooks
{

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
