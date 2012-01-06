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
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Web - Release Notes";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, Management, OSGi, Downloads";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>

<div id="midcolumn">

	<h3>1.0.0.RC1-incubation - Release Notes</h3>
	
	<p>
		This is the release candidate of Gemini Management, no more features will be added. The documentation 
		will be improved before the release but assuming there are no bugs found this will be the first formal 
		release of Gemini Management. You can see all the bugs that have been completed for this release below. 
		The big changes for this milestone are as follows.
	</p>
	<p>
		Some improved testing and minor performance improvements along with more Java doc and better code layout.
	</p>
	<p>
		Implementation of new methods for the upcoming changes in the OSGi Enterprise JMX spec, these changes are 
		outlined in RFC 169, a public draft of this is available <a href="http://www.osgi.org/download/osgi-early-draft-2011-09.pdf">
		here</a>. Please note these additional methods do not affect the 1.0 spec functionality and are likely to 
		change as the new spec hasn't been finalised yet.
	</p>
	<ul>
		<li>New BundleStateMBean methods to allow a single bundle and individual manifest headers to be inspected.</li>
		<li>New BundleStateMBean methods to allow the fields in a listing of bundles to be filtered.</li>
		<li>New ServiceStateMBean methods to allow a single service to be inspected.</li>
		<li>New ServiceStateMBean methods to allow the fields in a listing of services to be filtered.</li>
		<li>New FrameworkMBean methods for refreshing a bundle and getting some wiring information.</li>
		<li>Initial implementation of the WiringStateMBean which will replace the deprecated PacakgeStateMBean.</li>
	</ul>
	<p>
		Full bug list is available <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;classification=RT;product=Gemini.Management;target_milestone=1.0.0.M02-incubation" target="_self">here</a>.
	</p>

</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>