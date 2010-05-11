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
	$pageTitle 		= "About Gemini JPA";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, History, origin, origins, about";
	$pageAuthor		= "Mike Keith";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>$pageTitle</h2>
		<p>
			The Gemini JPA project provides the ability to leverage JPA persistence in a modular environment. 
			The Gemini JPA project is the continuation of the Reference Implementation for the JPA chapter of the OSGi Alliance Enterprise Specification, and wraps EclipseLink to offer an OSGi Enterprise Specification compliant JPA provider. A Gemini DB Access module can be used by the provider to read and write through the JDBC driver.
		</p>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>