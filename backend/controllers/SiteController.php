<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\AuthAssignment;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout='loginLayout';
        if (!Yii::$app->user->isGuest) {
            $this->redirect(['site/login']);
        }
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $userData=Yii::$app->user->identity;
            $id=Yii::$app->user->identity->id;
            $model1 = $this->findModel($id); 

            if($model1['item_name']!='admin'){             
                Yii::$app->user->logout();
                return $this->redirect(['site/login']);
            }else{
                return $this->redirect(['site/index']);

            }

        } else { 
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {

        Yii::$app->user->logout();

        return $this->redirect(['site/login']);
    }

    protected function findModel($id)
    {
        $model = AuthAssignment::find()
        ->where(['user_id' => $id])
        ->one();
        if($model!=''){
        return $model->toArray();
    }else{
        return $model;

    }
    }
}
