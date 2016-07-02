<?php
/**
* Andrew's Hatebase script : Simple script to retrieve results from Hatebase API
*
* @category Awesomeness
* @date 3/03/2014
* @author Andrew Welters <awelters@hugmehugyou.org>
* @license http://opensource.org/licenses/MIT The MIT License
* @link http://www.hatebase.org/connect_api
* @link https://github.com/awelters/hatebase
*/
use Hatebase\HatebaseAPI;

$settings = array(
    'key' => '1d8faaec69276f17a8da885fd4a6c0b8',
    'version' => '3' //optional
);
$hatebase = new HatebaseAPI($settings);

//See http://www.hatebase.org/connect_api for filter options
$filters = array('about_nationality' => 1, 'language' => 'eng', 'vocabulary' => 'nigga');
$output = 'xml'; //either 'xml' or 'json', 'xml' is faster
$query_type = 'vocabulary'; //either 'vocabulary' or 'sightings'

try {
	$result = $hatebase->performRequest($filters, $output, $query_type);
	print_r($result);
}
catch(Exception $e) {
	echo 'Error: '.$e;
}

