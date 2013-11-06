<h1>Welcome to <?=APP_NAME?></h1>

You will need to <a href="/users/login">sign in</a> or <a href="/users/signup">create an account</a> to get started.<br>
<br>
Additional edits to original code:<br>
- error checking for the signup process (validate all fields have something entered, verify email address is valid format and unique)
<br>
- after signup is complete, send them to home page
<br>
- home page updated to show list of posts, option to add new posts, option to view available users to follow
<br>
- /posts/index numbered the entries, enable ascending/descending sorting, if zero posts recommend adding people to follow
<br>
- ability to add profile info (location, bio). I tried to get images to work, but couldn't.