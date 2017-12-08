<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libro".
 *
 * @property string $id_libro
 * @property string $id_autor
 * @property string $id_categoria
 * @property string $id_editorial
 * @property string $isbn
 * @property string $titulo
 * @property integer $precio
 *
 * @property Autor $idAutor
 * @property Categoria $idCategoria
 * @property Editorial $idEditorial
 */
class Libro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'libro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_autor', 'id_categoria', 'id_editorial', 'isbn', 'titulo', 'precio'], 'required'],
            [['id_autor', 'id_categoria', 'id_editorial', 'precio'], 'integer'],
            [['isbn'], 'string', 'max' => 20],
            [['titulo'], 'string', 'max' => 30],
            [['id_autor'], 'exist', 'skipOnError' => true, 'targetClass' => Autor::className(), 'targetAttribute' => ['id_autor' => 'id_autor']],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id_categoria' => 'id_categoria']],
            [['id_editorial'], 'exist', 'skipOnError' => true, 'targetClass' => Editorial::className(), 'targetAttribute' => ['id_editorial' => 'id_editorial']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_libro' => 'Número Libro',
            'id_autor' => 'Id Autor',
            'id_categoria' => 'Id Categoria',
            'id_editorial' => 'Id Editorial',
            'isbn' => 'Isbn',
            'titulo' => 'Titulo',
            'precio' => 'Precio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAutor()
    {
        return $this->hasOne(Autor::className(), ['id_autor' => 'id_autor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEditorial()
    {
        return $this->hasOne(Editorial::className(), ['id_editorial' => 'id_editorial']);
    }
}
