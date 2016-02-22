<div class="posts">
	<?php foreach ($posts as $post): ?>

		<div class="post">
			<div>
				<span class="name">
					<?php echo $post['name']; ?>
				</span> - 
				<span class="email">
					<?php echo $post['email']; ?>
				</span>
				<span class="delete">
					<?php echo anchor(base_url() . "index.php/guestbook/delete_post?id=" . $post['id'], 'X', 'id="$row->id"'); ?>
				</span>
			</div>
			<div class="comment">
				<?php echo $post['comment']; ?>
			</div>
		</div>

	<?php endforeach; ?>
</div>