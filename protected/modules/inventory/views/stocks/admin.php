<?php
/* @var $this StocksController */
/* @var $model Stocks */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Stocks', 'url'=>array('index')),
	array('label'=>'Create Stocks', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#stocks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stocks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stocks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'chemical_name',
		'CAS',
		'product_number',
		'container_barcode',
		'location',
		/*
		'manufacturer',
		'supplier',
		'quantity',
		'unit',
		'qty_remaining',
		'container_type',
		'exp_date',
		'date_acquired',
		'date_opened',
		'remarks',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
