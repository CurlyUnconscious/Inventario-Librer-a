<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "editorial".
 *
 * @property string $id_editorial
 * @property string $editorial
 *
 * @property Libro[] $libros
 */
class Editorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'editorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['editorial'], 'required'],
            [['editorial'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_editorial' => 'Número Editorial',
            'editorial' => 'Editorial',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibros()
    {
        return $this->hasMany(Libro::className(), ['id_editorial' => 'id_editorial']);
    }
}
