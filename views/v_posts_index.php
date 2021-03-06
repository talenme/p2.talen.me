<h1><?php echo $user->first_name; ?> - posts from people you are following:</h1>

<?php $i = 0; ?>

<!-- The tables were just a sad effort to make things look nicer. -->
<table class='border_table'>
	<tr><td>

<!-- Allow the user to set the sort order of the list -->
<?php if(isset($_GET["order"])) {$orderedList = new ArrayIterator(array_reverse($posts));} else {$orderedList = $posts;}?>

Sort order:
<a href="/posts/index?order=1">Descending</a>
<a href="/posts/index">Ascending</a>

<table class='table_settings'>
<?php foreach($orderedList as $post): ?>
<!-- List every post from followed users, and number the entries -->
<article>
	<tr>
		<td class='table_settings'>
			<?php $i++; ?>
    		<b><?=$i?>.</b>
    	</td>
    	<td class='table_settings' width=175>
    		<b><?=$post['first_name']?> <?=$post['last_name']?></b><br>
    		<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        	<?=Time::display($post['created'])?>
    		</time>
    	</td>
    	<td class='table_settings'>
    		<?=$post['content']?>
    	</td>
    	<td>
    		&nbsp;&nbsp;&nbsp;
    	</td>
    </tr>
    <tr>
    	<td></td>
    	<td colspan=2><hr></td>
    	<td></td>
    </tr>
</article>

<?php endforeach; ?>
</table>
</td></tr>
</table>