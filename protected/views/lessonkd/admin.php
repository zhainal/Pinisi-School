<?php
/* @var $this LessonKdController */
/* @var $model LessonKd */

$this->breadcrumbs=array(
	'Lesson Kds'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List LessonKd', 'url'=>array('index')),
	array('label'=>'Create LessonKd', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lesson-kd-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Lesson Kds</h1>

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
	'id'=>'lesson-kd-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'lesson_id',
		'description',
		'created_at',
		'updated_at',
		/*
		'created_by',
		'updated_by',
		'trash',
		'semester',
		'tahun_ajaran',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
