<h1>This is the profile of <?=$user->first_name?> <?=$user->last_name?></h1>

<div class='body'>
<form action="/users/p_profile" method="POST" enctype="multipart/form-data">
    <label>Add a profile photo:</label><br>
    <input type="file" name="image" /><br>
    <input type="submit" />
</form>
</div>