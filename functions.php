<?php

function themeConfig($form) {
    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Un thème minimaliste'), _t('标语'), _t('页头标语'));
    $form->addInput($slogan);

}
