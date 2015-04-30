<?php
/* @var $this StatistiscController */
/* @var $model StatisticsModel */

$this->breadcrumbs=array(
	'Statistics',
);

$this->menu=array(
);

Yii::app()->clientScript->registerScript('search', "
$('.search-form form').submit(function(){
        $.fn.yiiGridView.update(
                'exhibition-grid',
                {data: $(this).serialize()}
            );
	return false;
});
");
?>

<div class="search-form">
<?php $this->renderPartial('_searchIndex',array(
	//'model'=>$model,
)); ?>
</div><!-- search-form -->

<div>
    
<?php
    Yii::import('bootstrap.helpers.TbHtml');
   // isset($rok){
     //   $pocty=  Statistics::model()->funkcia($rok);
            
    //}
    $data = StatisticsModel::model()->getStatisticsData(2015);
?>
        <div class="row2">
		<?php // echo CHtml::label("Dog Count: ".Dog::model()->getDogCount(),"Dog Count",  array());
		  echo CHtml::label("Dog Count: ".$data['dogCount'],"Dog Count",  array());
		// echo Dog::model()->getExportDogCount(); ?>		
	</div>
    
     <div class="row2">
         
		<?php  echo CHtml::label("Export: ".$data['exportTotal'],"Export",  array());
		//echo $data['litterCount'];
                ?>		
	</div>
    <div class="row2">
		<?php  echo CHtml::label("Import: ".$data['ImportTotal'],"Import",  array());
		// echo Dog::model()->getExportDogCount(); 
                ?>		
	</div>
    <div class="row2">
		<?php  echo CHtml::label("Litle dogs: ".$data['youngDog'],"youngDog",  array());
		// echo Dog::model()->getExportDogCount();
                ?>		
	</div>
    <div class="row2">
		<?php  echo CHtml::label("Litters: ".$data['litterCount'],"litterCount",  array());
		// echo Dog::model()->getExportDogCount();
                ?>		
	</div>
   <br>
   <h2>Statistics 2015</h2>
   <div class="row2">
		<?php  
                   echo CHtml::label("litterCountYear: ".$data['litterCountYear'],"litterCountYear",  array());
                   echo CHtml::label("puppyCount: ".$data['puppyCount'],"puppyCount",  array());
                   echo CHtml::label("puppyMaleCount: ".$data['puppyMaleCount'],"puppyMaleCount",  array());
                   echo CHtml::label("puppyFemaleCount: ".$data['puppyFemaleCount'],"puppyFemaleCount",  array());
                   echo CHtml::label("puppyExport: ".$data['puppyExport'],"puppyExport",  array());
                   echo CHtml::label("puppyImport: ".$data['puppyImport'],"puppyImport",  array());
		// echo Dog::model()->getExportDogCount();
                ?>		
	</div>
   <br>
   <div class="row2">
		<?php  
                   echo CHtml::label("dbk_dogs: ".$data['dbk_dogs'],"dbk_dogs",  array());
                   echo CHtml::label("dbk_male: ".$data['dbk_male'],"dbk_male",  array());
                   echo CHtml::label("puppyMaleCount: ".$data['dbk_female'],"dbk_female",  array());
                
		// echo Dog::model()->getExportDogCount();
                ?>		
	</div>
   <br>
   <div class="row2">
		<?php  
                   echo CHtml::label("dlk_dogs: ".$data['dlk_dogs'],"dlk_dogs",  array());
                   echo CHtml::label("dlk_male: ".$data['dlk_male'],"dlk_male",  array());
                   echo CHtml::label("dlk_female: ".$data['dlk_female'],"dlk_female",  array());
		// echo Dog::model()->getExportDogCount();
                ?>		
	</div>
   
<?php 

 
/*$this->widget('bootstrap.widgets.TbGridView', array(
	'id'=>'exhibition-grid',
        'type' => TbHtml::GRID_TYPE_STRIPED,
	'dataProvider'=>Dog::model()->search(),
	//'itemView'=>'_viewIndex',
        'filter' => null,
        'template'=>"{items}",
        'columns'=>array(
		'name',
		'place',
		'date',
		'referee',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	//),
/*)); */?>
    

</div>
