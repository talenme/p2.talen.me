<form method='POST' action='/users/p_profile'>
<div class='body'>
	<h1><?=APP_NAME?> Profile for <?=$user->first_name?> <?=$user->last_name?></h1>
	Optional: You may tell people more about yourself by entering a short bio and
		location information.<br><br>

    <label for='about'>About You:</label><br>
    <textarea name='about' id='about' cols=40 rows=2><?=$about?></textarea><br>
    <label for='location'>Location:</label>
    <input type='text' name='location' value='<?=$loc?>'>
    <br><br>
    <input type='submit' value='Submit'>
</div>
</form>
<?php if(isset($_GET["submitted"])) {echo 
    '<b>Your profile was successfully updated.</b>';}?>