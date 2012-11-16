<nav class="pull-left">
	<ul>
		<?php for($i = 0; $i < 3; $i++) : ?>
		<li class="parent">
			<?php echo HTML::anchor('#', 'Lien 1') ?>
			<ul>
				<li><?php echo HTML::anchor('#', 'Sous-lien 1') ?></li>
				<li><?php echo HTML::anchor('#', 'Sous-lien 2') ?></li>
				<li><?php echo HTML::anchor('#', 'Sous-lien 3') ?></li>
			</ul>
		</li>
		<?php endfor; ?>
	</ul>
</nav>