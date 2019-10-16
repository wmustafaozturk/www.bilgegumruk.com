<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<ul class="ja-bullettin<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) : ?>
	<li>
			<?php 
			$padding = ($params->get( 'show_image'))?"style=\"padding-left:".($params->get('width')+10)."px\"":"";
			if (isset($item->image)) : 
			?>
			<?php echo $item->image; ?>
			<?php endif; ?>
			<div <?php echo $padding;?>>
			<a href="<?php echo $item->link; ?>" class="mostread<?php echo $params->get('moduleclass_sfx'); ?>"><?php echo $item->text; ?></a>
			<?php if (isset($item->date)) : ?>
			<br /><span><?php echo JHTML::_('date', $item->date, JText::_('DATE_FORMAT_LC4')); ?></span>
			<?php endif; ?>
			</div>

	</li>
<?php endforeach; ?>
</ul>