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
<div id="header-logo">
	<a id="content-logo" href="/gemini">
		<img src="/gemini/images/logo/logo-small.png"/>
	</a>
</div>

<div id="midcolumn">
	<h2>Gemini - Enterprise Modules Project</h2>
	
	<div class="section">

		<p>The Gemini project is all about modular implementations of Java EE technology. It is a collection of 
		implementations of some of the OSGi Enterprise specifications. Each sub-project is a separate and standalone 
		project that provides unique functionality. They can be used in isolation, in combination or with other 
		OSGi bundles to compose a desired OSGi runtime. Brief outlines of each sub-project are below, please visit 
		the sub-projects' pages for more detailed information. All sub-projects share the Gemini Forum for discussions.</p>

		<h4><a href="http://www.eclipse.org/gemini/blueprint">Gemini Blueprint</a></h4>

		<p>The reference implementation of the OSGi Blueprint Service defined in chapter 121 of the OSGi 4.2 Enterprise 
		Specification. This project was originally called Spring DM before being donated to Eclipse and becoming Gemini 
		Blueprint.</p>

		<h4><a href="http://www.eclipse.org/gemini/management">Gemini Management</a></h4>

		<p>Implements the JMX™ Management Model Specification defined in chapter 124 of the OSGi 4.2 Enterprise 
		Specification. It provides a set of MBeans that allows for the administration of an OSGi runtime, the framework 
		and its bundles and services, over JMX™.</p>

		<h4><a href="http://www.eclipse.org/gemini/dbaccess">Gemini DBAccess</a></h4>

		<p>Provides modularised distributions of JDBC™ drivers suitable for running in OSGi. It provides an OSGi Service 
		so that bundles can import and access features of the driver without having to package the driver within their 
		own bundles. Defined in chapter 125 of the OSGi 5.0 Enterprise Specification, JDBC™ Service Specification.</p>

		<h4><a href="http://www.eclipse.org/gemini/naming">Gemini Naming</a></h4>

		<p>Implements support for Java Naming and Directory Interface™ within an OSGi environment as defined by the 
		JNDI™ Services Specification in chapter 126 of the OSGi 5.0 Enterprise Specification.</p>

		<h4><a href="http://www.eclipse.org/gemini/jpa">Gemini JPA</a></h4>

		<p>The Reference Implementation of the Java Persistence API (JPA) Service Specification defined in chapter 
		127 of the OSGi 5.0 Enterprise Specification. This project supports the OSGi JPA service specification approach 
		that enables clients to use JPA in an OSGi framework.</p>

		<h4><a href="http://www.eclipse.org/gemini/web">Gemini Web</a></h4>

		<p>Gemini Web is the Reference Implementation of the Web Applications Specification from the OSGi Alliance, 
		defined in chapter 128 of the OSGi 4.2 Enterprise Specification. It provides support for running enterprise web 
		applications within an OSGi framework.</p>

	</div>

	<div id="free" class="section">
		<h4>Free and Easy</h4>
		<p>Like everything else at Eclipse, getting started is as easy as downloading and trying it out!</p>
	</div>

    <div id="footer-logo">
        <object width="640" height="480">
            <a href="http://www.eclipse.org/eclipsert"> 
               <img src="/equinox/images/EclipseRT.png" alt="RT"/>                
            </a>
        </object>
    </div>

</div>

<div id="rightcolumn">

	<div class="sideitem">
		<h6>Quick Links</h6>
		<ul>
			<li><a href="http://wiki.eclipse.org/Gemini">Gemini Wiki</a></li>
			<li><a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">Gemini Forum</a></li>  
			<li><a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">Developer Mailing List</a></li>
			<li><a href="/projects/project_summary.php?projectid=rt.gemini">About This Project</a></li>
		</ul>
	</div>

	<div class="sideitem">
		<h6>Headlines on the web</h6>
		<p><a href="http://campustechnology.com/articles/2010/03/25/eclipse-foundation-approves-gemini-virgo-projects.aspx">Campus technology article on Gemini project approval</a><br>Mar 25 2010</p>
        <p><a href="http://www.h-online.com/open/news/item/EclipseCon-2010-Virgo-and-Gemini-to-be-accepted-into-EclipseRT-962224.html">The H article on Gemini joining Eclipse RT</a><br>Mar 24 2010</p>
        <p><a href="http://www.eclipsecon.org/2010/sessions/sessions?id=1125">Gemini at EclipseCon</a><br>Mar 23 2010</p>
        <p><a href="http://www.devsource.com/c/a/Architecture/Oracle-SpringSource-Launch-OSGiBased-Eclipse-Project/">eWeek article on project Launch</a><br>Nov 25 2009</p>
	</div>

</div>

<?
	$html = ob_get_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, null, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>