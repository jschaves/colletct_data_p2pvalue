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
$(function() {
	//Activate selected script
	$('#bottom').click(function() {
		$('#result').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/get_pagerank.php',
			$('#form').serialize(), 
			function(data) {
			$('#result').html(data);
		});
		return false;
	});
	$('#bottom2').click(function() {
		$('#result2').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/get_alexa_rank.php',
			$('#form2').serialize(), 
			function(data) {
			$('#result2').html(data);
		});
		return false;
	});	
	$('#bottom3').click(function() {
		$('#result3').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/get_share.php',
			$('#form3').serialize(), 
			function(data) {
			$('#result3').html(data);
		});
		return false;
	});	
	$('#bottom4').click(function() {
		$('#result4').html('<img src="./img/preload.gif" />');
		var i = $('#app_id').val(), k = $('#app_key').val(), s = $('#source').val(), x = $('#mashape').val();
		$.post(
			'./ajax/create_kred_list.php',
			$('#form5').serialize(), 
			function(data) {
			$('#result4').html('<iframe src="./kred/kred.php?i=' +i+ '&k=' +k+ '&s=' +s+ '&x=' +x+ '" />');
		});
		return false;
	});	
	
	$('#bottom5').click(function() {
		$('#result5').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_tecn_server_list.php',
			$('#form6').serialize(), 
			function(data) {
			$('#result5').html('<iframe src="./libraries/python/reverse_engineer.php" />');
		});
		return false;
	});	
	
	$('#bottom7').click(function() {
		$('#result7').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_likes_facebook_list.php',
			$('#form7').serialize(), 
			function(data) {
			$('#result7').html('<iframe src="./like-facebook/like.php" />');
		});
		return false;
	});	

	$('#bottom8').click(function() {
		$('#result8').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_twitter_list.php',
			$('#form8').serialize(), 
			function(data) {
			$('#result8').html('<iframe src="./twitter/twitter_download.php" />');
		});
		return false;
	});	
	
	$('#bottom9').click(function() {
		$('#result9').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_youtube_list.php',
			$('#form9').serialize(), 
			function(data) {
			$('#result9').html('<iframe src="./youtube/youtube_download.php" />');
		});
		return false;
	});	

	$('#bottom10').click(function() {
		$('#result10').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_googleplus_list.php',
			$('#form10').serialize(), 
			function(data) {
			$('#result10').html('<iframe src="./google/googleplus_download.php" />');
		});
		return false;
	});		
	
	$('#bottom11').click(function() {
		$('#result11').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_github_list.php',
			$('#form11').serialize(), 
			function(data) {
			$('#result11').html('<iframe src="./github/github_download.php" />');
		});
		return false;
	});	
	
	$('#bottom12').click(function() {
		$('#result12').html('<img src="./img/preload.gif" />');
		$.post(
			'./ajax/create_google_search_list.php',
			$('#form12').serialize(), 
			function(data) {
			$('#result12').html('<iframe src="./google/google_search_download.php" />');
		});
		return false;
	});
	
	//view selection - hide  
	$('#select').change(function() {
		var action = $(this).val();
		$('.del').css('display', 'none');
		$('#'+action).css('display', 'block');
	});			
	
});