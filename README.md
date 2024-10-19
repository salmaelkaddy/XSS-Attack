Cross-site scripting (XSS) is an exploit where the attacker attaches code onto a legitimate website that will execute when the victim loads the website. That malicious code can be inserted in several ways. There’re 3 main types of XSS
1. Reflected XSS Attack.
2. Stored XSS Attack.
3. DOM-Based XSS Attack.

1. Reflected XSS Attack
Additive Advantage: Most seen attack in XSS.

Structure: Malicious code is added onto the end of the URL of a website (Often this will be a legitimate, trusted website).
 
Scenario for the attack: When the victim loads this link in their web browser, the browser will execute the code injected into the URL. The attacker usually uses some form of social engineering to trick the victim into clicking on the link.

2. Stored XSS Attack.
Uniqueness: Most damaging attack in XSS.

Structure: An attacker uses Stored XSS to inject malicious content (referred to as the payload), most often JavaScript code, into the target application. If there is no input validation, this malicious code is permanently stored (persisted) by the target application.
 
Scenario for the attack: This happens on sites that let users post content that other users will see, such as a comments forum or social media site, for example. If the site doesn’t properly validate the inputs for user-generated content, an attacker can insert code that other users’ browsers will execute when the page loads. 

