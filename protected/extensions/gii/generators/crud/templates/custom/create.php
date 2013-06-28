<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$label=$this->class2name($this->getControllerID());
echo "\$this->breadcrumbs=array(
	'$label'=>array('admin'),
	'Create',
);\n";
?>

$this->menu=array(
	array('label'=>'List <?php echo $label; ?>', 'url'=>array('index')),
	array('label'=>'Manage <?php echo $label; ?>', 'url'=>array('admin')),
);
?>

<h1>Create <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
