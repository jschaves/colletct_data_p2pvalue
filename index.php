<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Get PageRank</title>
		<script src="./js/jquery.js"></script>
		<script src="./js/scripts.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<select name="select" id="select"  autocomplete="off">
			<option value="left">Google  PageRank</option>
			<option value="center">Alexa Rank</option>
			<option value="right">Share links Facebook & Linkedin</option>
			<option value="right3">Get Site Technologies</option>
			<option value="oters">Get Followers Twitter</option>
			<option value="oters3">Get Followers and views Google+</option>	
			<option value="oters4">Get GitHub Commits Branches Releases</option>		
		</select>
		<div id="left"  class="del">
			<div class="left">
				<form name="form" id="form" method="post" action="#">
					<p class="title">Enter links to get Google PageRank, Write one link per line. (processing might take some time)</p>					
					<div>
						<textarea id="input" name="list" rows="15"><?php include('./txt/listado.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result" class="res"></div>
		</div>
		<div id="center" class="del" style="display:none">
			<div class="left">
				<form name="form2" id="form2" method="post" action="#">
					<p class="title">Enter links to get AlexaRank, Write one link per line. (processing might take some time)</p>
					<div>
						<textarea id="input2" name="list2" rows="15"><?php include('./txt/listado.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom2" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result2" class="res"></div>
		</div>
		<div id="right" class="del" style="display:none">
			<div class="left">
				<form name="form3" id="form3" method="post" action="#">
					<p class="title">Enter links to get share, Write one link per line. (processing might take some time)</p>
					<div>
						<textarea id="input4" name="list4" rows="15"><?php include('./txt/listado.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom3" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result3" class="res"></div>
		</div>		
		<div id="right3" class="del" style="display:none">
			<div class="left">
				<form name="form6" id="form6" method="post" action="#">
					<p class="title">Enter links to Get Site Technologies, Write one link per line. (processing might take some time)</p>
						<pre><textarea id="input6" name="list6" rows="15"><?php $text = file_get_contents('./libraries/python/txt/listado_tecno_server.txt'); echo $text; ?></textarea></pre>
					<p><input type="submit" id="bottom5" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result5" class="res"></div>
		</div>
		<div id="oters" class="del" style="display:none">
			<div class="left">
				<form name="form8" id="form8" method="post" action="#">
					<p class="title">Enter user name Twitter. (processing might take some time)</p>
					<div>
						<textarea id="input8" name="list8" rows="15"><?php include('./twitter/txt/list_twitter.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom8" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result8" class="res"></div>
		</div>	
		<div id="oters3" class="del" style="display:none">
			<div class="left">
				<form name="form10" id="form10" method="post" action="#">
					<p class="title">Enter user name Google+. (processing might take some time)</p>
					<div>
						<textarea id="input10" name="list10" rows="15"><?php include('./google/txt/list_googleplus.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom10" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result10" class="res"></div>
		</div>
		<div id="oters4" class="del" style="display:none">
			<div class="left">
				<form name="form11" id="form11" method="post" action="#">
					<p class="title">Enter project GitHub. (processing might take some time)</p>
					<div>
						<textarea id="input11" name="list11" rows="15"><?php include('./github/txt/list_github.txt'); ?></textarea>
					</div>
					<p><input type="submit" id="bottom11" value="Load list" /></p>				
				</form>
			</div>	
			<div id="result11" class="res"></div>
		</div>		
		<div id="footer"><p><a href="http://www.egeon.es">Developed by Juan Chaves</a></p></div>
	</body>
</html>