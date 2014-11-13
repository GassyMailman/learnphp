<?php
  require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form method = "post" action = "<?php echo $path . "controller/create-post.php"; ?>">
	<div>
	   <!--Title of post-->
		<label for="title">Title: </label>
	   <!--text in the post-->
		<input type="text" name="title" />
	</div>

	<div>
		<label for="post">Post: </label>
		<textarea name="post"></textarea>
	</div>

	<div>
	   <!--Submit button-->
		<button type="submit">Submit</button>
	</div>
</form>