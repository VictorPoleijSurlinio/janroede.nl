<ul class="pagination">
<?php //PAGINATION ?>
<?php if ($totalpages == 1) { ?>
	<li class="disabled">		<a href="#!"><i class="material-icons">first_page</i></a></li>
	<li class="disabled">		<a href="#!"><i class="material-icons">chevron_left</i></a></li>
	<li class="active">			<a href="#!">1</a></li>
	<li class="disabled">		<a href="#!"><i class="material-icons">chevron_right</i></a></li>
	<li class="disabled">		<a href="#!"><i class="material-icons">last_page</i></a></li>
<?php } else if ($totalpages == 2) { ?>
	<?php if($page == 1) { ?>
		<li class="disabled">		<a href="#!"><i class="material-icons">first_page</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">last_page</i></a></li>
	<?php //second page ?>
	<?php } else if($page == 2) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_right</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">last_page</i></a></li>
	<?php } ?>
<?php } else if ($totalpages == 3) { ?>
	<?php if($page == 1) { ?>
		<li class="disabled">		<a href="#!"><i class="material-icons">first_page</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li class="active">			<a href="#!">									1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">	2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">	3</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //second page ?>
	<?php } else if($page == 2) { ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">	1</a></li>
		<li class="active">			<a href="#!">									2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">	3</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //default ?>
	<?php } else if($page == 3){ ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">	1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">	2</a></li>
		<li class="active">			<a href="#!">									3</a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_right</i></a></li>	
		<li class="disabled">		<a href="#!"><i class="material-icons">last_page</i></a></li>
	<?php } ?>
<?php } else if ($totalpages == 4) { ?>	
	<?php if($page == 1) { ?>
		<li class="disabled">		<a href="#!"><i class="material-icons">first_page</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li class="active">			<a href="#!">									1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">	2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">	3</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>">	4</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php } else if($page == 2) { ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">	1</a></li>
		<li class="active">			<a href="#!">									2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">	3</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>">	4</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php } else if($page == 3){ ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">	1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">	2</a></li>
		<li class="active">			<a href="#!">									3</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>">	4</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php } else if($page == 4){ ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">	1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">	2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">	3</a></li>
		<li class="active">			<a href="#!">									4</a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_right</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">last_page</i></a></li>
	<?php } ?>
<?php } else if ($totalpages >= 5) { ?>
	<?php //first page ?>
	<?php if($page == 1) { ?>
		<li class="disabled">		<a href="#!"><i class="material-icons">first_page</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_left</i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>">2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">3</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>">4</a></li>
		<li class="waves-effect">	<a href="?page=5&search=<?=$search?>">5</a></li>
		<li class="waves-effect">	<a href="?page=2&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$totalpages?>&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //second page ?>
	<?php } else if($page == 2) { ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>">3</a></li>
		<li class="waves-effect">	<a href="?page=4&search=<?=$search?>">4</a></li>
		<li class="waves-effect">	<a href="?page=5&search=<?=$search?>">5</a></li>
		<li class="waves-effect">	<a href="?page=3&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>	
		<li class="waves-effect">	<a href="?page=<?=$totalpages?>&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //default ?>
	<?php } else if($page >= 3 && ($page <= ($totalpages-2))){ ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-2?>&search=<?=$search?>">	<?=$page-2?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>">	<?=$page-1?></a></li>
		<li class="active">			<a href="?page=<?=$page?>&search=<?=$search?>">		<?=$page?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page+1?>&search=<?=$search?>">	<?=$page+1?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page+2?>&search=<?=$search?>">	<?=$page+2?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page+1?>&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$totalpages?>&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //next to last page ?>
	<?php } else if($page == ($totalpages-1)) { ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-3?>&search=<?=$search?>">	<?=$page-3?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-2?>&search=<?=$search?>">	<?=$page-2?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>">	<?=$page-1?></a></li>
		<li class="active">			<a href="#!">					<?=$page?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page+1?>&search=<?=$search?>">	<?=$page+1?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page+1?>&search=<?=$search?>"><i class="material-icons">chevron_right</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$totalpages?>&search=<?=$search?>"><i class="material-icons">last_page</i></a></li>
	<?php //last page ?>
	<?php } else if($page == $totalpages) { ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="material-icons">first_page</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>"><i class="material-icons">chevron_left</i></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-4?>&search=<?=$search?>">	<?=$page-4?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-3?>&search=<?=$search?>">	<?=$page-3?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-2?>&search=<?=$search?>">	<?=$page-2?></a></li>
		<li class="waves-effect">	<a href="?page=<?=$page-1?>&search=<?=$search?>">	<?=$page-1?></a></li>
		<li class="active">			<a href="#!">					<?=$page?></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">chevron_right</i></a></li>
		<li class="disabled">		<a href="#!"><i class="material-icons">last_page</i></a></li>
	<?php } ?>
<?php } ?>
</ul>