<html>
    <head>
        <title>Third Exercise</title>
    </head>
    <body>
        <h1>Third Exercise<br /></h1>
        <!-- Making a form to take an input from the user. -->
        <form name="form" action="" method="get">
            <label for="num"><h1>Is this a prime number?</h1><br /></label>
            <input type="number" id="num" name="num">
            <input type="submit" value="Submit">
        </form>
        <?php
            
            $user = $_GET["num"]; 

            if ($user <= 1) { # Base case 1.
                echo ("<strong><em>$user</em> is not a prime Number.</strong>");
            }
            elseif ($user == 2) { // Base case 2.
                echo ("<strong><em>$user</em> is a prime Number.</strong>");
            }
            else {
                $prime = true; # for marking a number if it is prime or not.
                for ($i = 2; $i < $user; $i++) { // The loop change the value of prime according to if num is prime or not.
                    if ($user % $i == 0 ) {
                        $prime = false;
                        break;
                    }
                }
                
                if ($prime) {
                    echo ("<strong><em>$user</em> is a prime Number.</strong>");
                }
                else {
                    echo ("<strong><em>$user</em> is not a prime Number.</strong>");
                }
                
            }
            
        ?>
    
    </body>
</html>
