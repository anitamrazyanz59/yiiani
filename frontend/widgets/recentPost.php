<?php
namespace frontend\widgets;

use yii\base\Widget;

class RecentPost extends Widget{

    public function init(){

    }

    public function run(){
        return $this->render('recentPost');
    }
}