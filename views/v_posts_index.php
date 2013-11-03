<h1><?php echo $user->first_name; ?> - posts from people you are following:</h1>

<?php $i = 0; ?>
<?php foreach($posts as $post): ?>

<article>
	<?php $i++; ?>

    <b><?=$i?>. <?=$post['first_name']?> <?=$post['last_name']?> posted:</b>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>
</article>

<?php endforeach; ?>