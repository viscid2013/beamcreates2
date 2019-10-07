<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web Work</title>
</head>

<body>
	
	<h2 class="w3-text-theme">Web Work</h2>

<img src="../branding_icons/mecoding.png" alt="bearded coding" style="max-width: 50%;" />
	<div>
		<p>
		I create web interfaces using HTML/Responsive CSS with MySQL/PHP-PDO and Javascript/jQuery. I did much of my early coding work as a Digital Librarian with Wake County Public Libraries, before taking on a management and administration role overseeing the department whose work includes handling WCPL's web presence. I am in the process of working on personal projects to deepen and enhance my knowledge and skills in these areas.
		</p>
		<h3 class="w3-padding-small w3-border-bottom w3-border-top w3-text-theme" style="font-weight: bold;">Personal Projects</h3>
			<p style="font-style: italic; font-weight: bold;">Current Experimental Projects:</p>
				<p><a href=""><img src="../branding_icons/vc_logotype.svg" alt="viscid creates logo" style="width: 85%;" /></a></p>
				<p>Summary:</p>
					<p>Viscid Creates is an experimental online graphics portfolio and store created as a testing and learning ground for refining and practicing my skills.</p>
				<p>Code:</p>
					<ul>
					<li>HTML and W3-CSS for responsive design</li>
					<li>Plain Javascript (mostly, see notes) for DOM manipulation and enhanced funtionality</li>
					<li>PHP with PDO/MySQL</li>
					</ul>
				<p>Core Features:</p>
					<ul>
					<li>Responsive display of squared, tiled images that can be searched by keyword and filtered by available print size.</li>
					<li>Images can be expanded into a modal slideshow on larger screens.</li>
					<li>Each image tile contains a toolbar for liking, commenting, and sharing.</li>
					<li>Modal and mobile tile views include a print size selection and "add to cart" button.</li>
					<li>Account creationn/login and editable profile, including avatar, contact info, payment info, and communication preferences.</li>
					<li>Shopping cart: add, view, remove.</li>
					<li>Contact forms for custom work and general queries.</li>
					</ul>
				<p>Notes:</p>
					<ul>
					<li>Viscid Creates is about 85% functional, and I might revisit in future to flesh it out beyond the experimental stage.</li>
					<li>I set out to use pure Javascript as much as possible for the DOM manipulation, but did end up incorporating and modifying some instances of pre-built jQuery and Javascript for editing and displaying user avatars and for a custom accordion. Credit is given in the code comments.</li>
					<li>All test images are my own work.</li>
					</ul>

			<p style="font-style: italic; font-weight: bold;">Upcoming Experimental Projects:</p>
				<p><img src="../web_images/versus_logo.png" alt="versus-verses logo" /></p>
					<p>Summary:</p>
					<p>As you will read below, I created an interface to manage a Teen Poetry Contest several years ago. While it served its purpose, it could have been a lot more, so I would like to have a go at creating it as it could have been.</p>

		
		<h3 class="w3-padding-small w3-border-bottom w3-border-top w3-text-theme" style="font-weight: bold;">Web Work with the Public Libraries</h3>
			<p style="font-style: italic; font-weight: bold;">Part 1: Discontinued but still viewable/partly functional interfaces:</p>
				<p class="w3-padding-small w3-text-theme"><a href="http://digwebcode.wakegov.com/src/SAP/suggest_form_hx.php?showSecretForm=yes"><img src="../web_images/wcpl_sap.png" alt="wcpl suggest a purchase logo" /></a></p>
						<p>Summary:</p>
							<p>I built the Suggest a Purchase System to manage purchase recommendations from library patrons.</p>
						<p>Code:</p>
							<ul>
							<li>HTML, CSS, and Javascript</li>
							<li>PHP/MySQL </li>
							<li>ODBC Connection to the Horizon Integrated Library System</li>
							<li>Google Books API integration</li>
							</ul>
						<p>Core Features:</p>
							<ul>
							<li>Suggest a Purchase form to allow materials purchase recommendations from patrons.</li>
							<li>ODBC connection ILS allows check via ISBN if library already owns title.</li>
							<li>Google Books API integration uses ISBN to pull author/title info for verification.</li>
							<li>Staff interface to view and update requests.</li>
							<li>Automated email messages specific to request status sent on status change to requesting users.</li>
							</ul>
						<p>Notes:</p>
							<p>We recently transitioned the Suggest a Purchase system to a module built into our vendor-provided online catalog. This does mean some loss of customization, but it creates a more unified experience and less maintenance work for me!</p>
				<p class="w3-padding-small w3-text-theme"><a href="http://digwebcode.wakegov.com/pr/prform.php"><img src="../web_images/wcpl_pr.png" alt="wcpl pr request logo" /></a></p>
					<p>Summary:</p>
							<p>I created the PR Request System to manage marketing requests for library events and programs from library managers.</p>
						<p>Code:</p>
							<ul>
							<li>HTML, CSS, and Javascript/jQuery</li>
							<li>PHP/MySQL </li>
							</ul>
						<p>Core Features:</p>
							<ul>
							<li>PR Request Form, which solicits the relevant information about the event, including times and locations, contact info, summaries, program type, etc.</li>
							<li>PR Calendar to display/access results on specified dates, custom-built with PHP and Javascript. (I don't plan to attempt that again anytime soon! It 95% works, but there were always some quirks.)</li>
							<li>I created a searchable table display of stored requests.</li>
							<li>Event detail pages for viewing editing particulars.</li>
							</ul>
						<p>Notes:</p>
							<p>As with the Suggest a Purchase System, my switch to management and administrative duties left me unable to keep the PR Request system properly updated and maintained, so we switched to using a system created in Microsoft Sharepoint by our County IS department. I migrated the PR Request System to a new server with a newer version of PHP, so while the historical instance still works, mostly, it has some issues. &#58;&#41;</p>
		
			<p class="" style="font-style: italic; font-weight: bold;">Part 2: Discontinued but no longer existing or no longer functioning:</p>
				<p class="w3-padding-small"><img src="../web_images/wcpl_tp.png" alt="wcpl teen poetry contest logo" /></p>
					<p>Summary:</p>
							<p>I created the Teen Poetry Contest site to manage poetry submissions for an annual library teen poetry contest.</p>
						<p>Code:</p>
							<ul>
							<li>HTML, CSS, and Javascript/jQuery</li>
							<li>PHP/MySQL </li>
							<li>Open source WYSIWYG editor plugin.</li>
							</ul>
						<p>Core Features:</p>
							<ul>
							<li>A poem submission form that integrated a WYSIWYG editor.</li>
							<li>A back end system for judges to organize, view, and rate submissions.</li>
							<li>Individual logins with specific permissions for contest admins, staff judges, and volunteer judges. Judges could only view the poems for the age category they were judging, and could only see their own ratings.</li>
							<li>Once the winners were selected, those poems could be marked for display on the library website.</li>
							</ul>
						<p>Notes:</p>
							<ul>
							<li>WCPL's Teen Poetry Contest was originally tracked on a gigantic spreadsheet. I think maybe there was a big binder involved?</li>
							<li>This one did a lot of cool stuff, even if I would be embarrassed for anyone to see the actual code. &#58;&#124;</li>
							<li>As you'll see above, an upcoming personal project is an attempt at what the Teen Poetry Contest could have been, a site I will be calling Verses/Versus. (It makes more sense in logo form.)</li>
							</ul>

				<p class="w3-padding-small"><img src="../web_images/wcpl_get.png" alt="wcpl getterizer logo" /></p>
					<p>Summary:</p>
							<p>I created the Getterizer to offer the librarians a way to easily create reading lists for display online.</p>
						<p>Code:</p>
							<ul>
							<li>HTML, CSS, and Javascript/jQuery</li>
							<li>PHP/MySQL </li>
							<li>Open source API to fetch book info via ISBN</li>
							</ul>
						<p>Core Features:</p>
							<ul>
							<li>A form that accepted entry of one or more ISBNs to generate and store a list of titles with cover, author, and summary info using an open source API.</li>
							<li>The list info was stored in a database so that the lists could be displayed by category (chosen in the submission process) on the library website.</li>
							<li>The lists started as fairly simple, web-appropriate affairs, but evolved to include a basic level of customizable styling for printing.</li>
							</ul>
						<p>Notes:</p>
							<ul>
							<li>This was one of the first interfaces I built in my work with Wake County Public Libraries.</li>
							<li>Prior to this, the lists were created in Publisher and converted to PDF's for manual upload to the website. This was labor-intensive and not user-friendly.</li>
							<li>The name "Getterizer" was part of a trend of silly naming in the Digital Library department, likely influenced by a certain mad scientist whose arch enemy is a secret agent platypus.</li>
							<li>I really enjoyed my work on the Getterizer, but once our online catalog evolved to allow the creation of integrated, custom lists, the Getterizer sadly became irrelevant, and faded into obscurity. Rest in Peace, Getterizer.</li>
							</ul>

	</div>
	
</body>
</html>
