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
 *               Glyn Normington
 *               Juergen G. Kissner
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DBAccess - Milestone Downloads";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Downloads";
	$pageAuthor		= "Juergen G. Kissner";
		
	# $dbaccessVersions = array("1.1.0.M2", "1.1.0.M1");
	$dbaccessVersions = array("1.1%M2", "1.1%M1", "1.1%M3");
	
	ob_start();
?>

	<script type="text/javascript">
            window.addEvent('domready', function() {
                    new Accordion('h4.toggle', 'div.accordion', {initialDisplayFx: false});
            });
	</script>
	
	<div id="midcolumn">
		<h2>Milestone Downloads</h2>
		<p>
			All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> 
			unless otherwise specified.
		</p>
		
		<p>
			The following are development milestones. You may prefer to <a href="http://www.eclipse.org/gemini/dbaccess/download/">download</a> an official release.
		</p>

		<h4 class='toggle'>1.1.0.M3</h4>
		<div class='accordion'>
			<ul>
				<li><a href='http://www.eclipse.org/gemini/dbaccess/download/release-notes/1.1.0.M3.php' target='_self'>View Release Notes</a></li>
				<li>Update Site 'http://download.eclipse.org/gemini/dbaccess/updates/1.1-M3'</li>
				<li><strong>Gemini DBAccess p2 update site</strong> -  <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/dbaccess/r1.1/milestones/gemini-dbaccess-1.1.0.M3-updates.zip" target="_self">Download</a></li>
			</ul>
		</div>


		<h4 class='toggle'>1.1.0.M2</h4>
		<div class='accordion'>
			<ul>
				<li><a href='http://www.eclipse.org/gemini/dbaccess/download/release-notes/1.1.0.M2.php' target='_self'>View Release Notes</a></li>
				<li>Update Site 'http://download.eclipse.org/gemini/dbaccess/updates/1.1-M2'</li>
				<li><strong>Gemini DBAccess p2 update site</strong> -  <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/dbaccess/r1.1/milestones/gemini-dbaccess-1.1.0.M2-updates.zip" target="_self">Download</a></li>
			</ul>
		</div>

		<h4 class='toggle'>1.1.0.M1</h4>
		<div class='accordion'>
			<ul>
				<li><a href='http://www.eclipse.org/gemini/dbaccess/download/release-notes/1.1.0.M1.php' target='_self'>View Release Notes</a></li>
				<li>Update Site 'http://download.eclipse.org/gemini/dbaccess/updates/1.1-M1'</li>
				<li><strong>Gemini DBAccess p2 update site</strong> -  <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/dbaccess/r1.1/milestones/gemini-dbaccess-1.1.0.M1-updates.zip" target="_self">Download</a></li>
                <li><a href="http://www.eclipse.org/downloads/download.php?file=/gemini/dbaccess/r1.1/milestones/gemini-dbaccess-1.1.0.M1.zip" target="_self">Archive of bundles</a> (deprecated, please use the zipped p2 update site instead</li>
			</ul>
		</div>
				

	</div>
	
	<!-- remove the entire <div> tag to omit the right column!  -->
	<!-- div id="rightcolumn">
		<div class="sideitem">
		   <h6>Incubation</h6>
		   <div id="incubation"><a href="/projects/what-is-incubation.php"><img src="/images/egg-incubation.png" border="0" alt="Incubation" /></a></div>
		</div>
		<!-- div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div>
	</div -->

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>