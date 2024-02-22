<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>hello html</div>
    <?php 
        echo "hello php";
        echo "<br>";
        echo "this is php";
        echo "<br>";
        echo "<br>";
    ?>
    <!-- variable -->
    <?php
        $name = 'game';
        echo "my name is " . $name;
        echo "<br>";
        echo "<br>";
    ?>
    <!-- function -->
    <?php
        $name = 'woramet';
        function myFunc($myname){
            echo 'this is my function ' . $myname;
        }
        myFunc($name);
        echo '<br>';
        echo '<br>';
    ?>
    <!-- Data type -->
    <!-- check data type with var_dump() -->
    <!-- echo implode(',',$arr) for show all value in array -->
    <?php
        // null
        $null = null;
        // string
        $txt = 'string';
        // integer
        $int = 1234;
        // float
        $float = 3.14;
        // boolean
        $boolean = true;
        // array
        $arr = array('value1', 'value2', 'value3');
        // object
        class Car{
            // Constructor
            function __construct(){
                $this->model = "bmw";
            }
        }

        // check data type
        echo var_dump($txt);

        // show value
        echo $null;
        echo '<br>';
        echo $txt;
        echo '<br>';
        echo $int;
        echo '<br>';
        echo $float;
        echo '<br>';
        echo $boolean;
        echo '<br>';
        echo implode(',',$arr); // command for show all value in array
        echo '<br>';
        echo print_r($arr);
        echo '<br>';
        $myCar = new Car();
        echo $myCar->model;
        echo '<br>';
        echo '<br>';
    ?>
    <!-- Constants -->
    <?php
        // Constants are Global
        // define[name, value];
        define("Constant", "this is const");
        define("ConstArr", ["value1", "value2"]);
        echo Constant;
        echo '<br>';
        echo ConstArr[0];
        echo '<br>';
        function myFunction(){
            echo Constant;
        }
        myFunction();
        echo '<br>';
        echo '<br>';
    ?>
    <!-- Operator -->
    <?php
        // Assignment Operators
        $x = 10;
        $x += 10; // x = x + 10
        $x -= 10; // x = x - 10
        $x *= 10; // x = x * 10
        $x /= 10; // x = x / 10
        $x %= 10; // x = x % 10

        // Comparison Operators
        $num1 = 1;
        $num2 = 2;
        echo var_export($num1 == $num2); // Equal
        echo var_export($num1 === $num2); // Indentical
        echo var_export($num1 != $num2); // Not equal
        echo var_export($num1 !== $num2); // Not identical
        echo var_export($num1 > $num2); // Greater than
        echo var_export($num1 >= $num2); // Grater than or equal
        echo '<br>';

        // Logical Operators
        $t = true;
        $f = false;
        echo var_export($t and $f); // and
        echo var_export($t or $f); // or
        echo var_export($t xor $f); // xor
        echo var_export($t && $f); // and
        echo var_export($t || $f); // or
        echo var_export(!$t); // not
        echo '<br>';

        // String Operators
            // Concatenation
            $txt1 = 'concat1';
            $txt2 = 'concat2';
            echo $txt1 . $txt2;
            echo '<br>';

            // Concatenation asssignment .=
            $txt1 = 'concat1';
            $txt2 = 'concat2';
            $txt1 .= $txt2;
            echo $txt1;
            echo '<br>';

        echo '<br>';
    ?>
    <!-- if else -->
    <?php
        $name = 'game1';
        if ($name == 'game'){
            echo 'your name is game';
        }else{
            echo 'your name is woramet';
        }
        echo '<br>';
    ?>
    <!-- switch สำหรับ หลายเงื่อนไข -->
    <?php
        $day = 'monday';
        switch($day){
            case 'monday';
                echo 'happy day';
                echo '<br>';
            case 'monday';
                echo 'this is monday';
            break;
            case 'tuesday';
                echo 'this is tuesday';
            break;
            default:
                echo 'this is neither monday and tuesday';
        }
        echo '<br>';
        echo '<br>';
    ?>
    <!-- Loop -->
    <?php
        // while loop
        $x = 1;
        while ($x < 5){
            echo 'the number is ' . $x;
            echo '<br>';
            $x ++; // x = x + 1
        }
        echo '<br>';

        // Do while loop
        // ทำก่อน 1รอบ แล้วค่อย check condition หากจริงก็จะกลับมาทำใหม่
        $x = 1;
        do{
            echo 'the number is ' . $x;
            echo '<br>';
            $x = $x + 1;
        } while ($x <= 2);
        echo '<br>';

        // For loop
        for ($x = 0; $x <= 10; $x++) {
            echo "The number is: $x <br>";
        }
        echo '<br>';

        // Foreach loop for array
        $arr = array('ArrValue1', 'ArrValue2', 'ArrValue3');
        foreach ($arr as $element){
            echo $element . '<br>';
        }
        echo '<br>';
        $person = array('game' => '20', 'woramet' => '12', 'tompudsa' => '56');
        foreach ($person as $key => $value){
            echo $key . ' age ' . $value . '<br>';
        }
        echo '<br>';
        echo '<br>';
    ?>
    <!-- type of Array -->
    <?php
        // 1.Indexed Arrays
        // [[0]=> string(6) "value1", [1]=> string(6) "value2", [2]=> string(6) "value3"]
        $indexArr = ["value1", "value2", "value3"];
        echo print_r($indexArr);
        echo '<br>';
        echo $indexArr[0];
        echo '<br>';
        echo '<br>';

        // 2.Associative Arrays
        $associativeArr = ["key0" => "value1", "key1" => "value2", "key2" => "value3"];
        echo print_r($associativeArr);
        echo '<br>';
        echo $associativeArr["key0"];
        echo '<br>';
        
        // 3.Multidimensional Arrays
        $multiArr = array(array("key0",1,1), array("key1",2,2));
        echo print_r($multiArr);
        echo '<br>';
        echo $multiArr[0][0];
        echo '<br>';
        echo $multiArr[0][1];
        echo '<br>';
        echo $multiArr[0][2];
        echo '<br>';
        echo '<br>';
    ?>
    <!-- php superglobal variable -->
    <?php
        // $GLOBALS
        $x = 10;
        $y = 5;
        function addition(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo $GLOBALS['z'];
        }
        addition()
    ?>
    <!-- $_SERVER -->
    <?php
        echo $_SERVER['PHP_SELF'];
        echo '<br>';
        echo $_SERVER['SERVER_NAME'];
        echo '<br>';
        echo $_SERVER['HTTP_HOST'];
        echo '<br>';
        echo $_SERVER['HTTP_USER_AGENT'];
        echo '<br>';
        echo $_SERVER['SCRIPT_NAME'];
        echo '<br>';
        echo '<br>';
    ?>
    <!-- $_REQUEST -->
    <!-- รับได้ทััง get และ post -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
        name : <input type='text' name='fname'>
        <input type="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_REQUEST['fname'];
            if (empty($name)){
                echo 'Name is empty';
            }else{
                echo $name;
            }
        }
        echo '<br>';
        echo '<br>';
    ?>
    <!-- $_GET -->
    <form action="test_get.php" method='get'>
        Name is <input type="text" name="myname">
        <br>
        Email is <input type="text" name="myemail" value="" class="">
        <br>
        <button type="submit" class="">test get</button>
    </form>
    <br>
    <!-- $_POST -->
    <form action="test_post.php" method='post'>
        Name is <input type="text" name="myname">
        <br>
        Email is <input type="text" name="myemail" value="" class="">
        <br>
        <button type="submit" class="">test post</button>
    </form>
    <br>
    <!-- include -->
    <?php
        include('test_include.php');
        echo '<br>';
        echo '<br>';
    ?>
    <!-- $_SESSION -->
    <?php session_start() ?>
    <?php
        $_SESSION['mySession1'] = 'valueSession1';
        $_SESSION['mySession2'] = 'valueSession2';
    ?>
    <a href="test_session.php">test session page</a>
</body>
</html>