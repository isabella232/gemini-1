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
	$pageTitle 		= "Gemini JPA - Support";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, JPA, OSGi, Support";
	$pageAuthor		= "Mike Keith";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>$pageTitle</h2>
		<p>
			You can get support for Gemini JPA by posting to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini forum</a>. Please be sure to indicate the exact nature of your question or problem, including any stack traces or additional information.
		</p>
		<p>
			You can also file bugs in <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Gemini">Bugzilla</a>.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>