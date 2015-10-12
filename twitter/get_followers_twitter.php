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

	$dates = file_get_contents ('http://twitter.com/' . $_GET['n']);
	//echo $dates;
	preg_match_all("|title=\"(.*)Abonnés\" data-nav=\"followers\"|", $dates, $t);
	$t_ = preg_replace('/[^0-9,.]/', '', $t[1][0]);
	$t =  '"' . $_GET['n'] . '","' . $t_ . '" <br />';	
	echo $t;
	//if line present, create new line
	if(!file_put_contents("txt/results/list_twitter.txt", $t, FILE_APPEND)){
		echo '';
	} else {
		$add_line = $_GET['p'] + 1;
		//nex line
		header ('Location: twitter_download.php?p=' .$add_line);
	}

?>