<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name.' '.$user->last_name; ?></h1>

You can now do the following:<br>
<a href="/posts/users">add users to follow</a><br>
<a href="/posts/index">view posts</a><br>
<a href="/posts/add">add a new post</a>
	