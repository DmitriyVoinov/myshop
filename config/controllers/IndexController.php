<?php

/**
 * 
 *  Контроллер главной страницы.
 * 
 */

// Подключаем модели
include_once '../models/CategoriesModel.php';
//


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
    
    $rsCategories = getAllMainCatsWithChildren();
   // d($rsCategories);
    
    
    $smarty->assign('pageTitle', 'Главная страница сайта');
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}