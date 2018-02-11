<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_kabupaten_kota".
 *
 * @property integer $kab_id
 * @property string $nama
 * @property integer $propinsi_id
 * @property integer $kab_kodya
 *
 * @property TbPropinsi $propinsi
 */
class TbKabupatenKota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_kabupaten_kota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'propinsi_id'], 'required'],
            [['propinsi_id', 'kab_kodya'], 'integer'],
            [['nama'], 'string', 'max' => 150],
            [['propinsi_id'], 'exist', 'skipOnError' => true, 'targetClass' => TbPropinsi::className(), 'targetAttribute' => ['propinsi_id' => 'propinsi_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kab_id' => 'Kab ID',
            'nama' => 'Nama',
            'propinsi_id' => 'Propinsi ID',
            'kab_kodya' => 'Kab Kodya',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPropinsi()
    {
        return $this->hasOne(TbPropinsi::className(), ['propinsi_id' => 'propinsi_id']);
    }
}
