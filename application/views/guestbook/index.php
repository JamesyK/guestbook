<?php foreach ($posts as $post): ?>

	<div class="main">
		<div>
			<?php echo $post['name']; ?> - 
			<?php echo $post['email']; ?>
			<span>
				<?php echo anchor(base_url() . "index.php/guestbook/delete_post?id=" . $post['id'], 'DELETE', 'id="$row->id"'); ?>
			</span>
		</div>
		<div>
			<?php echo $post['comment']; ?>
		</div>
	</div>

<?php endforeach; ?>
