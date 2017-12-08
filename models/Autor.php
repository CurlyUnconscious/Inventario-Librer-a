<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autor".
 *
 * @property string $id_autor
 * @property string $nombre
 * @property string $apellidos
 *
 * @property Libro[] $libros
 */
class Autor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos'], 'required'],
            [['nombre', 'apellidos'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_autor' => 'Numero de Autor',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibros()
    {
        return $this->hasMany(Libro::className(), ['id_autor' => 'id_autor']);
    }
}
