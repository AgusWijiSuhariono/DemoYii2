<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_propinsi".
 *
 * @property integer $propinsi_id
 * @property string $nama
 * @property integer $dalam_negeri
 * @property string $created_at
 * @property string $updated_at
 *
 * @property TbKabupatenKota[] $tbKabupatenKotas
 */
class TbPropinsi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_propinsi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['dalam_negeri'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'propinsi_id' => 'Propinsi ID',
            'nama' => 'Nama',
            'dalam_negeri' => 'Dalam Negeri',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbKabupatenKotas()
    {
        return $this->hasMany(TbKabupatenKota::className(), ['propinsi_id' => 'propinsi_id']);
    }
}
