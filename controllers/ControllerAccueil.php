<?php


class ControllerAccueil
{



    private $_articleManager;
    private $_view;

    public function __construct($url){

       $this->articles();

}

public function articles(){
        $this->_articleManager = new ArticleManager();
        $articles = $this->_articleManager->getArticles();
        require_once('views/viewAccueil.php');
}

}