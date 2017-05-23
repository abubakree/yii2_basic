<?php

 namespace app\controllers;

 class HelloController extends \yii\web\Controller
 {

   public function actionIndex(){
     $weiqth = 3;
      $weiqth1 = 'abu';
    return  $this->render('index',[
         'firstname' => $weiqth1,
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
