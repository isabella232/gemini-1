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
 *               Mike Keith
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini JPA - Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, OSGi, JPA, Downloads";
	$pageAuthor		= "Mike Keith";

	$milestoneM1 = "1.0.0.M1-incubation";
	$milestoneM2 = "1.0.0.M2-incubation";
	$milestoneM3 = "1.0.0.M3-incubation";
	$milestoneM4 = "1.0.0.M4-incubation";
	$milestoneRC1 = "1.0.0.RC1";

	$latestMilestone = "1.0.0.RC1";

	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini JPA - Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the 
			<a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.
		</p>
        <h2>Latest Milestone of Gemini JPA: <?=$latestMilestone ?></h2>
		<br/>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$latestMilestone ?>.zip" target="_self">Download</a>
		</p>
        <h2>1.0.0 Milestones of Gemini JPA</h2>
		<br/>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneRC1 ?>.zip" target="_self">1.0.0 RC1</a>
		</p>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneM4 ?>.zip" target="_self">1.0.0 Milestone 4</a>
		</p>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneM3 ?>.zip" target="_self">1.0.0 Milestone 3</a>
		</p>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneM2 ?>.zip" target="_self">1.0.0 Milestone 2</a>
		</p>
		<p>
			<a href="http://www.eclipse.org/downloads/download.php?file=/gemini/jpa/r1.0/milestones/gemini-jpa-<?=$milestoneM1 ?>.zip" target="_self">1.0.0 Milestone 1</a>
		</p>

	</div>

	<!-- remove the entire <div> tag to omit the right column! 
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div id="incubation">
				<a href="/projects/what-is-incubation.php">
					<img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>
	</div>
    -->
<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>