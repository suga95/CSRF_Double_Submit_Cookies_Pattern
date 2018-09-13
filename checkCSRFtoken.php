<?php
session_start();

// echo $_COOKIE['csrf_cookie'];
// echo "<br>";
// echo $_POST['csrf_token'];


if(isset($_POST['fName']))
{
    # If true the condition gets executed, that is no CSRF forgery
    # Here the Set Cookie of "$_COOKIE['csrf_cookie']" is checked if the cookie variable is set
    # and checked with posted CSRF Token Cookie Value accordingly
    if(isset($_COOKIE['csrf_cookie']) && $_COOKIE['csrf_cookie'] == $_POST['csrf_token'] )
    {
        echo "<font color='green' size='12'>Thank You for Your Valuable Information, </font>";
        echo "<font color='green' size='12'>Your <u>Trueness</u> is much Appreciated! </font><br>";
        echo "<font color='red' size='10'><u>CSRF Token Cookie Value</u> and <u>Posted CSRF Token hidden field Value</u> is a match! </font>";
        
    }
    else
    {
        echo "<font color='red' size='12'> Cross-Site Request Forgery Attack is Detected </font> <br>";
        echo "<font color='red' size='12'> Cross-Site Request Forgery Attack is successfully Eradicated!  </font><br>";
        echo "<font color='green' size='12'> Thanks to <u>Double Submit Cookies Patterns</u> </font>";
    }

}
?>
