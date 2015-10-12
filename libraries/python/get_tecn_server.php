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

	//name site
	$link = $_REQUEST['n'];	
	
	//execute python reverse_engineer.py librarie
	$dates = trim(shell_exec('python ./reverse_engineer.py ' . trim($link)));
	$dates = trim($dates, ',');	
	$line = strip_tags('"' . trim($link) . '","' . $dates . '"');
	$line =  eregi_replace("[\n|\r|\n\r]", ' ', $line);
	$line = $line.'<br />';
	echo $line;
	//if line present, create new line
	if(!file_put_contents("./txt/results/result_tecno_server.txt", $line, FILE_APPEND)){
		echo '';
		exit();
	} else {
		$add_line = $_GET['p'] + 1;
		header ('Location: reverse_engineer.php?p=' .$add_line);
	}
	
?>