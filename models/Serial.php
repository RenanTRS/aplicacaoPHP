<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "serialnumber_data".
 *
 * @property int $id
 * @property string $sn
 * @property int $product_data_id
 * @property string $type
 *
 * @property ProductData $productData
 */
class Serial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'serialnumber_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sn', 'product_data_id', 'type'], 'required'],
            [['product_data_id'], 'integer'],
            [['sn', 'type'], 'string', 'max' => 30],
            [['sn'], 'unique'],
            [['product_data_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductData::className(), 'targetAttribute' => ['product_data_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sn' => 'Sn',
            'product_data_id' => 'Product Data ID',
            'type' => 'Type',
        ];
    }

    /**
     * Gets query for [[ProductData]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductData()
    {
        return $this->hasOne(ProductData::className(), ['id' => 'product_data_id']);
    }
}
