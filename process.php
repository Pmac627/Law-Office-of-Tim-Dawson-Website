<?php /* process.php */
    require_once('dbc.php');
	session_start();
	$allValid = TRUE;
    
	function validate_input($string, $type, $length, $exact = FALSE) {
		$type = 'is_'.$type;

		if(!$type($string)) {
			return FALSE;
		} elseif(empty($string)) {
			return FALSE;
		} elseif(strlen($string) > $length) {
			return FALSE;
		} elseif($exact == TRUE && strlen($string) < $length) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function validate_email($email) {
		if (validate_input($email, 'string', 100)) {
		return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
		} else {
			return FALSE;
		}
	}

	function santize_input($data) {
		return htmlspecialchars(stripslashes(trim($data)));
	}

	function setErrorMsg($msg, $nL = FALSE) {
		if($nl) {
			return "<div class='form-row'>
				<span class='form-error'> * " . $msg . "</span>
			</div>";
		} else {
			return "<span class='form-error'> * " . $msg . "</span>";
		}
	}

	function sendMail($email, $name, $phone, $method) {
		// send the email confirmation
		$record = "bossdaws@aol.com";
		$to = $email;
		$subject = 'AttorneyDawson.org Contact Form';
        $date = date('U');
        $body = '
			<html>
			<head>
			<title>AttorneyDawson.org</title>
			</head>
			<body>
            <p>Thank you for contacting the Law Office of Timothy Paul Dawson! We have received your email and will respond via ' . $method . ' as soon as possible.</p>
            <p>Below is the information provided by you on the contact form.</p>
			<p>Date: ' . date("l, F jS, Y @ g:iA (e)") . '
			<br />Name: ' . $name . '
			<br />Email: ' . $email . '
			<br />Phone: ' . $phone . '
			<br />You selected ' . $method . ' as your preferred method of contact. 
			</p>
			</body>
			</html>';
		$body_record = '
			<html>
			<head>
			<title>AttorneyDawson.org</title>
			</head>
			<body>
			<p>Date: ' . date("l, F jS, Y @ g:iA (e)") . '
			<br />From: ' . $name . '
			<br />Email: ' . $email . '
			<br />Phone: ' . $phone . '
			<br />I prefer to be contacted via: ' . $method . '
			</p>
			</body>
			</html>';
		$headers = "From: AttorneyDawson.org <noreply@AttorneyDawson.org>\r\nMIME-Version: 1.0" . "\r\nContent-type:text/html;charset=UTF-8" . "\r\n";
		$params = "-f noreply@AttorneyDawson.org";

		try {
			mail($to, $subject, $body, $headers, $params);
			mail($record, $subject, $body_record, $headers, $params);
            
            $con = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE);
            if(!$con) {
                die('Could not connect: ' . mysqli_error($con));
            }
            mysqli_select_db($con, DATABASE);
            $sql = "INSERT INTO contact (name, email, phone, method, date) VALUES ('$name', '$email', '$phone', '$method', '$date')";
            
            $result = mysqli_query($con, $sql);
            
			return TRUE;
		} catch (Exception $e) {
			$_SESSION['errPage'] = setErrorMsg($e->getMessage(), TRUE);
			return FALSE;
		}
	}

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!validate_input($_POST['name'], 'string', 75)) {
			$allValid = FALSE;
			$_SESSION['errName'] = setErrorMsg("Please enter a valid name!");
		} else {
			$_SESSION['errName'] = NULL;
		}
		if(!validate_input($_POST['phone'], 'string', 14)) {
			$allValid = FALSE;
			$_SESSION['errPhone'] = setErrorMsg("Please enter a valid phone number!");
		} else {
			$_SESSION['errPhone'] = NULL;
		}
		if(!validate_email($_POST['email'])) {
			$allValid = FALSE;
			$_SESSION['errEmail'] = setErrorMsg("Please enter a valid email!");
		} else {
			$_SESSION['errEmail'] = NULL;
		}
		if(!validate_input($_POST['method'], 'string', 5, TRUE)) {
			$allValid = FALSE;
			$_SESSION['errMethod'] = setErrorMsg("Please select a valid method!");
		} else {
			$_SESSION['errMethod'] = NULL;
		}
		if(!$allValid) {
			return FALSE;
		} else {
			if(sendMail(santize_input($_POST['email']),santize_input($_POST['name']),santize_input($_POST['phone']),santize_input($_POST['method']))) {
				$_SESSION['successMethod'] = santize_input($_POST['method']);
				header("Location: success.php");
			} else {
				header("Location: contact.php");
			}
		}
	} else {
		// FORM NOT SUBMITTED YET, PASS WITHOUT ERROR
	}
?>