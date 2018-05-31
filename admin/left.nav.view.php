

<ul class="list-group">

	<?php foreach($left_nav as $nav): ?>
		
		<li class="list-group-item">
			<p><a href="<?=$nav['link']?>"><?=$nav['title']?></a></p>
			<!--判断是否有二级分类-->
			<?php if(count($nav['child']) > 0): ?>

				<ul class="list-group">
					<?php foreach($nav['child'] as $child): ?>

						<li class="list-group-item">
							
							<p><a href="<?=$child['link']?>"><?=$child['title']?></a></p>

						</li>

					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</li>

	<?php endforeach; ?>

</ul>