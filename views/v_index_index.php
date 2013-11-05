<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name.' '.$user->last_name; ?></h1>

<?php
	if ($user)
	{
		echo 'you are logged in';
	}
	else 
	{
		echo 'you ain\'t logged in';
	}
?>