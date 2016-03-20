<?php

function themeConfig($form) {
    $slogan = new Typecho_Widget_Helper_Form_Element_Text('slogan', NULL, _t('Un thème minimaliste'), _t('站点描述'), _t('站点描述将显示在网页头部.'));
    $form->addInput($slogan);

}
