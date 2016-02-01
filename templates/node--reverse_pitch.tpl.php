
    <div class="row">
        <div class="col-md-11">
			<p class="pitch-name">Written by <?php print render($name); ?>  on <?php print render($date); ?></p>
			<p><?php print render($content['field_institution']); ?></p>
			<div class="pitch-idea"><?php print render($content['field_idea']); ?></div>
		</div>
		<div class="col-md-1">
			<div class="pitch-logo"><?php print render($content['field_logo']); ?></div>
		</div>
	</div>
	<?php print $service_links_rendered; ?>

<hr>

<?php print render($content['comments']); ?>

