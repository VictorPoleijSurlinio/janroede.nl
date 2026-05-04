<ul class="pagination">
<?php //PAGINATION ?>
<?php
//TOTAL PAGES 1
	if ($totalpages == 1) { ?>
	<li class="disabled">			<a href="#!"><i class="far fa-angle-double-left"></i></a></li>
	<li class="disabled">			<a href="#!"><i class="far fa-angle-left"></i></a></li>
	<li class="active">				<a href="#!">1</a></li>
	<li class="disabled">			<a href="#!"><i class="far fa-angle-right"></i></a></li>
	<li class="disabled">			<a href="#!"><i class="far fa-angle-double-right"></i></a></li>
<?php
//TOTAL PAGES 2
	} else if ($totalpages == 2) { ?>
	<?php if($page == 1) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-left"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-left"></i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php
	//second page ?>
	<?php }else if($page == 2) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-right"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-right"></i></a></li>
	<?php } ?>
<?php
//TOTAL PAGES 3
	} else if ($totalpages == 3) { ?>
	<?php if($page == 1) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-left"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-left"></i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //second page ?>
	<?php } else if($page == 2) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //default ?>
	<?php } else if($page == 3){ ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<li class="active">			<a href="#!">3</a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-right"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-right"></i></a></li>
	<?php } ?>
<?php
//TOTAL PAGES 4
	}else if ($totalpages == 4) { ?>
		<?php if($page == 1) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-left"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-left"></i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">4</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php } else if($page == 2) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">4</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php } else if($page == 3){ ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<li class="active">			<a href="#!">3</a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">4</a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>	
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php } else if($page == 4){ ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<li class="active">			<a href="#!">4</a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-right"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-right"></i></a></li>
	<?php } ?>
<?php
//TOTAL PAGES > 5
	}else if ($totalpages >= 5) { ?>
	<?php //first page ?>
	<?php if($page == 1) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-left"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-left"></i></a></li>
		<li class="active">			<a href="#!">1</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">4</a></li>
		<?php $_GET['page'] = 5 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">5</a></li>
		<?php $_GET['page'] = 2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = $totalpages ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //second page ?>
	<?php } else if($page == 2) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">1</a></li>
		<li class="active">			<a href="#!">2</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">3</a></li>
		<?php $_GET['page'] = 4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">4</a></li>
		<?php $_GET['page'] = 5 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>">5</a></li>
		<?php $_GET['page'] = 3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = $totalpages ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //default ?>
	<?php } else if($page >= 3 && ($page <= ($totalpages-2))){ ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<?php $_GET['page'] = $page-2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-2?></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-1?></a></li>
		<li class="active">			<a href="#!"><?=$page?></a></li>
		<?php $_GET['page'] = $page+1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page+1?></a></li>
		<?php $_GET['page'] = $page+2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page+2?></a></li>
		<?php $_GET['page'] = $page+1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = $totalpages ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //next to last page ?>
	<?php } else if($page == ($totalpages-1)) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<?php $_GET['page'] = $page-3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-3?></a></li>
		<?php $_GET['page'] = $page-2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-2?></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-1?></a></li>
		<li class="active">			<a href="#!"><?=$page?></a></li>
		<?php $_GET['page'] = $page+1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page+1?></a></li>
		<?php $_GET['page'] = $page+1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-right"></i></a></li>
		<?php $_GET['page'] = $totalpages ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-right"></i></a></li>
	<?php //last page ?>
	<?php } else if($page == $totalpages) { ?>
		<?php $_GET['page'] = 1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-double-left"></i></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><i class="far fa-angle-left"></i></a></li>
		<?php $_GET['page'] = $page-4 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-4?></a></li>
		<?php $_GET['page'] = $page-3 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-3?></a></li>
		<?php $_GET['page'] = $page-2 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-2?></a></li>
		<?php $_GET['page'] = $page-1 ?>
		<li class="waves-effect">	<a href="?<?=http_build_query($_GET)?>"><?=$page-1?></a></li>
		<li class="active">			<a href="#!"><?=$page?></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-right"></i></a></li>
		<li class="disabled">		<a href="#!"><i class="far fa-angle-double-right"></i></a></li>
	<?php } ?>
<?php } ?>
</ul>