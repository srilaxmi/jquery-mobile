<?php include("header.php"); ?>
<body>
<div data-role="page">

<div data-role="header" class="<?php echo $siteName; ?>">
	<h1><?php echo ucwords($siteName)."+"; ?></h1>
</div>

<div data-role="content">
<ul data-role="listview" data-theme="c" data-dividertheme="d" data-counttheme="e">
<?php
foreach($feed->query->results->item as $item) {
	if ( $siteName === 'psdtuts' ) 
		$comments = $item->comments->content;
	else 
		$comments = $item->comments[1];
?>
	<li>
	<h2>
		<a href="article.php?siteName=<?php echo $siteName;?>&origLink=<?php echo urlencode($item->guid->content);?>"><?php echo $item->title; ?></a>
	</h2>
	<span class="ui-li-count"><?php echo $comments; ?> </span>
	</li>
<?php 
} 
?>
</ul>
</div>

<div data-role="footer" class="<?php echo $siteName; ?>">
  <h4>www.tutsplus.com</h4>
</div>

</div>
</body>
</html>