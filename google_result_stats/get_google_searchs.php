<?php
///////////////////
// Author: Juan Chaves
// Email: juan.cha63@gmail.com
// URL: http://www.egeon.es
// Version: 0.0.0.1
// get_data_p2pvalue
// google_result_stats
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

	//search Google 
	preg_match_all("|Aproximadamente (.*) resultados \(|", $_GET['r'], $t);
	$t2 =  '"' . file_get_contents('link.txt') . '","' . trim(str_replace(array('.', ','), array('', ''), $t[1][0])) . '"<br />';
	echo $t[1][0];
	if(!file_put_contents("list_google_search.txt", $t2, FILE_APPEND)){
		echo '';
	}

?>