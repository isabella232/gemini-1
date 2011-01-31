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
	$pageTitle 		= "Gemini DBAccess - Home";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, DBAccess, Home";
	$pageAuthor		= "Juergen G. Kissner;
			
	ob_start();
?>
	<div id="midcolumn">
		<div class="logo"><h1>Gemini DBAccess</h1></div>
		<p>
			The Gemini DB Access project provides modularized distributions of JDBC drivers 
			suitable for running in OSGi. 
			It exports a DataSourceFactory as an OSGi Service
			so that client applications of the JDBC driver can import and access the features 
			of the driver without having to package the driver as part of the application.
			While the list is currently fairly short, it is expected to grow as the needs of 
			its users grow, and resources to implement 
			them increase.
		</p>
		<h4>Modularity</h4>
		<p>
		The Gemini DB Access project is packaged as a small number of separate and standalone modules. 
		</p>
		<h4>Independence</h4>
		<p>		    
		    Gemini DB Access  integrates with other modules of the
			Gemini project, especially with Gemini JPA,
			but it can also be consumed as individual module by
			any OSGi application.
		</p>
		
	</div>

	<!-- remove the entire <div> tag to omit the right column!  -->
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Quick Links</h6>
			<ul>
				<li><a href="http://wiki.eclipse.org/Gemini/DBAccess">Gemini DBAccess Wiki</a></li>
				<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153&">Gemini Forum</a></li>  
				<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
				<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=rt.gemini.dbaccess">Project Summary</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini">Gemini Bugzilla</a></li>
				<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini.DBAccess">DBAccess Bugzilla</a></li>
			</ul>
		</div>
		<div class="sideitem">
			<h6>Incubation</h6>
			<div id="incubation">
				<a href="/projects/what-is-incubation.php">
					<img align="center" src="/gemini/images/egg-incubation.png" border="0" alt="Incubation" />
				</a>
			</div>
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