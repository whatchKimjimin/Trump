<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Sunra\PhpSimple\HtmlDomParser;

$db = new \PDO("mysql:host=gondr.iptime.org;dbname=info11;charset=utf8","info11","1234");

$url = 'https://twitter.com/realDonaldTrump';

$client = new Client();
$res = $client->request('GET', $url);

$dom = HtmlDomParser::str_get_html( $res->getBody() );

$elems = $dom->find( '.tweet-text' );

$content = $elems[0]->plaintext;
echo $content;






//$res2 = $client->request('GET', $url);
//
//$dom2 = HtmlDomParser::str_get_html( $res2->getBody() );
//
//$elems2 = $dom2->find( '._timestamp' );
//$date2 = date('Y-m-d',$elems2[0]->{'data-time'});
//
//$TrumpDate = $date2;

$check = $db->prepare('SELECT * FROM trump_twitts WHERE content = ?');
$check->execute(array($content));

if($check->fetch()) exit;
$req = $db->prepare("INSERT INTO trump_twitts(content,date)values(:content,now())");
$req->execute(array(':content' => $content ));



//
//$sentiment = new \PHPInsight\Sentiment();
//$string = $content;
//    // calculations:
//    $scores = $sentiment->score($string);
//    $class = $sentiment->categorise($string);
//    // output:
//    echo "String: $string\n";
//    echo "Dominant: $class, scores: ";
//    print_r($scores);
//    echo "<br>";
//
//$req = $db->prepare("INSERT INTO trump_feels(sentiment,keyphrases)values(?,?)");
//$req->execute(array($class,json_encode($scores)));