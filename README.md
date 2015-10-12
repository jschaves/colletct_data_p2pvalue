# colletct_data_p2pvalue
Get data for p2pvalue<br />
Script to collect data from Internet
<h2>Script google_result_stats</h2>
File google_result_stats.iim should be used with <a href="https://addons.mozilla.org/es/firefox/addon/imacros-for-firefox/">Imacros</a> plugin for Firefox.<br />
Set WAIT SECONDS=10 to the time in seconds to wait till next search, taking into account that, if you go too fast, Google can block you.<br />
<h2>http://localhost/colletct_data_p2pvalue/google_result_stats/</h2>
Enter this code in Imacros:
<pre>
VERSION BUILD=8820413 RECORDER=FX
SET !EXTRACT_TEST_POPUP NO
TAB T=1
URL GOTO=http://localhost/colletct_data_p2pvalue/google_result_stats
TAG POS=1 TYPE=A ATTR=TXT:Buscar
TAG POS=1 TYPE=DIV ATTR=ID:resultStats EXTRACT=TXT
WAIT SECONDS=10
URL GOTO=http://localhost/colletct_data_p2pvalue/google_result_stats/get_google_searchs.php?n=&r={{!EXTRACT}}
</pre>
The rest of the script is used from this path:
<h2>http://localhost/colletct_data_p2pvalue/</h2>
This is a form where you can select the type of information search:
<pre>
Google PageRank
Alexa Rank
Share links Facebook & Linkedin
Get Site Technologies
Get Followers Twitter
Get Followers and views Google+
Get GitHub Commits Branches Releases
</pre>
You have to give write rights to txt files and folders.<br />
As you know, in Internet, everything changes too fast, therefore the scripts might stop working: a mere character change can lead to failure of regular expression searches with the scripts.<br />
Also the language has to be considered, you should check the code and do necessary changes in the text, according to the language; for instance, as scripts are performing searches in Spanish, if we want to search in another language:
<pre>
	//search Google 
	preg_match_all("|Aproximadamente (.*) resultados \(|", $_GET['r'], $t);
</pre>
In English:
<pre>
	//search Google 
	preg_match_all("|Approximately (.*) results \(|", $_GET['r'], $t);
</pre>

These scripts were developed in a very tight deadline, so I know they can be improved, and any comments or suggestions, and direct collaboration on this code are highly appreciated.<br />
If you have any questions, please write to: <a href="mailto:juan@egeon.es>juan@egeon.es</a>


