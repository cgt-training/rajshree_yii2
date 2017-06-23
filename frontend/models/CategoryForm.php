<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CategoryForm extends Model
{

    public $category_title;

    public function rules()
    {
    	
        return [
            [['category_title'], 'required'],
        ];
    }
}