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
<div id="content-header">
	<a id="content-logo" href="/gemini">
		<img src="/gemini/images/logo/logo-small.png"/>
	</a>
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
	<h2>Gemini - Enterprise Modules Project</h2>
	<h4>Making the world thinner... one module at a time</h4>
	
	<div class="section">
		<p class="left">
			The Enterprise Modules Project (Gemini) is all about modular implementations 
			of Java EE technology. It provides the ability for users to consume individual modules as needed,
			without requiring unnecessary additional runtime pieces.
		</p>
		<p class="right">
			The modules run on the Equinox OSGi framework and leverage the OSGi bundle model
			of packaging and lifecycle activation.
		</p>
	</div>

	<div class="section" id="screencast">
		<object width="640" height="10"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /></object>
	</div>

<!-- 
<div id="screencast">
<object width="640" height="480"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id=8260921&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=DBD7EF&amp;fullscreen=1" /><embed src="http://vimeo.com/moogaloop.swf?clip_id=8260921&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=DBD7EF&amp;fullscreen=1" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="480"></embed></object>
</div>
-->

<!-- 
<h3>...and yet powerful</h3>
-->
 
	<div id="modularity" class="section">
		<h4>Modularity</h4>
		<p>Each of the sub-projects is packaged as a separate and standalone module.</p>
	</div>

	<div id="independence" class="section">
		<h4>Independence</h4>
		<p>Most of the subproject modules are downloadable and executable independently from the others.</p>
	</div>

	<div id="free" class="section">
		<h4>Free and Easy</h4>
		<p>Like everything else at Eclipse, getting started is as easy as downloading and trying it out!</p>
	</div>

	<div id="more" class="section">
		<h4>Find out more</h4>
		<ul>
			<li><a href="http://wiki.eclipse.org/Gemini">Gemini Wiki</a></li>
			<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini Forum</a></li>  
			<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
			<li><a href="/projects/project_summary.php?projectid=rt.gemini">Project Summary</a></li>
		</ul>
	</div>

</div>

<div id="rightcolumn">

	<div class="sideitem">
		<h6>Current Status</h6>
		<p>We are currently going through the initialisation and legal phases of getting the code into Eclipse.</p>
	</div>
	
	<div class="sideitem">
		<h6>Incubation</h6>
		<div id="incubation" align="center">
	   		<a href="/projects/what-is-incubation.php">
	   			<img align="center" src="/images/egg-incubation.png" border="0" alt="Incubation" />
	   		</a>
	   	</div>
	</div>

	<div class="sideitem">
		<h6>Gemini Subprojects</h6>
		<ul>
			<li><a href="http://www.eclipse.org/gemini/web">Gemini Web</a></li>
			<li><a href="http://www.eclipse.org/gemini/blueprint">Gemini Blueprint</a></li>
			<li><a href="http://www.eclipse.org/gemini/jpa">Gemini JPA</a></li>
			<li><a href="http://www.eclipse.org/gemini/dbaccess">Gemini DBAccess</a></li>
			<li><a href="http://www.eclipse.org/gemini/management">Gemini Management</a></li>
			<li><a href="http://www.eclipse.org/gemini/naming">Gemini Naming</a></li>
		</ul>
	</div>

	<div class="sideitem" id="headlines">
		<h6>Headlines on the web</h6>
		<p><a href="http://www.devsource.com/c/a/Architecture/Oracle-SpringSource-Launch-OSGiBased-Eclipse-Project/">eWeek article on project Launch</a><br>Nov 25 2009</p>
		<p><a href="http://www.eclipsecon.org/2010/sessions/sessions?id=1125">Gemini at EclipseCon</a><br>Mar 23 2010</p>
		<p><a href="http://www.h-online.com/open/news/item/EclipseCon-2010-Virgo-and-Gemini-to-be-accepted-into-EclipseRT-962224.html">The H article on Gemini joining Eclipse RT</a><br>Mar 24 2010</p>
		<p><a href="http://campustechnology.com/articles/2010/03/25/eclipse-foundation-approves-gemini-virgo-projects.aspx">Campus technology article on Gemini project approval</a><br>Mar 25 2010</p>
	</div>

	<!--<div id="centreimage">
		<object width="640" height="480">
			<a href="http://www.eclipse.org/gemini"> 
			   <img src="/gemini/images/geminiConstellation.png" alt="The Sign"/> 
			</a>
		</object>
	</div>-->

</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>