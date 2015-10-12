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

	$context = stream_context_create(array('http' => array('header'=>'Connection: close\r\n')));
	$dates = file_get_contents('https://github.com/' .  $_GET['n'], false, $context);
	preg_match_all("|href=\"/(.*)\" itemprop=\"name codeRepository\"|", $dates, $t);
	$totalprojects = count($t[1]);
	if($totalprojects) {
		foreach($t[1] as $d) {
			$dates2 = file_get_contents('https://github.com/' .  $d, false, $context);
			preg_match_all("|<span class=\"num text-emphasized\">([^<\/span>]*)|", $dates2, $commits);
			$co = $commits[0][0];
			$br = $commits[0][1];
			$re = $commits[0][2];	
			$con = $commits[0][3];
			$t2 =  '"https://github.com/' . $d . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $co). '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $br) . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $re) . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $con) . '"<br />';
			//if line present, create new line
			if(!file_put_contents("txt/results/list_github.txt", $t2, FILE_APPEND)){
				echo '';
			} else {
				$add_line = $_GET['p'] + 1;
				//nex line
				header ('Location: github_download.php?p=' .$add_line);
			}
		}
	} else {
		foreach($t[1] as $d) {
			$dates2 = file_get_contents('https://github.com/' .  $d, false, $context);
			preg_match_all("|<span class=\"num text-emphasized\">([^<\/span>]*)|", $dates2, $commits);
			$co = $commits[0][0];
			$br = $commits[0][1];
			$re = $commits[0][2];	
			$con = $commits[0][3];
			$t2 =  '"https://github.com/' . $d . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $co). '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $br) . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $re) . '","' . str_replace(array(chr(9), chr(10), chr(13), chr(32)), array('', '', '', ''), $con) . '"<br />';
			//if line present, create new line
			if(!file_put_contents("txt/results/list_github.txt", $t2, FILE_APPEND)){
				echo '';
			} else {
				$add_line = $_GET['p'] + 1;
				//nex line
				header ('Location: github_download.php?p=' .$add_line);
			}
		}
	}
	
	

	

		



?>