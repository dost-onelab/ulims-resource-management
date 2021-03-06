<?php
/* @var $this EquipmentController */
/* @var $model Equipment */

$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Equipment', 'url'=>array('index')),
	array('label'=>'Create Equipment', 'url'=>array('create')),
	array('label'=>'Update Equipment', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Equipment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
);
?>

<h1>View Equipment #<?php echo $model->ID; ?></h1>

<?php
 $this->beginWidget('zii.widgets.CPortlet', array(
    'title'=>"<i class='icon-wrench'></i><strong>Equipment # $model->ID</strong>",
		),array('class'=>'portletbold announcewindow'));

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'equipmentID',
		'name',
		'description',
		'lab',
		'specification',
		'date_received',
		'received_by',
		'amount',
		'supplier',
		'status',
		'lengthofuse',
		'remarks',
		'usagestatus',
	),
));


$this->endWidget();



 $this->beginWidget('zii.widgets.CPortlet', array(
    'title'=>"<i class='icon-wrench'></i><strong>Equipment Maintenance</strong>",
		),array('class'=>'portletbold '));
 echo "sample Maintenance data ";
$this->endWidget();


 $this->beginWidget('zii.widgets.CPortlet', array(
    'title'=>"<i class='icon-wrench'></i><strong>Equipment Calibration</strong>",
		),array('class'=>'portletbold '));
 echo "sample Calibration data ";
$this->endWidget();
?> 