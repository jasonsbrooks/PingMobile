<!DOCTYPE html>
<html>
   <head>
      <script type="text/javascript" src="js/lib/jquery.1.8.3.js"></script>
      <script type="text/javascript" src="https://js.stripe.com/v1/"></script>
      <script type="text/javascript" src="js/buy-controller.js"></script>
      <script>
      	Stripe.setPublishableKey('pk_test_L4ksftqlg6Ehqy1sUJlCE5it');
      </script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
   <body>
      <h2>Buy Currency!</h2>
      <form id="buy-form" method="post" action="javascript:">
      	 <p class="label">Contact Information</p>
      	 <p>A confirmation of your purchase will be sent to the information provided below.  You will need this information if there is a problem with your code.  We will never sell your email address!</p>

		<ul class="form-ul">
			<li class="flabel">First name</li>
			<li><input class="text" id="first-name" spellcheck="false"></li>
		</ul>

		<ul class="form-ul last">
			<li class="flabel">Last name</li>
			<li><input class="text" id="last-name" spellcheck="false"></li>
		</ul>

		<ul class="form-ul last">
			<li class="flabel">Email address</li>
			<li><input class="text" id="email" spellcheck="false"></li>
		</ul>

         
        <p class="label">Payment Information</p>

        <ul class="form-ul">
			<li class="flabel">Number of Credits</li>
			<li id="price-li">
				<input class="radio" type="radio" name="price" value="25" checked="checked"> $1 for 10 coins
				<input class="radio" type="radio" name="price" value="28"> $5 for 50 coins
			</li>
		</ul>

         
		<ul class="form-ul">
			<li class="flabel">Credit Card Number</li>
			<li><input class="text" id="card-number" autocomplete="off"></input></li>
		</ul>


		<ul class="form-ul last" id="expiration-select">
			<li class="flabel">Expiration date</li>
			<li><select id="expiration-month">
			    <option value="1">January</option>
			    <option value="2">February</option>
			    <option value="3">March</option>
			    <option value="4">April</option>
			    <option value="5">May</option>
			    <option value="6">June</option>
			    <option value="7">July</option>
			    <option value="8">August</option>
			    <option value="9">September</option>
			    <option value="10">October</option>
			    <option value="11">November</option>
			    <option value="12">December</option>
				</select>
			
				<select id="expiration-year">								
		         	<option value="2013" selected="selected">2013</option>
		         	<option value="2014">2014</option>
		         	<option value="2015">2015</option>
		         	<option value="2016">2016</option>
		         	<option value="2017">2017</option>
		         	<option value="2018">2018</option>
		         	<option value="2019">2019</option>
		         	<option value="2020">2020</option>
         </select>
			</li>
		</ul>

		<ul class="form-ul last">
					<li class="flabel">CVC</li>
					<li><input class="text" id="card-security-code" autocomplete="off"></input>
						</li>
				</ul>		
        
        
         <ul class="form-ul" id="buy-form-submit-container">
					<li id="submit-button-li"><input class="vdkbutton green" id="buy-submit-button" type="submit" value="Place This Order"></li>
				</ul>
      </form>
   </body>
</html>