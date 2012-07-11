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
 *               Juergen G. Kissner
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DBAccess - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, DBAccess, OSGi, Downloads";
	$pageAuthor		= "Juergen G. Kissner";
		
	ob_start();
?>

<div id="midcolumn">

	<h3>1.1.0.M2 Release Notes</h3>
	
	<p>
		This is a milestone of Gemini DBAccess. It contains the following features: 
	</p>
	<ul>
		<li>Compliance with JDBC 4.1 (Java 7).</li>
	</ul>
	
	<p>
	    The list of all changes can be seen <a href="http://git.eclipse.org/c/gemini.dbaccess/org.eclipse.gemini.dbaccess.git/log/?showmsg=1" target="_self">here</a> (tag v1.1.0-M2).
	</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>