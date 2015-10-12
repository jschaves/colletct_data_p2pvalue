<?php
///////////////////
// Author: Juan Chaves
// Email: juan.cha63@gmail.com
// URL: http://www.egeon.es
// @egeones
// Version: 0.0.1
///////////////////
//////////////////
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program. If not, see <http://www.gnu.org/licenses/>.
//////////////////


	echo '"SITE", "TECHONOLOGIES"<br />';
	//Get list
	$list = file_get_contents('./txt/listado_tecno_server.txt');
	$list = nl2br($list);
	$list = explode('<br />', $list);
	$total = count($list);
	//if list next
	if($_GET['p'] < $total) {
		if(empty($_GET['p'])) {
			$_GET['p'] = 0;
			$del_txt = fopen("./txt/results/result_tecno_server.txt", "w");
			fclose($del_txt);
		}
		echo '<META HTTP-EQUIV=\'Refresh\' CONTENT=\'0; URL=get_tecn_server.php?p=' . $_GET['p'] . '&n=' . $list[$_GET['p']] . '\'>';
	} else {
		
	}
	//echo result
	readfile('./txt/results/result_tecno_server.txt');


?>