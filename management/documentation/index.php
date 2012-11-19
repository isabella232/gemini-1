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
 *               Lazar Kirchev
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini Management - Documentation";
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
		
		<h3>Extensions to the Specification</h3>
		<p>
		Gemini Management extends the JMX Specification Version 1.0 interface <code>BundleStateMBean</code> with a method <code>TabularData listBundles(int mask)</code>.
		The original interface has the same method, but without arguments. It returns a <code>TabularData</code> object, containing all details for all bundles. The new method
		allows to specify (through the mask) what details to be present in the result. For example, in this way only the ids of all bundles could be retrieved, without any
		other details. In the case of a system with a large number of bundles this could considerably improve the performance since much less data is transferred through the 
		network connection.
		</p>
		<p>
		Gemini Management also extends the <code>ServiceStateMBean</code> with methods for introspection of a single service:
		<ul>
			<li><code>CompositeData getService(long serviceId)</code> - get service by its id</li>
			<li><code>CompositeData getProperty(long serviceId, String key)</code> - get the value of a property of a particular service</li>
			<li><code>TabularData listServices(String clazz, String filter)</code> - get all services implementing an interface and satisfying a filter</li>
			<li><code>TabularData listServices(String clazz, String filter, String... serviceTypeItems)</code> - get all services implementing an interface, satisfying a filter and specifying particular properties</li>
			<li><code>long[] getServiceIds()</code> - get a list of all service ids</li>
		</ul>
		</p>
		<p>
		Both extensions are included in the next version 4.3 of the Enterprise Specification.
		</p>
		
		<h4>Wiki Documentation</h4>
		Please refer to the Gemini Management wiki for further documentation
			<ul>
				<li><a href="http://wiki.eclipse.org/Gemini/Management">Gemini Management</a></li>
				<li><a href="http://wiki.eclipse.org/Gemini/Management/GettingStarted">Getting Started</a></li>
			</ul>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>