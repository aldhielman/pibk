<?php

namespace app\controllers;

use app\models\RPA;
use app\models\search\RPASearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RpaController implements the CRUD actions for RPA model.
 */
class RpaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all RPA models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RPASearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RPA model.
     * @param int $uuid ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($uuid)
    {
        return $this->render('view', [
            'model' => $this->findModel($uuid),
        ]);
    }

    /**
     * Creates a new RPA model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Rpa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'uuid' => $model->uuid]);
            }
            die(var_dump($model->getErrors()));
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RPA model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $uuid ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($uuid)
    {
        $model = $this->findModel($uuid);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RPA model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $uuid ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($uuid)
    {
        $this->findModel($uuid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RPA model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $uuid ID
     * @return RPA the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uuid)
    {
        if (($model = RPA::findOne(['uuid' => $uuid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
