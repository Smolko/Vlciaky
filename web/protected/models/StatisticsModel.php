
<?php

class StatisticsModel extends BaseModel {

    //global statistics
    var $dogCount = 0;
    var $kennelCount;
    var $activeKennelConut;
    var $exportTotal = 0;
    var $ImportTotal = 0;
    var $youngDog;
    var $litterCount;
    // puppy statistics 
    //PER YEAR
    var $litterCountYear;
    var $puppyCount;
    var $puppyMaleCount;
    var $puppyFemaleCount;
    var $puppyExport;
    var $puppyImport;
    var $dbk_dogs;
    var $dbk_male;
    var $dbk_female;
    var $dbk_table;
    var $dlk_dogs;
    var $dlk_male;
    var $dlk_female;
    var $dlk_table;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        //return '{{kennel}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    /**
     * @return array relational rules.
     */

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'reg_number' => 'Reg Number',
            'registered_at' => 'Registered At',
            'id_user' => 'Id User',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'state' => 'State',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('reg_number', $this->reg_number, true);
        $criteria->compare('registered_at', $this->registered_at, true);
        $criteria->compare('id_user', $this->id_user);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);
        $criteria->compare('state', $this->state);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Kennel the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getStatisticsData($param = 0) {
        //global
        $this->dogCount = Dog::model()->getDogCount();
        $this->exportTotal = Dog::model()->getExportDogCount();
        $this->ImportTotal = Dog::model()->getImportDogCount();

        $temp = Fertilisation::model()->getPuppyCount(0, 0);
        $this->youngDog = $temp->male_count + $temp->female_count;
        $this->litterCount = $temp->id;
//puppy
        $temp = Fertilisation::model()->getPuppyStatisticsY($param);
        $this->litterCountYear = $temp->id;
        $this->puppyCount = $temp->male_count + $temp->female_count;
        $this->puppyMaleCount = $temp->male_count;
        $this->puppyFemaleCount = $temp->female_count;
        $this->puppyExport = Dog::model()->getExportDogCountYear($param);
        $this->puppyImport = Dog::model()->getImportDogCountYear($param);

        //dbk
        $temp = Dog::model()->getDBKSCounts($param);
       $this->dbk_dogs = $temp[0]->id+$temp[1]->id;
        $this->dbk_male = $temp[0]->id;
        $this->dbk_female = $temp[1]->id;
        $this->dbk_table;

        $temp = Dog::model()->getDLKSCounts($param);
       $this->dlk_dogs = $temp[0]->id+$temp[1]->id;
        $this->dlk_male = $temp[0]->id;
        $this->dlk_female = $temp[1]->id;
        $this->dlk_table;
        // var_dump($temp);
        //var_dump( $this->$youngDog);
        // var_dump( $this->litterCount);
        // exit;
        //litter sum, male female
        //Fertilisation::model()->getPuppyCount($yearStart, $yearEnd)
        //Fertilisation::model()->getPuppyStatisticsY(0);
      //  Dog::model()->getDLKSCounts(2015);
        return array(
            'dogCount' => $this->dogCount,
            'kennelCount' => $this->kennelCount,
            'activeKennelConut' => $this->activeKennelConut,
            'exportTotal' => $this->exportTotal,
            'ImportTotal' => $this->ImportTotal,
            'youngDog' => $this->youngDog,
            'litterCount' => $this->litterCount,
            // puppy statistics 
            //PER YEAR
            'litterCountYear' => $this->litterCountYear,
            'puppyCount' => $this->puppyCount,
            'puppyMaleCount' => $this->puppyMaleCount,
            'puppyFemaleCount' => $this->puppyFemaleCount,
            'puppyExport' => $this->puppyExport,
            'puppyImport' => $this->puppyImport,
            //dbk
            'dbk_dogs' => $this->dbk_dogs,
            'dbk_male' => $this->dbk_male,
            'dbk_female' => $this->dbk_female,
            'dbk_table' => $this->dbk_table,
            'dlk_dogs' => $this->dlk_dogs,
            'dlk_male' => $this->dlk_male,
            'dlk_female' => $this->dlk_female,
            'dlk_table' => $this->dlk_table,
        );
    }

}
