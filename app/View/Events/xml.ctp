<?php
$xmlArray = array();
foreach ($results as $result) {
	$result['Event']['Attribute'] = $result['Attribute'];
	$xmlArray['MISP']['Event'][] = $result['Event'];
}

$xmlObject = Xml::fromArray($xmlArray, array('format' => 'tags'));
echo $xmlObject->asXML();
