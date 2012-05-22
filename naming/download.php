<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009, 2012 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Mike Keith
 *    Violeta Georgieva
 *******************************************************************************/

	$pageTitle 		= "Gemini Naming Downloads";
	#$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/gemini/naming/style.css"/>');

	$html  = <<<EOHTML

<div id="midcolumn">
	<h2>$pageTitle</h2>
	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

	<h2>Releases</h2>
	
    <h4>1.0.0.RELEASE</h4>
	<div>
		<ul>
 		<li><strong>Gemini Naming</strong> - <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/gemini-naming-1.0.0.RELEASE.zip">Download</a></li>
		<li><strong>Gemini Naming p2 repository</strong> - <a href='http://download.eclipse.org/gemini/updates/naming/1.0.0/' target='_self'>http://download.eclipse.org/gemini/updates/naming/1.0.0/</a></li>
		<li>
			<strong>Gemini Naming maven repository</strong> - <a href='http://download.eclipse.org/gemini/mvn/' target='_self'>http://download.eclipse.org/gemini/mvn/</a>
			<br><groupId>org.eclipse</groupId></br>
  			<br><artifactId>org.eclipse.gemini.naming</artifactId></br>
  			<br><version>1.0.0.RELEASE</version></br>		
		</li>
		<li><strong>Bug list is available</strong> - <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.M01;target_milestone=1.0.0.M02;target_milestone=1.0.0.RC1;target_milestone=1.0.0.RELEASE;product=Gemini.Naming" target="_self">here</a>.</li>
		</ul>
	</div>


	<h2>Development Milestones</h2>
    
    <h4>1.0.0.RC1</h4>
	<div>
		<ul>
 		<li><strong>Gemini Naming</strong> - <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.RC1.zip">Download</a></li>
		<li><strong>Bug list is available</strong> - <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.RC1;product=Gemini.Naming" target="_self">here</a>.</li>
		</ul>
	</div>
		
    <h4>1.0.0.M02</h4>
	<div>
		<ul>
 		<li><strong>Gemini Naming</strong> - <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.M02.zip">Download</a></li>
		<li><strong>Bug list is available</strong> - <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.M02;product=Gemini.Naming" target="_self">here</a>.</li>
		</ul>
	</div>

    <h4>1.0.0.M01-incubation</h4>
	<div>
		<ul>
 		<li><strong>Gemini Naming</strong> - <a href="http://www.eclipse.org/downloads/download.php?file=/gemini/naming/r1.0/milestones/gemini-naming-1.0.0.M01-incubation.zip">Download</a></li>
		<li><strong>Bug list is available</strong> - <a href="https://bugs.eclipse.org/bugs/buglist.cgi?classification=RT;query_format=advanced;bug_status=RESOLVED;bug_status=VERIFIED;bug_status=CLOSED;target_milestone=1.0.0.M01;product=Gemini.Naming" target="_self">here</a>.</li>
		</ul>
	</div>
</div>

<div id="rightcolumn">
</div>

EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>