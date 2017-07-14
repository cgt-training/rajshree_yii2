<?php

namespace backend\models;


use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\AttributeBehavior;

/**
 * This is the model class for table "department".
 *
 * @property integer $department_id
 * @property integer $company_fk_id
 * @property integer $branch_fk_id
 * @property string $department_name
 * @property string $department_created
 * @property string $department_status
 *
 * @property Company $companyFk
 * @property Branch $branchFk
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_fk_id', 'branch_fk_id', 'department_name', 'department_created'], 'required'],
           
            [['department_status'], 'string'],
            [['department_name'], 'string', 'max' => 255],
            [['company_fk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_fk_id' => 'company_id']],
            [['branch_fk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_fk_id' => 'branch_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'department_id' => 'Department ID',
            'company_fk_id' => 'Company Name',
            'branch_fk_id' => 'Branch Name',
            'department_name' => 'Department Name',
            'department_created' => 'Department Created',
            'department_status' => 'Department Status',
        ];
    }

    public function behaviors()
    {   

        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['department_created'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                    //ActiveRecord::EVENT_BEFORE_UPDATE => 'updated', // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d H:i:s', strtotime($this->department_created));
                },
            ],
        ];
    }

    public function afterFind ()
    {
      
        $this->department_created = strtotime ($this->department_created);
        $this->department_created = date ('Y-m-d', $this->department_created);

        parent::afterFind ();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyFk()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_fk_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    public function getBranchFk()
    {
        return $this->hasOne(Branch::className(), ['branch_id' => 'branch_fk_id']);
    }
}
