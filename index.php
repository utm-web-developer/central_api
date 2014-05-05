<script src="http://www.utm.my/dev/bootstrap/js/bootstrap.min.js"></script>
<link href="http://www.utm.my/dev/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">  

<div class="container">
<div class="row">
	<div class="col-md-7"><hr>UTM APPLICATION PROTOCOL INTERFACE<hr>
	We at UTM Webteam have developed several systems which are accessible throughout the websites. 
	To increase the accessible of our content, we have developed an Application Protocol Interface (API) 
	which capable of distributing our data to other devices. Following the REST protocol, 
	we use the JSON format as our medium.<p>
	</div>


<div class="col-md-7"><b>For other UTM web developers, we will accept your API if you follows the JSONP protocol. Of course the API must be a non-destructive access (only for viewing).</b><br><br>
These were the parameter accepted by our API server.<br><br>
<ul><li><b>http://www.utm.my/dev/api/api.php?interface=[parameter]</b></li></ul><hr>
PARAMETERS ACCEPTED<hr></div>


<div class="col-md-8">
1.[iboard]
<br>Returns the iboard related content feeded from the iboard server located at <a href="http://www.utm.my/iboard/showiboard">http://www.utm.my/iboard/showiboard</a>
<br><br>
2.[podcast]
<br>Returns the podcast related content from podcast site <a href="http://www.utm.my/listen/podcast/">http://www.utm.my/listen/podcast</a>
<br><br>
3.[utm_event]
<br>Return four (4) events which feeded from the events server located at <a href="http://events.utm.my/">http://events.utm.my</a>
<br><br>
4.[utm_news_latest]
<br>Return all news which feeded from the news server located at <a href="http://www.news.utm.my/">http://news.utm.my</a>
<br><br>
5.[about_me]
<br>This parameter require an another parameter "username" and a value
<br><b>http://www.utm.my/dev/api/api.php?interface=about-me&username=[value]</b>
<br>[value] of username must be a valid <a href="https://about.me/login">about.me</a> username.
<br><br>	
6.[scival]
<br>This parameter require an additional parameter "expertid" and a value
<br><b>http://www.utm.my/dev/api/api.php?interface=scival&expertid=[value]</b>
<br>[value] of expertid must be a positive integer.
<br><br>	
7.[twitter_hashtag]
<br>This parameter require an additional parameter "hashtag" and a value
<br><b>http://www.utm.my/dev/api/api.php?interface=twitter-hashtag&hashtag=[value]</b>
<br>[value] of hashtag is what you want to search.
<br><br>
8.[utm_facebook_feed]
<br>Return all status posted by utm in facebook together with posted date.
<br><br>
9.[profile]
<br>This parameter require an additional parameter "entry_id" and a value
<br>Return profile of the respective id.


</div>
</div>
