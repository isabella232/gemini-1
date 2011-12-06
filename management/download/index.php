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
		
		
<!--	<h4 class='toggle'>1.0.0.RELEASE</h4>
		<div class='accordion'>
			<ul>
				<li><a href='http://www.eclipse.org/gemini/web/download/release-notes/2.0.0.RELEASE.php' target='_self'>View Release Notes</a> (<a href="https://bugs.eclipse.org/bugs/attachment.cgi?id=200887">Download approved IP log</a>)</li>
				<li><strong>Gemini Web</strong> -  <a href='http://www.eclipse.org/downloads/download.php?file=/gemini/web/release/GW/2.0.0.RELEASE/gemini-web-2.0.0.RELEASE.zip' target='_self'>Download</a></li>
				<li>Documentation is included with the download and can be viewed on line <a href="http://www.eclipse.org/gemini/web/documentation/">here</a>.
			</ul>
		</div>-->

		<h2>Development Milestones</h2>
		<p>
			Development milestones are available for <a href="http://www.eclipse.org/gemini/web/download/milestones.php">download</a>. 
		</p>
	
	</div>

	<div id="rightcolumn">
		<div class="sideitem">
		   <h6>Incubation</h6>
		   <div align="center"><a href="/projects/what-is-incubation.php"><img 
		        align="center" src="/images/egg-incubation.png" 
		        border="0" alt="Incubation" /></a></div>
		</div>
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Gemini">Gemini Wiki</a></li>
				<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153&">Gemini Forum</a></li>  
				<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
				<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=rt.gemini.management">Subproject Summary</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini">Gemini Bugzilla</a></li>
			</ul>
		</div>
		<!-- div class="sideitem">
			<h6>&lt;h6&gt; tag</h6>
				<div class="modal">
					Wrapping your content using a div.modal tag here will add the gradient background
				</div>
		</div -->
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>