 <?php if(!$fb_data['me']): 
		//YOU'VE TO OUTPUT THIS loginUrl. OTHERWISE YOU CAN'T LOGIN! Did you think where you want to send the user after login?
		//Yes? So change the $config['fbPostLoginRedirect'] at config/facebook.php
		?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>#FB</title>
		<meta name="description" content="#FB" />
		<meta name="keywords" content="#FB" />
		
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo(CSS.'demo.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo(CSS.'component.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'bootplus.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo(CSS.'bootplus-responsive.css'); ?>" />
        
		<script src="<?php echo(JS.'modernizr.custom.js'); ?>"></script>
        <script src="<?php echo(JS.'pace.min.js'); ?>"></script>
        <style type="text/css">
		input
{
height:1.8em;
width:200px;
color:rgb(12,177,235);
font-size:17px;
text-align:center;
}
</style>

	</head>
	<body>
    <div id="deve" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>About The Developer</h3>
  </div>
  <div class="modal-body" >
    <h1 style="color:#000;">K.Prashanth Reddy <br/>
                        CEO At PR Apps<br/>
                       
                        <a href="http://www.google.com/+PrashanthReddy" style="" target="_blank">www.google.com/+PrashanthReddy</a><br/>
                        <a href="http://www.google.com/+PrashanthReddy" style="" target="_blank">www.facebook.com/pr.amrita</a><br/>
                        
                        
                      </h1>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
  
  </div>
</div>
		<div class="container">
			<header style="background-color:#2f434f;width:100%;"  class="clearfix">
				<span>PR Apps & TxtBrowser Presents </span>
				<h1>#FB on SMS</h1>
				<nav  >
					 <a   style="color:#FFF;" data-toggle="modal" href="#deve" >AboutUS |</a>
					<a style="color:#FFF;" target="_blank" style="color:#FFF;"  href="http://facebook.com/pr.amrita" >Facebook |</a>
                    	<a style="color:#FFF;" target="_blank"  href="http://google.com/+prashanthreddy" >Google+ |</a>
                        	<a style="color:#FFF;" target="_blank" href="http://twitter.com/pr_amrita" >Twitter |</a>
				</nav>
			</header>	
			<div id="cbp-so-scroller" class="cbp-so-scroller">
           
								<section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h3>"#FB(&#946;)"</h3>
						<p>Access Facebook through SMS,Post your Status,Check Your Notifications,Messages,Friend Requests,Upcoming Freind Birthdays, & Online Facebook Friends,and more & more.. </b>
                        .</p>
                       
                        <img style="margin-top:-30px;" src="<?php echo(IMG.'down.png'); ?>" alt="img01" width="80" height="80">
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img style="margin-top:-30px;" class="img-circle" src="<?php echo(IMG.'email.png'); ?>" alt="img01">
					</figure>
				</section>
                  <section class="cbp-so-section">
					<article class="cbp-so-side cbp-so-side-left">
						<h3>Post your Status Update(&#946;)</h3>
						<p>Interactive Posts:Your Status Message is Converted into a Autuawsome Image on Your Wall<br/> </p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?php echo(IMG.'m1.png'); ?>" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="<?php echo(IMG.'maini.png'); ?>" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h1>Check Your Notifications</h1>
						<p>Check your Facebook Notifications<br/></p>
					</article>
				</section>
				<section class="cbp-so-section" id="People">
					<article class="cbp-so-side cbp-so-side-left">
						<h1>Check Your Messages</h1>
						<p>Check Your Messages in Oneclick</p>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?php echo(IMG.'mp.png'); ?>" alt="img01">
					</figure>
				</section>
				<section class="cbp-so-section">
					<figure class="cbp-so-side cbp-so-side-left">
						<img src="<?php echo(IMG.'mt.png'); ?>" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h1>See Your Friends Online Status</h1>
						<p>Check who is online <br/>
					</article>
				</section>
				<section class="cbp-so-section" id="People">
					<article class="cbp-so-side cbp-so-side-left">
						<h1>Check Your Friend Requests</h1>
						<p></p> <div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Info!</h4>
 All your data is encrypted with 128bit encryption in our Servers
</div>
					</article>
					<figure class="cbp-so-side cbp-so-side-right">
						<img src="<?php echo(IMG.'mail.png'); ?>" alt="img01">
					</figure>
				</section>
                <section class="cbp-so-section" style="width:100%;">
					<article class="cbp-so-side cbp-so-side-left" style="width:100%;text-align:center;">
						<h2>#FB everything at oneplace</h2>
                        </article>
                        
<div class="container-fluid">
  <div class="row-fluid" >
   <div class="span4"   >
<div class="card" style="margin-top:55px;" >
   <span>
<h1 class="card-heading simple" style="color:#000;">All Your Facebook at One SMS<hr>Send #FB to get your Notifications,Messages,Upcoming Birthdays ,Friend Requests at One Place<hr> </h1></span>
    </div>
    </div>
    <div class="span4" >
    <img src="<?php echo(IMG.'fbm.png'); ?>"  alt="img01">
    </div>
    <div class="span4">
    <div class="alert alert-success" style="margin-top:55px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 
 <h3>All your data is encrypted with 128bit encryption in our Servers</h3>
</div>
    <div class="alert alert-error" style="margin-top:55px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  
<h3> No Need to Share your Password With Us</h3>
</div>
    <div class="alert alert-block" style="margin-top:55px;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>

<h3>Application Designed By <a data-toggle="modal" href="#deve">PR APPS</a> in association with TxtBrowser-55444 </h3>
</div>
</div>
    
  </div>
</div>
				    
					
                    
				</section>
                <section class="cbp-so-section" style="width:100%;">
					<article class="cbp-so-side cbp-so-side-left" style="width:100%;text-align:center;">
						<h2>Coming Soon Features..</h2>
                        </article>
                        
<div class="container-fluid">
  <div class="row-fluid" >
   <div class="span2"   >
   <div class="card" style="margin-top:-10px;"  >
   <span>
<h1 class="card-heading simple" style="color:#000;">Get Personalized Birthday Reminders To Your Mobile<hr>Wish your Friends directly through SMS<hr> Your Message is Posted as Beutiful Greeting card Image on Your Friends Wall</h1></span>
    </div></div>
    
    <div class="span4" >
    <img src="<?php echo(IMG.'bd.png'); ?>"  alt="img01">
    </div>
    <div class="span2">
 <div class="card" style="margin-top:55px;" >
   <span>
<h1 class="card-heading simple" style="color:#000;">Bringing Facebook Chat On SMS<hr>Chat With your Facebook Friends through SMS<hr> </h1></span>
    </div></div>
    
    <div class="span4"  >
     <img src="<?php echo(IMG.'chat.png'); ?>" alt="img01">
    </div>
     
  </div>
</div>
				    
		<div id="privacy" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Privacy Policy</h3>
  </div>
  <div class="modal-body">
  This Privacy Policy governs the manner in which PR APPS collects, uses, maintains and discloses information collected from users (each, a "User") of the www.facebookonsms.com website ("Site") or www.fb-prapps.rhcloud.com website ("Site"). This privacy policy applies to the Site and all products and services offered by PR APPS.

FB is trademark of Facebook

At Pr apps we care for your security .., but incase if any hacking or anything happen to website we are not responcible for your information.. 

Personal identification information

We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, subscribe to the newsletter, fill out a form, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address, mailing address, phone number. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.

Non-personal identification information

We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.

Web browser cookies

Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.

How we use collected information

PR APPS may collect and use Users personal information for the following purposes:
- To improve customer service
Information you provide helps us respond to your customer service requests and support needs more efficiently.
- To personalize user experience
We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.
- To send periodic emails
We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, they may do so by contacting us via our Site.
How we protect your information

We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.

Sharing your personal information

We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.

Third party websites

Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.

Advertising

Ads appearing on our site may be delivered to Users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile non personal identification information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This privacy policy does not cover the use of cookies by any advertisers.

Google Adsense

Some of the ads may be served by Google. Google's use of the DART cookie enables it to serve ads to Users based on their visit to our Site and other sites on the Internet. DART uses "non personally identifiable information" and does NOT track personal information about you, such as your name, email address, physical address, etc. You may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at http://www.google.com/privacy_ads.html

Changes to this privacy policy

PR APPS has the discretion to update this privacy policy at any time. When we do, we will send you an email. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.

Your acceptance of these terms

By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.

Contacting us

If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:
PR APPS
www.facebookonsms.com
PR Apps

This document was last updated on December 19, 2013


    <p></p>
  </div>
  <div class="modal-footer">
  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Close</button>
   
  </div>
</div>
<div id="privacy1" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3>T&C </h3>
  </div>
<div class="modal-body">
    <h1>Facebook On SMS Terms and Conditions ("Agreement")</h1>
<p>This Agreement was last modified on December 20, 2013.</p>

<p>Please read these Terms and Conditions ("Agreement", "Terms and Conditions") carefully before using www.facebookonsms.com ("the Site") operated by PR APPS ("us", "we", or "our"). This Agreement sets forth the legally binding terms and conditions for your use of the Site at www.facebookonsms.com.or linked sites</p>
<p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms and Conditions. Capitalized terms are defined in this Agreement.</p>

<p><strong>Intellectual Property</strong><br />The Site and its original content, features and functionality are owned by PR APPS and are protected </p>

<p><strong>Termination</strong><br />We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>

<p><strong>Links To Other Sites</strong><br />Our Site may contain links to third-party sites that are not owned or controlled by PR APPS.</p>
<p>PR APPS has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>

<p><strong>Governing Law</strong><br />This Agreement (and any further rules, polices, or guidelines incorporated by reference) shall be governed and construed in accordance with the laws , without giving effect to any principles of conflicts of law.</p>

<p><strong>Changes To This Agreement</strong><br />We reserve the right, at our sole discretion, to modify or replace these Terms and Conditions by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms and Conditions.</p>
<p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 
  </div>
</div>

                    
				</section>
                   <section class="cbp-so-section" style="width:100%;">
					<article class="cbp-so-side cbp-so-side-left" style="width:100%;text-align:center;">
						
                        <p>This Service Currently Available on Airtel .., Login with Facebook account to Continue</p>
				  
			<a href="<?=$fb_data['loginUrl']?>"><button class="btn btn-large btn-success" type="button"><i class="icon-facebook"></i>Login With Facebook</button></a>
		
        <br/><br/>
        
					<div class="alert alert-block">
 
  <h4>Info!</h4>
By Proceeding  Your'e agreeing Our T&C and Privacy Policy
</div>
<a href="#deve" data-toggle="modal" ><span class="label label-warning" style="">About the Developer</span></a>&nbsp;&nbsp;<a data-toggle="modal" href="#privacy1" ><span class="label label-warning" style="">Terms & Conditions </span></a>&nbsp;&nbsp;<a data-toggle="modal" href="#privacy" ><span class="label label-warning" style="">Privacy Policy </span></a>
				</section>
				<section  class="cbp-so-section">
					<figure id="deve" class="cbp-so-side cbp-so-side-left">
						<img src="<?php echo(IMG.'dev.png'); ?>" alt="img01">
					</figure>
					<article class="cbp-so-side cbp-so-side-right">
						<h2>Developed By:</h2>
						<p>K.Prashanth Reddy <br/>
                        CEO At PR Apps<br/>
                        
                        <a href="http://www.google.com/+PrashanthReddy" style="color:#FFF" target="_blank">www.google.com/+PrashanthReddy</a><br/>
                        <a href="http://www.google.com/+PrashanthReddy" style="color:#FFF" target="_blank">www.facebook.com/pr.amrita</a><br/>
                        
                        
                      </p>
					</article>
				</section>
                
		  </div>
		</div>
        
		<script src="<?php echo(JS.'classie.js'); ?>"></script>
		<script src="<?php echo(JS.'cbpScroller.js'); ?>"></script>
		<script>
			new cbpScroller( document.getElementById( 'cbp-so-scroller' ) );
		</script>
        
        <script src="<?php echo(JS.'jquery.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-transition.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-alert.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-modal.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-dropdown.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-scrollspy.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-tab.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-tooltip.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-popover.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-button.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-collapse.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-carousel.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-typeahead.js'); ?>"></script>
        <script src="<?php echo(JS.'bootstrap-affix.js'); ?>"></script>
        <script src="<?php echo(JS.'application.js'); ?>"></script>
             <script src="<?php echo(JS.'google-code-prettify/prettify.js'); ?>"></script>
        
        
    
    
	</body>
</html>
<?php endif;?>
