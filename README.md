**PHP Browser Validation - What is it?**
------
This browser validation script is based on the logic of the CloudFlare browser check solution for DDoS attacks. It runs a JavaScript mathematical calculation which is then posted back to the page for PHP to validate, if the calculation is correct and has passed the browser validation checks then PHP will set a cookie which allows that user to access that website for 48-hours before having to re-validate.

This script is designed to stop basic DDoS-Flood attacks which use GET requests against a website, because these requests obviously do not have JavaScript-enabled and will not pass the browser validation checks they will be denied access to the website - legitimate users with JavaScript-enabled will be allowed access to the website.

For this to work properly, it should be used in the correct environment, this will not stop DDoS attacks if the proper protection is not in place. This script should be deployed either on a reverse proxy server with DDoS protection (such as X4B.net) and/or across a web-server cluster. This script will work on any PHP-enabled web server, however in order to get the best use out of it, the server it's running on should have DDoS protection and a good amount of resources (RAM, CPU, etc) behind it to support the traffic flow.

**Installation**
------
To install, simply move the provided files to your web server, and use PHP include (example provided in index.php) the ddos_check.php script in your PHP web pages that you want to include this browser validation script. Also, don't forget to change the HTTP_HOST variable in 'ddos_check.php' to match yours.

I'd strongly recommend moving the CSS and JavaScript files to a CDN and/or including the full file-path of those files so there's no issues with includes for the PHP script, also to reduce stress on the web server which is the intention of this script.

**Licensing**
------
This code is provided under the MIT License, for more information visit the LICENSE file in this repository.

**Contact & Links**
------
If you need help installing the code or have any questions/problems just let me know via email, and to see a live running version of the code head over to my website to try it out.
<ul><li><b>Contact Email</b> - <a href="mailto:joe_currie@icloud.com">joe_currie@icloud.com</a></li></ul>

**Upcoming changes**
------
<ul>
	<li>Include Browser Validation Checks in PHP</li>
	<li>Generate User Hash Key & Store in MySQL</li>
	<li>Strip submitted fields before checking</li>
</ul>
