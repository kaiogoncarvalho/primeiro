<h2> <?= $title; ?> </h2> 
<?php foreach($news as $news_item){?>
<h3> <?= $news_item['title']; ?> </h3>
<div class='main'> 
	<p> <?= $news_item['text']; ?> </p>
	<p> <a href='<?= site_url('news/'.$news_item['slug']);?>'> <?= $news_item['title'];?> </a> </p>
</div>
<?php }
	