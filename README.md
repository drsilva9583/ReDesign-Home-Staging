# ReDesign-Home-Staging
Website for ReDesign Home Staging - CSEN 161 Web Development Final Project


# Book a Consultation page
The consultation form on `consult.html` posts to `form-utils/submit.php` which 
validates all required fields server-side. On success it redirects to the 
confirmation page. The PHP backend is structured to support automated email 
notifications on form submission, however this requires a live server with 
outbound SMTP access which is not available on our current server. When opened 
without a server the form falls back to a JS redirect to the confirmation page.

# Running Locally
After installing PHP, start the server from the project root:
```bash
cd ReDesign-Home-Staging
php -S localhost:8080
```

Then open `http://localhost:8080`

