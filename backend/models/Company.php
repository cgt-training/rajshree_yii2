<?php

namespace backend\models;
use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\AttributeBehavior;
/**
use yii\behaviors\AttributeBehavior;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_email
 * @property string $company_address
 * @property string $company_profile
 * @property string $company_created
 * @property string $company_status
 *
 * @property Branch[] $branches
 * @property Department[] $departments
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name', 'company_email', 'company_address', 'company_profile', 'company_created'], 'required'],
            [['company_email'], 'email'],
            [['company_created'], 'safe'],
            [['company_status'], 'string'],
            [['company_name', 'company_email', 'company_address', 'company_profile'], 'string', 'max' => 255],
        ];
    }

public function afterFind ()
    {
      
        $this->company_created = strtotime ($this->company_created);
        $this->company_created = date ('Y-m-d', $this->company_created);

        parent::afterFind ();
    }


     public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['company_created'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                    //ActiveRecord::EVENT_BEFORE_UPDATE => 'updated', // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d H:i:s', strtotime($this->company_created));
                },
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_email' => 'Company Email',
            'company_address' => 'Company Address',
            'company_profile' => 'Company Profile',
            'company_created' => 'Company Created',
            'company_status' => 'Company Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranches()
    {
        return $this->hasMany(Branch::className(), ['company_fk_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['company_fk_id' => 'company_id']);
    }
}
