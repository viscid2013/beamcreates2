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
		<p class="w3-padding-small w3-border-bottom w3-text-theme" style="font-weight: bold;">Web Work with the Public Libraries</p>
			<p style="font-style: italic;">Part 1: Discontinued but still viewable/partly functional interfaces:</p>
				<p><a href="http://digwebcode.wakegov.com/src/SAP/suggest_form_hx.php?showSecretForm=yes">&#124;Suggest a Purchase System&#124;</a></p>
				<p>I built the Suggest a Purchase System to manage purchase recommendations from library patrons.</p>
				<p>The front end includes an entry form for the suggestions that uses the Google Books API to pull author and title information using the ISBN as well as an ODBC connection to the Intergrated Library System database to check whether or not the item is already owned by the libraries.</p>
				<p>On the staff side, the stored requests are displayed in a table for viewing and editing. When the status of an item is changed to indicate whether or not it will be purchased, a relevant email message is automatically sent to the requesting patrons.</p>
				<p>NOTE: We recently transitioned the Suggest a Purchase system to a module built into our vendor-provided online catalog. This does mean some loss of customization, but it creates a more unified experience and less maintenance work for me!</p>
				<p><a href="http://digwebcode.wakegov.com/pr/prform.php">&#124;PR Request System&#124;</a></p>
				<p>I created the PR Request System to manage marketing requests for library events and programs from library managers.</p>
				<p>On the front end is the PR Request Form, which solicits the relevant information about the event or program, including times and locations (with the ability to add additional time/location fields as needed), contact info, summaries, program type, etc.</p>
				<p>For the back end, to display the requests, I created a PR Calendar that I custom-built with PHP and Javascript. (I don't plan to attempt again anytime soon! It 95% works, but there were always some quirks.) Additionally, I created a searchable table to display the requests. Both interfaces allowed a means to click into the details of a request to view and edit as needed.</p>
				<p>NOTE: As with the Suggest a Purchase System, my switch to management and administrative duties left me unable to keep the PR Request system properly updated and maintained, so we switched to using a system created in Microsoft Sharepoint by our County IS department. I migrated the PR Request System to a new server with a newer version of PHP, so while the historical instance still works, mostly, it has some issues. &#58;&#41;</p>
			<p style="font-style: italic;">Part 2: Discontinued but no longer existing or no longer functioning:</p>
				<p>&#91;Teen Poetry Contest System&#93;</p>
					<p>The Teen Poetry Contest was being tracked on a gigantic spreadsheet, and I think maybe there was a big binder involved? In any case, it was time to go online with the contest, so I created a form that integrated an existing WYSIWYG editor module, and a system for the judges to view and rate the poems behind the scenes. Once the winners were selected, those poems could be marked for display on the library website. This one did a lot of cool stuff, even if I would be embarrassed for anyone to see the actual code. It would be like someone looking in the closets of my apartment. It's not pretty.</p>
				<p>&#91;The Getterizer&#93;</p>
					<p>This was one of the first interfaces I built in my work with Wake County Public Libraries. We wanted to offer the librarians a way to quickly and easily create lists of recommended reading for display online. Prior to this, the lists were created in Publisher, printed for use in the libraries, and converted to PDF's for manual upload and display on the website by Digital Library staff. This was unattractive and labor-intensive (there were a lot of lists, ever-changing and ever-updating!), thus the need for an easy, electronic method that could be used by the librarians.</p>
					<p>The Getterizer allowed the library staff to paste one or more ISBN numbers into a form field to automatically generate a list of titles, with cover, author, and summaries pulled using an API. The list info was stored in a database so that the lists could be displayed by category on the library website.</p>
					<p>The lists started as fairly simple, web-appropriate affairs, but evolved to include some level of customizable styling and printability. I really enjoyed my work on the Getterizer (and was very proud of the name, of course), but once our online catalog evolved to be able to allow the creation of custom lists integrated into the catalog itself, the Getterizer sadly became irrelevant, and faded into obscurity. Rest in Peace, Getterizer.</p>
		
		<p class="w3-padding-small w3-border-bottom w3-text-theme" style="font-weight: bold;">Personal Projects</p>
		<p>[Logo/link and summary for ViscidCreates and logo/summary for upcoming Verses Project]</p>
	</div>
	
</body>
</html>
