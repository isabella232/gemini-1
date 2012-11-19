<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Management - Release Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Management, Documentation";
	$pageAuthor		= "Christopher Frost";

	$geminiManagementVersions = array("1.0.3.RELEASE", "1.0.2.RELEASE", "1.0.1.RELEASE", "1.0.0.RELEASE");

	ob_start();
?>

	<script type="text/javascript">
            window.addEvent('domready', function() {
                    new Accordion('h4.toggle', 'div.accordion', {initialDisplayFx: false});
            });
	</script>
	
	<div id="midcolumn">
		<h2>Gemini Management Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
			unless otherwise specified.
		</p>
	
	<?
	$first = true;
	foreach ($geminiManagementVersions as $version){
		echo "<h4 class='toggle'>$version";
		if ($first) {
			echo " - Latest</h4>";
		} else {
			echo "</h4>";
		}
		echo "<div class='accordion'>";
		echo "	<ul>";
		echo "		<li><a href='http://www.eclipse.org/gemini/management/download/release-notes/$version.php' target='_self'>View Release Notes</a></li>";
		echo "		<li>Update Site 'http://download.eclipse.org/gemini/updates/management/$version'</li>";
		if($version == '1.0.0.RELEASE' | $version == '1.0.1.RELEASE') {
			echo "		<li><strong>Gemini Management</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini/management/release-zips/$version/org.eclipse.gemini.mgmt_$version.jar' target='_self'>Download</a>";
		}else {
			echo "		<li><strong>Gemini Management</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini/management/release-zips/$version/org.eclipse.gemini.management-$version.jar' target='_self'>Download</a> - ";
			echo "			<a href='http://www.eclipse.org/downloads/download.php?file=/gemini/management/release-zips/$version/org.eclipse.gemini.management-$version-sources.jar' target='_self'>(Source)</a></li>";
		}
		echo "	</ul>";
		echo "</div>";
		$first = false;
	}
	?>

		<h2>Development Milestones</h2>
		<p>
			Development milestones for the 2.0.x line are available for <a href="/gemini/management/download/milestones.php">download</a>. 
		</p>
	
	</div>


<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>