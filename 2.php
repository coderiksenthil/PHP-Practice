<html>
    <head>
</head>

<body>
    <?php
    $text = " red";
    echo "my favourite colour is" .  $text . "<br>";
    #this is commenets
    //this is also comments
    /* 
    mutiple line comments
    */
    echo "hello"; //variables
    echo "<br>";
    echo "india";
    echo "<br>";
    echo "100";
    echo "<br>";
    $x = 9;
    $y = 9;
    echo $x + $y;

    $z = 7;
    function mytest(){
        echo "<p>variable of the function is here: $z </p>";
    }
        mytest();

        echo "<p>variable of the function is here: $z</p>";

        $a = 7;
        function mytest1() {
            echo "<p> text here: $a </p>";
            
        }
        mytest1();
        echo "<p>text here: $a </p>";


        $b=10;
        $c=10;
        function mytest2() {
           global $b,$c;
           $c = $b * $c;
        }

        mytest2();

        echo $c;

        echo "<br>";

        $d = 10;
        $e = 10;
        function mytest3(){
            $GLOBALS['e'] = $GLOBALS['d'] * $GLOBALS['e'];

        }  
        mytest3();
        echo $e;

        echo "<br>";

    function mytest4(){
        static $x=0;
        echo $x;
        $x++;
    
    }
    echo "<br>";
    mytest4();
    echo "<br>";
    mytest4();
    echo "<br>";
    mytest4();

    echo "<h1>india </h1>"

    //

     ?>
</body>
    </html>