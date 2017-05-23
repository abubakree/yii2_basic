<?php

 namespace app\controllers;

 class HelloController extends \yii\web\Controller
 {

   public function actionIndex(){
     $weiqth = 3;
    return  $this->render('index',[
         'firstname' => 'abu',
      'firstname1' => '11',
      'weiqth' => $weiqth
   ]
);





   }
   public function actionProfile(){
    return  $this->render('Profile');
  }

 }


 ?>
