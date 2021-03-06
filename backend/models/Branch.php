<?php

namespace backend\models;


use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\AttributeBehavior;


/**
 * This is the model class for table "branch".
 *
 * @property integer $branch_id
 * @property integer $company_fk_id
 * @property string $branch_name
 * @property string $branch_created
 * @property string $branch_status
 *
 * @property Company $companyFk
 * @property Department[] $departments
 */
class Branch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_fk_id', 'branch_name', 'branch_created'], 'required'],
          
            [['branch_created'], 'safe'],
            [['branch_status'], 'string'],
            [['branch_name'], 'string', 'max' => 255],
            [['company_fk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_fk_id' => 'company_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'branch_id' => 'Branch ID',
            'company_fk_id' => 'Company Name',
            'branch_name' => 'Branch Name',
            'branch_created' => 'Branch Created',
            'branch_status' => 'Branch Status',
        ];
    }
    public function afterFind ()
    {
      
        $this->branch_created = strtotime ($this->branch_created);
        $this->branch_created = date ('Y-m-d', $this->branch_created);

        parent::afterFind ();
    }

    public function behaviors()
    {
        return [
            [
                'class' => AttributeBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['branch_created'], // update 1 attribute 'created' OR multiple attribute ['created','updated']
                    //ActiveRecord::EVENT_BEFORE_UPDATE => 'updated', // update 1 attribute 'created' OR multiple attribute ['created','updated']
                ],
                'value' => function ($event) {
                    return date('Y-m-d H:i:s', strtotime($this->branch_created));
                },
            ],
        ];
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
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['branch_fk_id' => 'branch_id']);
    }
}
