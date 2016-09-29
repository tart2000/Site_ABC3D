<div class="col-sm-4 book">
	<a href="<?php echo $book->link() ?>" target="_blank">
		<div class="book-img">
			<img src="<?php echo $book->images()->first()->url() ?>" class="book-cover">
		</div>
		<div class="book-meta center">
			<h4><?php echo $book->title() ?></h4>
			<em><?php echo $book->author() ?></em>
		</div>
		<?php if ($book->free() == 'true') : ?>
			<div class="free">
				<?php echo l::get('free') ?>
			</div>
		<?php endif ?>
	</a>
</div>