echo
    แสดงข้อมูลสู่หน้าจอ

การสร้างตัวแปร
    $x = 5;

การสร้างfunciton 
    function myFunc($myname){
        echo 'this is my function ' . $myname;
    }

constants ค่าคงที่
    define("Constant", "this is const");
    define("ConstArr", ["value1", "value2"]);

ชนิดของ arrays
    1.Indexed Arrays
        // [[0]=> string(6) "value1", [1]=> string(6) "value2", [2]=> string(6) "value3"]
        $indexArr = ["value1", "value2", "value3"];

    2.Associative Arrays
        $associativeArr = ["key0" => "value1", "key1" => "value2", "key2" => "value3"];
        
    3.Multidimensional Arrays
        $multiArr = array(array("key0",1,1), array("key1",2,2));

$GLOBALS
    เรียกใช้งาน global variable
    $x = 10;
    $y = 5;
    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        echo $GLOBALS['z'];
    }

$_SERVER
    แสดงรายละเอียดของ server

การรับค่าจาก method
    $_GET, $_POST, $_REQUEST

การ include file php
    <?php include('test_include.php'); ?>

การใช้ session

    -index.php

        <?php session_start() ?>
        <?php
            $_SESSION['mySession1'] = 'valueSession1';
            $_SESSION['mySession2'] = 'valueSession2';
        ?>
        <a href="test_session.php">test session page</a>

    -test_session.php

        <?php session_start() ?>
        <?php
            echo 'hello my session : ' . $_SESSION['mySession1'] . '<br>';
            echo 'hello my session : ' . $_SESSION['mySession2'] . '<br>';
        ?>

0. install extension

    Auto close tag
    Auto rename tag
    PHP IntelliSense

1. C:\xampp\htdocs > create new folder php-tutorial > index.php

    -C: > xampp > htdocs > php-tutorial > index.html

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div>hello html</div>
            <?php echo "hello php" ?>
        </body>
        </html>

    -open web browser > localhost/php-tutorial

2. echo คือ การแสดงข้อมูลออกสู่หน้าจอ สามารถใส่ tag html ได้

    <?php 
        echo "hello php";
        echo "<br>";
        echo "this is php";
        echo "<br>"
    ?>

3. การสร้างตัวแปร และ การ concat ด้วย .

    <?php
        $name = 'game woramet';
        echo "my name is " . $name;
        echo "<br>"
    ?>

4. การสร้าง function

    <?php
        $name = 'woramet';
        function myFunc($myname){
            echo 'this is my function ' . $myname;
        }
        myFunc($name);
    ?>

5. Data type

    <?php
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
        // null
        $null = null;
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
        echo $null;
        echo '<br>';
        $myCar = new Car();
        echo $myCar->model;
        echo '<br>';
    ?>

6. constants ค่าคงที่

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
    ?>

7. Operater

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

8. if else

    <?php
        $name = 'game1';
        if ($name == 'game'){
            echo 'your name is game';
        }else{
            echo 'your name is woramet';
        }
        echo '<br>';
    ?>

9. switch สำหรับ หลายเงื่อนไข

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
    ?>

10. loop

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

11. ชนิดของ arrays

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
    ?>

12. $GLOBALS variable สามารถเรียกใช้งาน global variable ได้

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

13. $_SERVER แสดงรายละเอียดของ server

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
    ?>

14. $_REQUEST ใช้สำหรับรับค่าที่ส่งมากับ request รับค่าที่ส่งมาแบบ get หรือ post ก็ได้

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
    ?>

15. $_GET รับค่าจาก method get

    -index.php

        <form action="test_get.php" method='get'>
            Name is <input type="text" name="myname">
            <br>
            Email is <input type="text" name="myemail" value="" class="">
            <br>
            <button type="submit" class="">test get</button>
        </form>

    -test_get.php

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>test get</title>
        </head>
        <body>
            test get page your name is <?php echo $_GET['myname'] . '<br>'; ?>
            test get page your email is <?php echo $_GET['myemail'] . '<br>'; ?>
        </body>
        </html>

16. $_POST รับค่าจาก method post

    -index.html

        <form action="test_post.php" method='post'>
            Name is <input type="text" name="myname">
            <br>
            Email is <input type="text" name="myemail" value="" class="">
            <br>
            <button type="submit" class="">test post</button>
        </form>

    -test_post.php

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>test post</title>
        </head>
        <body>
            test post page your name is <?php echo $_POST['myname'] . '<br>'; ?>
            test post page your email is <?php echo $_POST['myemail'] . '<br>'; ?>
        </body>
        </html>

17. include นำเข้า file php

    -test_include.php

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div>this is test include page</div>
            <?php echo 'hello php this is test include page'; ?>
        </body>
        </html>

    -index.php

        <?php
            include('test_include.php');
        ?>

18. $_SESSION กำหนดค่า session แล้วเรียกใช้งานค่า session ที่กำหนดจากไฟล์อื่น

    -index.php

        <?php session_start() ?>
        <?php
            $_SESSION['mySession1'] = 'valueSession1';
            $_SESSION['mySession2'] = 'valueSession2';
        ?>
        <a href="test_session.php">test session page</a>

    -test_session.php

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>test session</title>
        </head>
        <body>
            <div>this is session page</div>
            <?php session_start() ?>
            <?php
                echo 'hello my session : ' . $_SESSION['mySession1'] . '<br>';
                echo 'hello my session : ' . $_SESSION['mySession2'] . '<br>';
            ?>
        </body>
        </html>