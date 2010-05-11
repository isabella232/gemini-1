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
	$pageTitle 		= "Gemini JPA - Getting Involved";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Contribute, Developers, help";
	$pageAuthor		= "Mike Keith";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini JPA - Getting Involved</h2>
		<p>
			Download Gemini JPA and try it out. Read the docs. Check out the code. Then tweet, blog, or post to the 
			<a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev"> developer mailing list</a>. 
			If you find issues, or have suggestions then you might want to file a 
			<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;order=Importance;classification=RT;product=Gemini">
			bug</a> or send in a patch to the docs or code.
		</p>
		<p>
			You can always post a message to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini forum</a> to indicate that you would like to get involved, and how/what you would like to contribute.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>