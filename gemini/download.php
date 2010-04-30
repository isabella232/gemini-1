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
	$pageTitle 		= "Gemini - Downloads";
	
	ob_start();
?>
<div>
	<a id="content-logo" href="/gemini"></a>
</div>
<div id="bigbuttons">
	<h3>Primary Links</h3>
	<ul>
		<li><a id="buttonDownload" 		href="/gemini/gemini/download.php" 			title="Download">Module Downloads</a></li>
		<li><a id="buttonDocumentation" href="/gemini/gemini/documentation.php" 	title="Documentation">Tutorials, Examples, Reference Documentation</a></li>
		<li><a id="buttonSupport" 		href="/gemini/gemini/support.php" 			title="Support">Forum</a></li>
		<li><a id="buttonInvolved" 		href="/gemini/gemini/getting_involved.php" 	title="Getting Involved">SVN, Workspace Setup, Wiki, Committers</a></li>
	</ul>
</div>

<div id="midcolumn">
	<h2><? echo $pageTitle; ?></h2>
	
	<p>
		All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">
		Eclipse Foundation Software User Agreement</a> unless otherwise specified.
	</p>

	<h3>Gemini Subprojects</h3>
	<ul>
		<li><a href="http://www.eclipse.org/gemini/web/download"		>Gemini Web</a></li>
		<li><a href="http://www.eclipse.org/gemini/blueprint/download"	>Gemini Blueprint</a></li>
		<li><a href="http://www.eclipse.org/gemini/jpa/download"		>Gemini JPA</a></li>
		<li><a href="http://www.eclipse.org/gemini/dbaccess/download"	>Gemini DBAccess</a></li>
		<li><a href="http://www.eclipse.org/gemini/management/download"	>Gemini Management</a></li>
		<li><a href="http://www.eclipse.org/gemini/naming/download"		>Gemini Naming</a></li>
	</ul>

</div>

<div id="rightcolumn">

	<div class="sideitem">
		<h6>Incubation</h6>
		<div id="incubation" align="center">
	   		<a href="/projects/what-is-incubation.php">
	   			<img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" />
	   		</a>
	   	</div>
	</div>
	
</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>