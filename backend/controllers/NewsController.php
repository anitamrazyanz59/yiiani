<?php

namespace backend\controllers;

use Yii;
use common\models\News;
use common\models\Category;
use common\models\NewsCategory;
use backend\models\NewsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends AdminController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();



        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $model->upload();
            $news_category = $_POST['News']['categories'];
            if($news_category) {
                foreach($news_category as $cat_id) {
                    $news_category = new NewsCategory();
                    $news_category->news_id = $model->id;
                    $news_category->category_id = $cat_id;
                    $news_category->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {

            $categories_arr = Category::find()->asArray()->all();
            $categories = [];
            foreach($categories_arr as &$cat) {
                $categories[$cat['id']] = $cat['name'];
            }
            $model->scenario = 'create';
            return $this->render('create', compact('model', 'categories'));
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        //if($_POST){print_r($_POST); die;}
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->published = date('Y-m-d H:i:s', strtotime($model->published));
            $model->upload();
            $model->save();
            $news_categories = $_POST['News']['categories'];
            NewsCategory::deleteAll(['news_id' => $model->id]);
            if($news_categories) {
                foreach($news_categories as $cat_id) {
                    $news_category = new NewsCategory();
                    $news_category->news_id = $model->id;
                    $news_category->category_id = $cat_id;
                    $news_category->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $categories_arr = Category::find()->asArray()->all();
            $categories = [];
            foreach($categories_arr as &$cat) {
                $categories[$cat['id']] = $cat['name'];
            }
            foreach($model->newsCategories as $rel) {
                $model->categories[] = $rel->category_id;
            }
            return $this->render('update', compact('model', 'categories'));
        }
    }



    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        unlink(Yii::getAlias('@frontend') .'/web/uploads/'.$id.'.jpg');
        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
