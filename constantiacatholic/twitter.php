<?php ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "1351578463-63MVR5Y5bjDkKFst3vcvvvU9zooIWc66hDSLsYI",
    'oauth_access_token_secret' => "IIDTxfH4m8n6hfyLiNx6SQcRnUZR2CbF95KuwKNeUM",
    'consumer_key' => "n1aN8Y4ndNtTyvMsSMUtzg",
    'consumer_secret' => "hLd6SrtRW0tvG4NzDWvEqb3exNauPi7EE0WEXnVHL4"
);

$url="https://api.twitter.com/1.1/statuses/user_timeline.json";
$getfield = '?screen_name=Pontifex&count=2';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$response=$twitter->setGetfield($getfield)
				  ->buildOauth($url, $requestMethod)
				  ->performRequest();
$res=(json_decode($response));
//echo"<pre>";
//print_r($res);
//echo"</pre>";
?>
<style>
    .twitter_status{
    background: white;
    padding: 10px;
    border: 1px solid #ddd;
    margin-bottom: 5px;
    float: left;
    font-family: Georgia,"Times New Roman",Times,serif;
    font-size: 15px;
    width:670;
}
.userimg{
    float: left;
    margin-right: 10px;
    width: 48px;
    height: 48px;
}
.userimg img{
    width: 100%;
    height: auto;
}
.tw_timestamp{
    float: right;
}
.username tw_username{
	width:200px;
}
</style>
<?php
//Tweet Markup
if(!empty($res)){ foreach($res as $tweet){
?>
<div class="twitter_status" id="<?php echo $tweet->id_str; ?>" style="float: left;">
    <div class="bloc_caption" style="width:60px; float: left;">
        <a href="http://twitter.com/Pontifex" style="text-decoration:none;float: left;" target="_blank">
            <img src="<?php echo $tweet->user->profile_image_url; ?>" alt="@<?php echo $tweet->user->name; ?>" class="userimg tw_userimg"/>
        </a>   
    </div>   
    <div class="bloc_content" style="width:600px;float: left;">
	<div>
	<a href="http://twitter.com/Pontifex" style="text-decoration:none;float: left;" target="_blank"><div class="username tw_username" style="width:230px; float:left;"><span style="text-decoration:none; font-weight: bold; color:#000000;"><?php echo $tweet->user->name; ?></span> <span style="color:#878484;">@<?php echo $tweet->user->screen_name; ?></span></div> </a>
	<div class="timestamp tw_timestamp" style="width:250px; float: right; text-align:right; color:#878484;"><?php echo date("d M",strtotime($tweet->created_at)); ?></div>
	</div>
        <div style="clear:both;"></div>
	<p class="status tw_status"><?php echo parseTweet($tweet->text); ?></p>
    </div>
</div>
<?php }} ?>
<?php
/*
 * Transform Tweet plain text into clickable text
 */
function parseTweet($text) {
    $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Link
    $text = preg_replace('#@([a-z0-9_]+)#i', '@<a  target="_blank" href="http://twitter.com/$1">$1</a>', $text); //usernames
    $text = preg_replace('# \#([a-z0-9_-]+)#i', ' #<a target="_blank" href="http://search.twitter.com/search?q=%23$1">$1</a>', $text); //Hashtags
    $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Links
    return $text;
}
?>