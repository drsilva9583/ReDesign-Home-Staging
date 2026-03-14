# ReDesign-Home-Staging
Website for ReDesign Home Staging - CSEN 161 Web Development Final Project


# Book a Consultation page
- The consultation form on `consult.html` posts to `form-utils/submit.php`.
- You need a local server running to use the form. 
- Without a server, navigating to the form and submitting will just show the raw PHP file as text.

> Note: In submit.php `mail()` only sends real emails on a live server. When testing locally the redirect will still work but no email will actually be sent.
 
# Running Locally
After installing PHP, start the server from project root:

cd ReDesign-Home-Staging
php -S localhost:8080

Then open `http://localhost:8080`

