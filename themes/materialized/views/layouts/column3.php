<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
	<div class="row">
		<div class="col s4">
			<p>
				<h2>Sidebar 1</h2>
				Sidebar content here
			</p>
		</div>
		<div id="content" class="col s4">
			<?php echo $content; ?>
		</div><!-- content -->
		<div class="col s4">
			<p>
				<h2>Sidebar 2</h2>
				Sidebar content here
			</p>
		</div>
	</div>
</div>
<?php $this->endContent(); ?>
