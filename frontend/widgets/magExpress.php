<?php
namespace frontend\widgets;

use yii\base\Widget;

class MagExpress extends Widget{
    public function init(){

    }

    public function run(){
        return $this->render('header');
    }
}