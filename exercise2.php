<html>
    <head>
        <title>Second Exercise</title>
    </head>
    <body>
        <h1>Second Exercise<br /></h1>
        <!-- Making a form to take an input from the user. -->
        <form name="form" action="" method="get">
            <label for="age"><strong>Age checker</strong></label>
            <input type="number" id="age" name="age">
            <input type="submit" value="Submit">
        </form>
        <?php
            
            $user = $_GET["age"]; //The user takes the input value that the customer has entered.

            # Age verification method.
            if ($user < 18) {
                echo ("<strong>You are not allowed to vote. Your age is: <em>$user</em>. You are a minor.</strong>");
            }
            else {
                echo ("<strong>Your age is: <em>$user</em></strong>. <strong>You are allowed to vote.</strong>");
            }
            
        ?>
    
    </body>
</html>
