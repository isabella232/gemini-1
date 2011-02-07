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
 * Contributors: 
 *               Mike Keith
 *               Peter Peshev
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DBAccess - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Management, Documentation";
	$pageAuthor		= "Peter Peshev";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini Management Documentation</h2>
		<p>
		Gemini Management implements the JMX  Specification Version 1.0 of the OSGi Service Platform Enterprise Specification, Release 4, Version 4.2, section 124. 
        This specification may be downloaded
			<a href="http://www.osgi.org/Download/Release4V42">here</a>.		
		</p>
		<h4>Wiki Documentation</h4>
		Please refer to the Gemini Management wiki for further documentation
			<ul>
				<li><a href="http://wiki.eclipse.org/Gemini/Management">Gemini Management</a></li>
				<li><a href="http://wiki.eclipse.org/Gemini/Management/GettingStarted">Getting Started</a></li>
			</ul>
		<p>
		The documentation has not been finished yet for this project. If you would like to volunteer to write, or assist in 
		writing them, please send an email to the <a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">developer mailing list</a> or post to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">forum</a>.
		</p>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>