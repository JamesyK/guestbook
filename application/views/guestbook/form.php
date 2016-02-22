<div class="form">
	<?php echo validation_errors(); ?>

	<?php echo form_open(); ?>

	    <label for="name">Name:</label>
	    <input type="input" name="name" /><br />

	    <label for="email">Email:</label>
	    <input type="input" name="email" /><br />

	    <label for="comment">Comment:</label>
	    <textarea name="comment"></textarea><br />

	    <input type="submit" name="submit" value="Submit" />

	</form>
</div>
