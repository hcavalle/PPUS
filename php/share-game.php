<?php
if( isset($_POST) ){

    //form validation vars
    $formok = true;
    $errors = array();

    //sumbission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');

	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'name' => $name,
			'email' => $email,
			'telephone' => $telephone,
			'enquiry' => $enquiry,
			'message' => $message
		),
		'form_ok' => $formok,
		'errors' => $errors
	);
	
	//if this is not an ajax request  
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
	  
		//set session variables  
		session_start();  
		$_SESSION['cf_returndata'] = $returndata;  
	  
		//redirect back to form  
		header('location: ' . $_SERVER['HTTP_REFERER']);  
	}
	
}

?>



/* <?php>
<select name="state">	 <option value=""></option>	 <option ":""?="" <?="($state=='AL')?"selected=\"selected\"">value="AL">Alabama</option>	 <option ":""?="" <?="($state=='AK')?"selected=\"selected\"">value="AK">Alaska</option>	 <option ":""?="" <?="($state=='AZ')?"selected=\"selected\"">value="AZ">Arizona</option>	 <option ":""?="" <?="($state=='AR')?"selected=\"selected\"">value="AR">Arkansas</option>	 <option ":""?="" <?="($state=='CA')?"selected=\"selected\"">value="CA">California</option>	 <option ":""?="" <?="($state=='CO')?"selected=\"selected\"">value="CO">Colorado</option>	 <option ":""?="" <?="($state=='CT')?"selected=\"selected\"">value="CT">Connecticut</option>	 <option ":""?="" <?="($state=='DE')?"selected=\"selected\"">value="DE">Delaware</option>	 <option ":""?="" <?="($state=='DC')?"selected=\"selected\"">value="DC">District of Columbia</option>	 <option ":""?="" <?="($state=='FL')?"selected=\"selected\"">value="FL">Florida</option>	 <option ":""?="" <?="($state=='GA')?"selected=\"selected\"">value="GA">Georgia</option>	 <option ":""?="" <?="($state=='HI')?"selected=\"selected\"">value="HI">Hawaii</option>	 <option ":""?="" <?="($state=='ID')?"selected=\"selected\"">value="ID">Idaho</option> <option ":""?="" <?="($state=='IL')?"selected=\"selected\"">value="IL">Illinois</option>	 <option ":""?="" <?="($state=='IN')?"selected=\"selected\"">value="IN">Indiana</option>	 <option ":""?="" <?="($state=='IA')?"selected=\"selected\"">value="IA">Iowa</option> <option ":""?="" <?="($state=='KS')?"selected=\"selected\"">value="KS">Kansas</option>	 <option ":""?="" <?="($state=='KY')?"selected=\"selected\"">value="KY">Kentucky</option>	 <option ":""?="" <?="($state=='LA')?"selected=\"selected\"">value="LA">Louisiana</option>	 <option ":""?="" <?="($state=='ME')?"selected=\"selected\"">value="ME">Maine</option>	 <option ":""?="" <?="($state=='MD')?"selected=\"selected\"">value="MD">Maryland</option>	 <option ":""?="" <?="($state=='MA')?"selected=\"selected\"">value="MA">Massachusetts</option>	 <option ":""?="" <?="($state=='MI')?"selected=\"selected\"">value="MI">Michigan</option>	 <option ":""?="" <?="($state=='MN')?"selected=\"selected\"">value="MN">Minnesota</option>	 <option ":""?="" <?="($state=='MS')?"selected=\"selected\"">value="MS">Mississippi</option>	 <option ":""?="" <?="($state=='MO')?"selected=\"selected\"">value="MO">Missouri</option>	 <option ":""?="" <?="($state=='MT')?"selected=\"selected\"">value="MT">Montana</option>	 <option ":""?="" <?="($state=='NE')?"selected=\"selected\"">value="NE">Nebraska</option>	 <option ":""?="" <?="($state=='NV')?"selected=\"selected\"">value="NV">Nevada</option>	 <option ":""?="" <?="($state=='NH')?"selected=\"selected\"">value="NH">New Hampshire</option>	 <option ":""?="" <?="($state=='NJ')?"selected=\"selected\"">value="NJ">New Jersey</option>	 <option ":""?="" <?="($state=='NM')?"selected=\"selected\"">value="NM">New Mexico</option>	 <option ":""?="" <?="($state=='NY')?"selected=\"selected\"">value="NY">New York</option>	 <option ":""?="" <?="($state=='NC')?"selected=\"selected\"">value="NC">North Carolina</option>	 <option ":""?="" <?="($state=='ND')?"selected=\"selected\"">value="ND">North Dakota</option>	 <option ":""?="" <?="($state=='OH')?"selected=\"selected\"">value="OH">Ohio</option>	 <option ":""?="" <?="($state=='OK')?"selected=\"selected\"">value="OK">Oklahoma</option>	 <option ":""?="" <?="($state=='OR')?"selected=\"selected\"">value="OR">Oregon</option>	 <option ":""?="" <?="($state=='PA')?"selected=\"selected\"">value="PA">Pennsylvania</option>	 <option ":""?="" <?="($state=='RI')?"selected=\"selected\"">value="RI">Rhode Island</option>	 <option ":""?="" <?="($state=='SC')?"selected=\"selected\"">value="SC">South Carolina</option>	 <option ":""?="" <?="($state=='SD')?"selected=\"selected\"">value="SD">South Dakota</option>	 <option ":""?="" <?="($state=='TN')?"selected=\"selected\"">value="TN">Tennessee</option>	 <option ":""?="" <?="($state=='TX')?"selected=\"selected\"">value="TX">Texas</option>	 <option ":""?="" <?="($state=='UT')?"selected=\"selected\"">value="UT">Utah</option> <option ":""?="" <?="($state=='VT')?"selected=\"selected\"">value="VT">Vermont</option>	 <option ":""?="" <?="($state=='VA')?"selected=\"selected\"">value="VA">Virginia</option>	 <option ":""?="" <?="($state=='WA')?"selected=\"selected\"">value="WA">Washington</option>	 <option ":""?="" <?="($state=='WV')?"selected=\"selected\"">value="WV">West Virginia</option>	 <option ":""?="" <?="($state=='WI')?"selected=\"selected\"">value="WI">Wisconsin</option>	 <option ":""?="" <?="($state=='WY')?"selected=\"selected\"">value="WY">Wyoming</option>	 </select>
<php?> */