<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="http://p2.talen.me/css/prattle.css">	
					
	<!-- Controller Specific JS/CSS -->
	<!-- <?php if(isset($client_files_head)) echo $client_files_head; ?> -->

</head>

<body>	

    <div id='menu'>

    	<table class='header' width='100%'><tr><td align='left'>
    	<div class='title'><?php echo APP_NAME ?><div>
    	</td>
    	<td align='center'>
        <a href='/'>Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;

        <!-- Menu for users who are logged in -->
        <?php if($user): ?>

            <a href='/users/logout'>Logout</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href='/users/profile'>Profile</a>

        <!-- Menu options for users who are not logged in -->
        <?php else: ?>

            <a href='/users/signup'>Sign up</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href='/users/login'>Log in</a>

        <?php endif; ?>
    </td></tr>
    <tr class='shadow' height=3px><td colspan=2></td></tr>
	</table>

    </div>

    <br>	

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>