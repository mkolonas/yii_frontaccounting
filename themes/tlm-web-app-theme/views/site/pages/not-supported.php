<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Not Supported Browser';
$this->breadcrumbs=array(
	'Not Supported Browser',
);

	$b = new EWebBrowser();
	$browser=$b->browser;
	$version=$b->version;

	if($browser==EWebBrowser::BROWSER_IE)
		$supported=Yii::app()->params['supportedIEVersion'];
	elseif($browser==EWebBrowser::BROWSER_OPERA)
		$supported=Yii::app()->params['supportedOperaVersion'];
	elseif($browser==EWebBrowser::BROWSER_FIREFOX)
		$supported=Yii::app()->params['supportedFFVersion'];
	elseif($browser==EWebBrowser::BROWSER_CHROME)
		$supported=Yii::app()->params['supportedChromeVersion'];
	elseif($browser==EWebBrowser::BROWSER_SAFARI)
		$supported=Yii::app()->params['supportedSafariVersion'];
?>
<h1>Not Supported Browser</h1>

<p>Sorry, Your browser is not supported.<br/>
Please try to:
<ul>
	<li>Upgrade your Browser to version-<?php echo $supported;?>, or</li>
	<li>open with another browser, or</li>
	<li>download and install Firefox provided <a href="#" style="font-weight:bold;">here</a>, or</li>
	<li>download and install other browser from the official website.</li>
</ul>
</p>
