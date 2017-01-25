<?php 
$fc = $_GET['fc'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Damsons - Will App</title>

<link rel="stylesheet" href="dist/css/styles.css">
<link rel="shortcut icon" href="http://damsonsfutureplanning.co.uk/wp-content/uploads/2014/04/favicon.jpg" type="image/x-icon" />

<script src="https://use.typekit.net/ync1xsk.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="https://use.fontawesome.com/3cf330e970.js"></script>

<script
  src="http://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>
    
<header>

<div id="topbar">
    <div class="contain">
       
<div class="top logo"></div>
<div class="top contact">
	<span class="number"><i class="fa fa-fw fa-phone" aria-hidden="true"></i>  0800 088 4670</span>
	<span class="email"><a href="mailto:info@damsonsfutureplanning.co.uk">info@damsonsfutureplanning.co.uk</a></span>
</div>

    </div>
</div>


<div id="hero">
	<div class="contain">
		<div class="header-image">
			<img src="dist/images/wapp-01.png">
			</div>
			<div class="header-content">
			<h2>Welcome to our new and improved online Will app - we think you'll love it!</h2>

			<p>Making your Will should take around 5-10 minutes, though if you prefer to start now and finish up later we’ll create your account now.</p>

			<div id="sticky-note">
	<div class="sticky-note--content">
		<p>Refer a friend and get your expert Will review for free!</p>
		<p class="light">Normally £49.99</p>
		<p><a href=""><i class="fa fa-2x fa-facebook-square" aria-hidden="true"></i></a> <a href=""><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></p>
		<p><a href="" class="sticky-link-email">Send an email</a></p>
	</div>
</div>

			<p class="half">If you need any help call the number at the top of the screen, our <b>expert advisors are here Mon-Fri 9am-5pm</b>. But for now…</p>

			<h1>Let's get started</h1>
			</div>
	</div>
</div>


</header>

<main>
  <div class="contain">
    

<!-- step1.nunjucks -->

		<div class="side col-3">
		<img src="dist/images/wapp-side-01.png">
		</div>

		<div class="main col-6">
			<h3>There are two types of Will, which one's right for you?</h3>

			<form class="form form-1" method="post" action="phpScripts/startwill.php">
				
				<div id="checkboxes">
            <section class="box will-select">
							<h4>Single Will for an unmarried<br> person</h4>
                <div class="box-content">
									<img src="dist/images/wapp-icon-01.png">
									<p>A comprehensive Will, ideal for anyone who is not married or in a civil partnership, even if you have a current partner or children.</p>
                </div>
                <div class="select">
                  <input type="radio" name="c1" class="check-1 checkbox-custom" value="s_mirror" required id="s_mirror" />
                  <label for="s_mirror" class="checkbox-label">
                  <span>I want a Comprehensive Single Will</span>
                  </label>
                </div>
            </section>

            <section class="box will-select">
							<h4>Mirror Will for married couples or civil partners</h4>
                <div class="box-content">
									<img src="dist/images/wapp-icon-02.png">
									<p>Create two Mirror Wills, ideal for married couples or civil partners, who share identical wishes for their estate.</p>
                </div>
                <div class="select">
                  <input type="radio" name="c1" class="check-1 checkbox-custom" value="w_mirror" id="w_mirror" />
                  <label for="w_mirror" class="checkbox-label">
                  <span>I want a Mirror Will</span>
                  </label>
                </div>
            </section>

            <hr>

            <section class="box confirmation">
              <h4>Please confirm that you:</h4>
                <div class="box-content">
                  <ul>
                    <li>are of sound mind</li>
                    <li>are aged 18 years or over</li>
                    <li>understand that by completing and executing this Will you are revoking all previous wills</li>
                  </ul>
                </div>
                <div class="select">
                  <input type="checkbox" name="c2" class="check-2 checkbox-custom" value="Yes" required />
                  <label for="c2" class="checkbox-label">
                  <span>Yes I confirm</span>
                  </label>
                </div>
            </section>

            <section class="box confirmation">
              <h4>Please confirm you <span class="neg">do not</span>:</h4>
                <div class="box-content">
                  <ul>
                    <li>have assets outside of the UK that you wish to include in your Will</li>
                    <li>wish to leave specific instructions relating to the continuation of a business</li>
                  </ul>
                  <a href="" class="more-info">More details</a>
                </div>
                <div class="select">
                  <input type="checkbox" name="c3" class="check-3 checkbox-custom" value="Yes" required />
                  <label for="c3" class="checkbox-label">
                  <span>Yes I confirm</span>
                  </label>
                </div>
                <section class="box info overlay">
                  <div class="box-info">
                    <div class="box-info-content">
                      <img src="dist/images/wapp-icon-03.png">
                      <p>Non-UK assets are beyond the scope of our free Will App.</p>
                      <p>Please call on <strong>0800 088 4670</strong> to discuss options.</p>
                      <p><a href="" class="overlay-close" data-overlay-close>Close</a></p>
                    </div>
                  </div>
                </section>
            </section>
				</div>

      <h3>Great! Now create an account, so you can log in again.</h3>

        <div id="login">
          <div class="login-hz">
            
            <span class="input">
            <label class="input__label input__label-register" for="register-1">
                <span class="input__label-content input__label-content-register">Email</span>
            </label>
            <span class="input__span">
              <input type="email" id="register-1" class="input__ignore input__field input__field-register" placeholder="Your email address" name="email" required>
              <input type="hidden" id="emailnotvalidated" value="1">
            </span>
            </span>
            
            <span class="input">
            <label class="input__label input__label-register" for="register-2">
                <span class="input__label-content input__label-content-register">Create Password <small>(Include 1 capital letter and 1 number)</small></span>
            </label>
            <span class="input__span">
              <input type="password" id="register-2" class="input__field input__field-register" name="password" placeholder="Choose a password, keep it safe" required>
            </span>
            </span>

          </div>
        </div>

        <div id="make-will">
          <input type="submit" value="Make My Will" />
        </div>

      </form>

		</div>


  </div>
</main>


<footer>
    <div class="contain">

    <div class="footer-content">
		<div class="f-bottom">
			<p>&copy; <script>document.write(new Date().getFullYear())</script> Damsons Future Planning Limited | <a href="http://damsonsfutureplanning.co.uk/DFP_Privacy_2016.pdf" target="_blank">Privacy Policy</a> | <a href="http://damsonsfutureplanning.co.uk/DFP_Complaint_Handling_Procedure.pdf" target="_blank">Feedback</a> | <a href="http://damsonsfutureplanning.co.uk/DFP_Cookie_Policy.pdf" target="_blank">Cookies</a> | <a href="http://damsonsfutureplanning.co.uk/contact/" target="_blank">Contact Us</a></p>
			<p><small>Damsons Future Planning Limited is registered in England and Wales with company registration number 07403561.<br>Its registered office is at Adamson House, Pomona Strand, Old Trafford M16 0TT ICO Reg. No. Z3173156 VAT Reg. No. 156668569</small></p>
		</div>
		<div class="footer-right">
			<img src="http://damsonsfutureplanning.co.uk/plan-your-funeral/template/img/d-logo_white.png">
			<div class="footer-bottom contact">
				<span class="number"><i class="fa fa-fw fa-phone" aria-hidden="true"></i>  0800 088 4670</span>
				<span class="email"><a href="mailto:info@damsonsfutureplanning.co.uk">info@damsonsfutureplanning.co.uk</a></span>
			</div>
		</div>
	</div>

	</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
<script src="dist/js/classie.js"></script>
<script src="dist/js/main.js"></script>


</body>
</html>