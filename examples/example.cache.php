<?php
/* CAT:Misc */

/* Include all the classes */ 
require_once("bootstrap.php");

use pChart\{
	pDraw,
	pCharts,
	pCache
};

/* Create a pChart object and associate your dataset */ 
$myPicture = new pDraw(700,230);

/* Add data in your dataset */ 
$myPicture->myData->addPoints([1,3,4,3,5]);

/* Id to help identify the image later */
$uniqueId = serialize($myPicture->myData->Data);

/* Create the cache object */
$myCache = new pCache(["CacheFolder"=>"cache"], $uniqueId);

/* Test if we got this hash in our cache already */
if ($myCache->isInCache()){
	/* If we have it, get the picture from the cache! */
	$myCache->autoOutput("temp/example.cache.png");
	
} else {

	/* Choose a nice font */
	$myPicture->setFontProperties(["FontName"=>"pChart/fonts/Forgotte.ttf","FontSize"=>11]);

	/* Define the boundaries of the graph area */
	$myPicture->setGraphArea(60,40,670,190);

	/* Draw the scale, keep everything automatic */ 
	$myPicture->drawScale();

	/* Draw the scale, keep everything automatic */ 
	(new pCharts($myPicture))->drawSplineChart();

	/* Do some cosmetics */
	$myPicture->drawGradientArea(0,0,700,20,DIRECTION_VERTICAL,["StartR"=>0,"StartG"=>0,"StartB"=>0,"EndR"=>50,"EndG"=>50,"EndB"=>50,"Alpha"=>100]);
	$myPicture->setFontProperties(["FontName"=>"pChart/fonts/Silkscreen.ttf","FontSize"=>6]);
	$myPicture->drawText(10,13,"Test of the pCache class",["R"=>255,"G"=>255,"B"=>255]);

	/* Push the rendered picture to the cache */
	$myCache->writeToCache($myPicture);

	/* Render the picture */
	$myPicture->autoOutput("temp/example.cache.png");
}
?>