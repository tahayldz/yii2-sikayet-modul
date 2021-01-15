<?php

namespace tahayldz\Sikayet\models;

use Yii;

/**
 * This is the model class for table "sikayet".
 *
 * @property int $id
 * @property string $isim
 * @property string $email
 * @property string $sikayetTuru
 * @property string $sikayet
 *
 * @property SikayetTurleri $sikayetTuru0
 */
class Sikayet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sikayet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim', 'email', 'sikayetTuru', 'sikayet'], 'required'],
            [['sikayet'], 'string'],
            [['isim', 'email', 'sikayetTuru'], 'string', 'max' => 50],
            [['sikayetTuru'], 'exist', 'skipOnError' => true, 'targetClass' => SikayetTurleri::className(), 'targetAttribute' => ['sikayetTuru' => 'sikayetTur']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
            'email' => 'Email',
            'sikayetTuru' => 'Sikayet Turu',
            'sikayet' => 'Sikayet',
        ];
    }

    /**
     * Gets query for [[SikayetTuru0]].
     *
     * @return \yii\db\ActiveQuery|SikayetTurleriQuery
     */
    public function getSikayetTuru0()
    {
        return $this->hasOne(SikayetTurleri::className(), ['sikayetTur' => 'sikayetTuru']);
    }

    /**
     * {@inheritdoc}
     * @return SikayetQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SikayetQuery(get_called_class());
    }
}
