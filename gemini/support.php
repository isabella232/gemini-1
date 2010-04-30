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
 * Contributors: mkeith, frostc
 *    
 *******************************************************************************/

	$localVersion = false;
	
	# Define these here, or in _projectCommon.php for site-wide values
	$pageKeywords	= "eclipse, project, gemini, modules, osgi, enterprise";
	$pageAuthor		= "Mike Keith";
	$pageTitle 		= "Gemini Home";
	
	ob_start();
?>
<div id="bigbuttons">
<h3>Primary Links</h3>
<ul>
	<li><a id="buttonDownload" 		href="gemini/download.php" 			title="Download">Module Downloads</a></li>
	<li><a id="buttonDocumentation" href="gemini/documentation.php" 	title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
	<li><a id="buttonSupport" 		href="gemini/support.php" 			title="Support">Forum</a></li>
	<li><a id="buttonInvolved" 		href="gemini/getting_involved.php" 	title="Getting Involved">SVN, Workspace Setup, Wiki, Committers</a></li>
</ul>
</div>

<div id="midcolumn">
	<h2>$pageTitle</h2>

	<p>
		You can get support for all Gemini subprojects by posting to the 
		<a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">
		Gemini forum</a>. Please be sure to indicate the exact nature of your 
		question or problem, including any stack traces or additional information.
	</p>

	<h3>Gemini Subprojects</h3>
	<br><a href="http://www.eclipse.org/gemini/web/support"			>Gemini Web</a>
	<br><a href="http://www.eclipse.org/gemini/blueprint/support"	>Gemini Blueprint</a>
	<br><a href="http://www.eclipse.org/gemini/jpa/support"			>Gemini JPA</a>
	<br><a href="http://www.eclipse.org/gemini/dbaccess/support"	>Gemini DBAccess</a>
	<br><a href="http://www.eclipse.org/gemini/management/support"	>Gemini Management</a>
	<br><a href="http://www.eclipse.org/gemini/naming/support"		>Gemini Naming</a>

</div>
<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>