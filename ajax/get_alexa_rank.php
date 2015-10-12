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

	//Get alexa rank api 
	echo '"URL","GLOBAL RANK","REACH RANK", "RANK DELTA"<br />';
	$lista = nl2br($_POST['list2']);
	$lista = explode('<br />', $lista);
	foreach($lista as $datos) {
		$xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.trim($datos));
		$rank = isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
		$backlink = (int)$xml->SD[1]->REACH->attributes()->RANK;
		$delta = (int)$xml->SD[1]->RANK->attributes()->DELTA;
		echo '"'.trim($datos).'","'. trim($rank) .'","'. trim($backlink) .'","'. trim($delta) .'"<br />';
	}



?>


