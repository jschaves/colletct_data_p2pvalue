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
	if(file_get_contents('http://plus.google.com/+' .  $_GET['n'] . '/posts')){
		$dates = file_get_contents('http://plus.google.com/+' .  $_GET['n'] . '/posts');
	} else {
		$dates = file_get_contents('http://plus.google.com/' .  $_GET['n'] . '/posts');
	}
	

	//echo $dates;
	preg_match_all("|<span(.*)>(.*)</span> followers|", $dates, $t);
	preg_match_all("|<span(.*)>(.*)</span> views|", $dates, $t_);

	$t2 =  '"' . $_GET['n'] . '","' . str_replace(',', '', $t[2][0]) . '","' . str_replace(',', '', $t_[2][0]) . '"<br />';	

	//if line present, create new line
	if(!file_put_contents("txt/results/list_googleplus.txt", $t2, FILE_APPEND)){
		echo '';
	} else {
		$add_line = $_GET['p'] + 1;
		//nex line
		header ('Location: googleplus_download.php?p=' .$add_line);
	}

?>