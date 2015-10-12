<?php
	if(!isset($_GET['p'])) {
		$_GET['p'] = 0;
	}
	//read list to get dates
	$list = file_get_contents('./txt/list_github.txt');
	$list = nl2br($list);
	$list = explode('<br />', $list);
	$total = count($list);
	echo '"PROJECT","COMMITS","BRANCH","RELEASES","CONTRIBUTORS"<br />';
	if($_GET['p'] < $total) {
		if($_GET['p'] == 0) {
			$_GET['p'] = 0;
			$del_txt = fopen("./txt/results/list_github.txt","w");
			fclose($del_txt);
		}
		//New line script
		echo '<META HTTP-EQUIV=\'Refresh\' CONTENT=\'0; URL=get_github.php?n=' . $list[$_GET['p']] . '&p=' . $_GET['p'] . ' \'>';
	} else {
		
	}
	//echo dates
	readfile('./txt/results/list_github.txt');




?>