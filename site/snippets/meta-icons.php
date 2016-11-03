<?php if($workshop->lengt() != '') : ?>
  <i class="fa fa-clock-o"></i> <?php echo $workshop->lengt() ?>
<?php endif ?>
<?php if($workshop->groupsize() != '') : ?>
 | 
  <i class="fa fa-users"></i> <?php echo $workshop->groupsize() ?>
<?php endif ?>
<?php $diff = $workshop->difficulty()->int() ?>
<?php $soudif = 5-$diff ?>
<?php if ($workshop->difficulty() != '') : ?>
	| 
	<?php while ($diff > 0) : ?>
		<i class="fa fa-exclamation-circle"></i>
		<?php $diff-- ?>
	<?php endwhile ?>
	<?php while ($soudif > 0) : ?>
		<i class="fa fa-circle-o"></i>
		<?php $soudif-- ?>
	<?php endwhile ?>
<?php endif ?>