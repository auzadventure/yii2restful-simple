<?php

namespace micro\controllers;

use Yii;
use yii\web\Controller;
use micro\models\Post;

class PostController extends Controller
{

	//return an error
	private function resError($error='') {
		return ['res'=>'error','msg'=>$error];
	}


	public function actionIndex() {
		$models = Post::find()->all();
		return $this->asJson($models);
	}

	public function actionView($id){
		return $this->asJson(Post::findOne($id));
	}



	public function actionDelete($id) {
		$model = Post::findOne($id)->delete();

		if($model==null) $response = ['res'=>401];
		else $response = ['res'=>200];

		return $this->asJson($response);
	}

	public function actionDeleteAll() {
		Yii::$app->db->createCommand()->truncateTable('post')->execute();
		return $this->asJson(['ok'=>200,'msg'=>'Table Post Truncated']);
	}


	public function actionCreate() {

		$model = new Post();
		$post = Yii::$app->request->post();

		if($model->load($post,'') && $model->save()) {
			return $this->asJson($model);
		} 
		else $this->asJson($this->getError());
	}

	public function actionUpdate($id) {
		$model = Post::findOne($id);
		$post = Yii::$app->request->post();
		
		if($model->load($post,'') && $model->save()) {
			return $this->asJson($model);
		} 
		
		else $this->asJson($this->getError());
	}



}