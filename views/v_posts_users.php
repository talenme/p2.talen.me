<h1><?=APP_NAME?> Users</h1>

<?php if(isset($_GET["redirect"])) {echo 
    'You are currently not following any users - you may select one or more from the list below<br><br>';}?>

<table border=0>
    <?php foreach($users as $user): ?>
        <tr><td>
            <!-- Print this user's name -->
            <?=$user['first_name']?> <?=$user['last_name']?> 
            <?php if(isset($user['location'])) { echo '('.$user['location'].')';}?>

        <!-- If there exists a connection with this user, show an unfollow link -->
        <?php if(isset($connections[$user['user_id']])): ?>
            <a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

        <!-- Otherwise, show the follow link -->
        <?php else: ?>
            <a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
        <?php endif; ?>
        <br>
        <?php if(isset($user['about'])) { echo 'About: '.$user['about'];}?>

        <br>
        <hr>
    </tr></td>
<?php endforeach; ?>
</table>