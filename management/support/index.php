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
	$pageTitle 		= "Gemini Management - Support";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Support";
	$pageAuthor		= "Christopher Frost";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Community Forum</h2>
		<p>
			The Gemini Forum is intended for user community discussions on Gemini usage and troubleshooting.
			Developers using Gemini Management should refer to the <a href="http://wiki.eclipse.org/Gemini/Management">Gemini Management wiki</a>
			and the <a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Gemini Developer mailing list</a>.
		</p>
		<ul>
			<li>
				<a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Browse forum posts</a> using the web interface.
			</li>
			<li>
				<a href="news://news.eclipse.org/eclipse.rt.gemini">Subscribe</a> to the forum with your news reader.
				<a href="http://wiki.eclipse.org/index.php/Webmaster_FAQ#How_do_I_access_the_Eclipse_newsgroups.3F">See the FAQ</a>
				for instructions on subscribing.
			</li>
		</ul>
		
		<h2>Open Source Support for Gemini Management</h2>
		<p>
			Submit bugs using the <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=Gemini.Management">Bugzilla web interface</a>.
			Please <a href="https://bugs.eclipse.org/bugs/query.cgi?product=Gemini.Management">search for duplicates</a> first.
		</p>
			For defects, provide steps to reproduce. For enhancements, describe a use case.
		</p>
		<p>
			Committers prioritise critical bug fixes and enhancements and cannot respond to all inquiries.
		</p>
		<ul>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced;bug_status=NEW;bug_status=ASSIGNED;bug_status=REOPENED;product=Gemini.Management;classification=RT">View all open bugs/issues</a></li>
		</ul>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>