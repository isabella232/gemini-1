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
	$pageTitle 		= "Gemini Web - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, Management, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>

<div id="midcolumn">

	<h3>1.0.2.RELEASE - Release Notes</h3>
	
	<p>
		This is a minor bug fix of Gemini Management. Two extra methods have been added to the ServiceStateMBean to 
		allow the lookup of Services based on BundleId. Naming has also been improved throughout the project with 
		all instances of 'mgmt' being replaced with 'management'. You may need to update your p2 references if 
		you use the update site.
	</p>
	<p>
		For a full list of bugs please see 
		<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Management;target_milestone=1.0.2.RELEASE" target="_self">here</a>.
	</p>


</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>