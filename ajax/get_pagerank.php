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

	//include pagerank class
	include_once('../class/page_rank_class.php');
	//get dates api pagerank
	echo '"URL","Rank"<br />';
	$lista = nl2br($_POST['list']);
	$lista = explode('<br />', $lista);
	foreach($lista as $datos) {
		$url = trim($datos);
		$pr = new PR();
		echo '"'.trim($datos).'","'. trim($pr->get_google_pagerank($url)) .'"<br />';
	}

?>