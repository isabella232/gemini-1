<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "Getting Involved in Gemini Naming";
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/gemini/naming/style.css"/>');

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p/>
<p>Post a message to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini forum</a> to indicate that you would like to get involved, and how/what you would like to contribute.

<p>For more information, please refer to the <a href="http://wiki.eclipse.org/Gemini/Naming/CommitterGuide">Gemini Naming Committer Guide</a> on the Gemini Naming Wiki.  

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>