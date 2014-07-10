<?php

/**
 * This is the model class for table "komentar".
 *
 * The followings are the available columns in table 'komentar':
 * @property integer $id
 * @property string $nama
 * @property string $komentar
 * @property string $tanggal
 * @property integer $id_artikel
 *
 * The followings are the available model relations:
 * @property Artikel $idArtikel
 */
class Komentar extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'komentar';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nama, komentar, tanggal, id_artikel', 'required'),
            array('id_artikel', 'numerical', 'integerOnly' => true),
            array('nama', 'length', 'max' => 50),
            array('komentar', 'length', 'max' => 500),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nama, komentar, tanggal, id_artikel', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idArtikel' => array(self::BELONGS_TO, 'Artikel', 'id_artikel'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'nama' => 'Nama',
            'komentar' => 'Komentar',
            'tanggal' => 'Tanggal',
            'id_artikel' => 'Id Artikel',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('komentar', $this->komentar, true);
        $criteria->compare('tanggal', $this->tanggal, true);
        $criteria->compare('id_artikel', $this->id_artikel);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Komentar the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    protected function beforeValidate() {
        $this->tanggal = date('Y-m-d');
        return parent::beforeValidate();
    }

}
