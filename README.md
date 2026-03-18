# ReDesign-Home-Staging
Website for ReDesign Home Staging - CSEN 161 Web Development Final Project


# Book a Consultation page
The consultation form on `consult.html` posts to `form-utils/submit.php` which 
validates all required fields server-side. On success it redirects to the 
confirmation page. The PHP backend is structured to support automated email 
notifications on form submission, however this requires a live server with 
outbound SMTP access which is not available on our current server. When opened 
without a server the form falls back to a JS redirect to the confirmation page.

# About Page
The about page uses PHP to dynamically generate the team member cards from an
array, making it easy to add or remove members without changing the HTML. It
also features a JavaScript carousel that shows 3 members at a time and loops
infinitely. 
Requires a local server - refer to `Running Locally` instructions
- All about page links route to php/about.php. 
- if no server is running any route to about will open about.php as a raw text file
- Static version available at about.html.

# Running Locally
After installing PHP, start the server from the project root:
```bash
cd ReDesign-Home-Staging
php -S localhost:8080
```

Then open `http://localhost:8080/php/index.php`

