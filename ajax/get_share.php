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

	//add class get dates facebook linkedin
	include('../class/share_class.php');
	
	echo '"URL", "FACEBOOK SHARE", "FACEBOOK LIKE", "LINKEDIN SHARE"<br />';
	//Get dates
	$lista = nl2br($_POST['list4']);
	$lista = explode('<br />', $lista);
	foreach($lista as $datos) {
		$obj = new share($datos); 
		echo '
			"'. trim($datos) .'", 
			"'. trim($obj->get_fb()) .'", 
			"'. trim($obj->get_linkedin()) .'"<br />';	
	}
?>