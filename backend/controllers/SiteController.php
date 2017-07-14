<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\AuthAssignment;
use backend\models\UserSearch;
use backend\models\BranchSearch;
use backend\models\CompanySearch;
use backend\models\DepartmentSearch;
use backend\models\PermissionSearch;
use backend\models\PassignmentSearch;

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
        $userModel = new UserSearch();
        $allUser = $userModel->find()->limit('3')->All();
       
        $branchModel = new BranchSearch();
        $allBranch = $branchModel->find()->limit('3')->All();
 
        $companyModel = new CompanySearch();
        $allCompany = $companyModel->find()->limit('3')->All();

        $departmentModel = new DepartmentSearch();
        $allDepartment = $departmentModel->find()->limit('3')->All();

        $auth = Yii::$app->authManager;
        $allRoles=$auth->getRoles();

        $auth = Yii::$app->authManager;
        $permission=$auth->getPermissions();       
       
        return $this->render('index', [
            'allUser' => $allUser,
            'allBranch' => $allBranch,
            'allCompany' => $allCompany,
            'allDepartment' => $allDepartment,
            'allRoles' => $allRoles,
            'allpermission' => $permission,
        ]);     
    }

    /**
     * Login action.
     *
     * @return string
     **/

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
                Yii::$app->session->setFlash('info', "You are not authorised user.");
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
