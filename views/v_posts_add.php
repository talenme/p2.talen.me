<?php if(isset($_GET["submitted"])) {echo 
    'Your post was successfully posted.<br><br>';}?>

<form method='POST' action='/posts/p_add'>

	<h1><?=APP_NAME?> Posting</h1>
    <label for='content'>New Post:</label><br>
    <textarea name='content' id='content' cols=100 rows=10></textarea>

    <br><br>
    <input type='submit' value='New post'>

</form> 