<?php

/**
 * 
 *  Контроллер главной страницы.
 * 
 */

function testAction(){
    echo 'IndexControllers.php > testAction';
}


/**
 * 
 * Формирование главной страницы сайта.
 * 
 * @param object $smarty шаблонизатор.
 */

function indexAction($smarty){
    
    $smarty->assign('pageTitle', 'Главная страница сайта');
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}