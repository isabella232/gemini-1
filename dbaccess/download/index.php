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
 *               Juergen G. Kissner
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DBAccess - Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, OSGi, DBAccess, Downloads";
	$pageAuthor		= "Juergen G. Kissner";

	$milestoneM1 = "1.1.0.M1";
	$milestoneRC1 = "1.1.0.RC1";
	$milestoneRC2 = "1.1.0.RC2";
	$milestoneRELEASE = "1.0.0.RELEASE";
	
	$latestMilestone = "1.0.0.RELEASE";
	
	ob_start();
?>

	<script type="text/javascript">
            window.addEvent('domready', function() {
                    new Accordion('h4.toggle', 'div.accordion', {initialDisplayFx: false});
            });
	</script>
	
	<div id="midcolumn">
		<h2>Gemini DBAccess Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
			unless otherwise specified.
		</p>
	
		<h4 class='toggle'>1.0.0.RELEASE</h4>
		<div class='accordion'>
			<ul>
				<li>Update Site 'http://download.eclipse.org/gemini/updates/dbaccess/1.0.0'</li>
				<li><strong>Gemini DBAccess</strong> -  <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/dbaccess/r1.0/milestones/gemini-dbaccess-<?=$latestMilestone ?>.zip" target="_self">Download</a></li>
			</ul>
		</div>


		<h2>Development Milestones</h2>
		<p>
			Development milestones are available for <a href="/gemini/dbaccess/download/milestones.php">download</a>. 
		</p>
	
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<!-- div id="rightcolumn">
		<div class="sideitem">
			<h6>Incubation</h6>
			<div id="incubation">
				<a href="/projects/what-is-incubation.php">
					<img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
		</div>
	</div -->

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>