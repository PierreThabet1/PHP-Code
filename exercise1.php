<html>
    <head>
        <title>First Exercise</title>
    </head>
    <body>
        <h1>First Exercise <br /></h1>
        <?php
            # the begining of a for loop.
            for ($i = 0; $i <= 50; $i++) {
                static $y; // declaring a static variable for further access.
                $y += $i; # adding the static variable with the value of $i.
            }

            echo("<h1>The total summation of numbers between 0 to 50 is: <em>$y</em></h1>"); // printing $y. 
        ?>
    
    </body>
</html>
