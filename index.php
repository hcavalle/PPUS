<?php require_once("includes/functions.php")?>
<?php include("includes/header.php")?>                        
          	<!-- Start Main body -->
            <article>
            	<section >
            		<h2> find new soccer pickup games in your zip.</h2> <h2> share games you know about.</h2> <h2 id="bodytext"> playpickup.  </h2>
            	</section>
            	<section>
                
            		<hr/>
            		<nav class="center color-block">
						<ul class="bottom">
							<li class="unhide"><a href="#">find games</a></li>
							<li class="unhide"> <a href="#">share games</a></li>
							<li class="unhide"><a href="#">sign up</a></li>
						</ul>
					</nav>	
       	  		</section>
			</article>
            
            <!--Start asides for forms -->
            <div id="signup_div">
            <aside id="signup_aside">  
            	<h2 id="signup-title">sign up!</h2>
             	<section>
            		<h3> sign up and we'll let you know when the site is live. No spam, no giving out your email.</h3>
            	</section>
              	<div id="signup-form" class="form clearfix">  
              		<ul id="errors" class="">  
                  		<li id="info">There were some problems with your form submission:</li>  
              		</ul>  
              		<p id="success">Thanks for your message! We will get back to you ASAP!</p>  	
              		<form method="post" action="">  <!--<?php echo $_SERVER['PHP_SELF']?> -->
                  		<label for="name">name </label>  
                  		<input type="text" id="name" name="name" value="" placeholder="Zinedine Zidane" required autofocus />  
                   		<label for="email">email </label>  
                  		<input type="text" id="Email" name="zip" value="" placeholder="joga@playpickupsoccer.com" required autofocus />
                  		<span id="loading"></span>  
                  		<input type="submit" value="Sign up" id="signup_submit_button" />  
              		</form>                
          		</div>
            </aside>
            </div>
            
            <div id="find_div">
            <aside id="find_games_aside">
            	<h2> find a game </h2>
            	<div class="form clearfix">  
              		<ul id="errors" class="">  
                  		<li id="info">There were some problems with your form submission:</li>  
              		</ul>  
              		<p id="success">Thanks for your message! We will get back to you ASAP!</p>  
              		<form id="find_games_form" method="post" action="php/share-game.php ">  
                  		<label for="zip">zip </label>  
                  		<input type="text" id="zip" name="zip" value="" placeholder="90210" required autofocus />  <!--required-->
                  		<span id="loading"></span>  
                  		<input type="submit" value="find games" id="find_submit_button" />  
              		</form>                
          		</div>  
            	<!--<div data-hover="images/games_rollover.gif">
           			<img id="games_rollover" class="" src="images/games.gif" data-hover="images/games_rollover.gif"/> 
				</div> -->
           	</aside>
            </div>
            
            <div id="share_div">
            <aside id="share_games_aside">
            	<!--<div data-hover="images/games_rollover.gif">
           			<img id="games_rollover" class="" src="images/games.gif" data-hover="images/games_rollover.gif"/> 
				</div> -->
            	<h2> share a game </h2>
            	<div class="form clearfix">
                	<ul id="errors" class="">  
            	      <li id="info">There were some problems with your form submission:</li>  
              		</ul>  
              		<p id="success">Thanks for your message! We will get back to you ASAP!</p>  
             	 	<form id="share_games_form" method="post" action="php/share-game.php">  
           	    		<label for="share_address">game address </label>  
           	       		<input type="text" id="share_address" name="share_address" value="" placeholder="5555 Futbol St. Apt. 10" required autofocus />  
                    
                    	<label for="share_city">city</label>  
           	       		<input type="text" id="share_city" name="share_address" value="" placeholder="San Francisco" required autofocus/>
                    
                    	<label for="share_state">state </label>  
           	      		<select id="share_state" name="state" requred autofocus>
                            <option value="AL">AL</option>
                            <option value="AK">AK</option>
                            <option value="AZ">AZ</option>
                            <option value="AR">AR</option>
                            <option value="CA">CA</option>
                            <option value="CO">CO</option>
                            <option value="CT">CT</option>
                            <option value="DE">DE</option>
                            <option value="DC">DC</option>
                            <option value="FL">FL</option>
                            <option value="GA">GA</option>
                            <option value="HI">HI</option>
                            <option value="ID">ID</option>
                            <option value="IL">IL</option>
                            <option value="IN">IN</option>
                            <option value="IA">IA</option>
                            <option value="KS">KS</option>
                            <option value="KY">KY</option>
                            <option value="LA">LA</option>
                            <option value="ME">ME</option>
                            <option value="MD">MD</option>
                            <option value="MA">MA</option>
                            <option value="MI">MI</option>
                            <option value="MN">MN</option>
                            <option value="MS">MS</option>
                            <option value="MO">MO</option>
                            <option value="MT">MT</option>
                            <option value="NE">NE</option>
                            <option value="NV">NV</option>
                            <option value="NH">NH</option>
                            <option value="NJ">NJ</option>
                            <option value="NM">NM</option>
                            <option value="NY">NY</option>
                            <option value="NC">NC</option>
                            <option value="ND">ND</option>
                            <option value="OH">OH</option>
                            <option value="OK">OK</option>
                            <option value="OR">OR</option>
                            <option value="PA">PA</option>
                            <option value="RI">RI</option>
                            <option value="SC">SC</option>
                            <option value="SD">SD</option>
                            <option value="TN">TN</option>
                            <option value="TX">TX</option>
                            <option value="UT">UT</option>
                            <option value="VT">VT</option>
                            <option value="VA">VA</option>
                            <option value="WA">WA</option>
                            <option value="WV">WV</option>
                            <option value="WI">WI</option>
                            <option value="WY">WY</option>
                    	</select> 
                    	<label for="share_zip">zip </label>  
           	       		<input type="text" id="share_zip" name="share_zip" value="" placeholder="55555" required autofocus /> 
                  		<span id="loading"></span>  
                  		<input type="submit" value="Share Game" id="share_submit_button" />  
              		</form>                
          		</div>
            </aside> 
            </div><!-- end form asides -->
            
<?php include("includes/footer.php");?>