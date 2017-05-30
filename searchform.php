<form action="<?php echo home_url('/') ?>" method="get" class="form form-inline form-search">
	<div class="form-group">
		<input type="text" name="s" class="form-control" placeholder="" value="">
		<button type="submit" class="btn"><?php get_template_part('build/img/icon', 'search.svg'); ?></button>
	</div>
</form>
