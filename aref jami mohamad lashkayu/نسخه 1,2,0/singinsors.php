<?php 
session_start();

error_reporting(0);
$randomNumber1 = rand(1, 9);
$randomNumber2 = rand(1, 9);
if (!isset($_POST['a'])) {
    $_SESSION['randomNumber1'] = rand(1, 9);
    $_SESSION['randomNumber2'] = rand(1, 9);
    $_SESSION['sum'] = ($_SESSION['randomNumber1'] + $_SESSION['randomNumber2']);
}
if (isset($_POST["a"])) {
    if (!isset($_SESSION['clicked'])) {
        $_SESSION['clicked'] = true;
    $captchaa = htmlspecialchars($_POST['captchaa']);
    if ($captchaa == $_SESSION['sum']) {
        unset($_SESSION['sum'], $_SESSION['randomNumber1'], $_SESSION['randomNumber2']);
        $x = base64_encode(htmlspecialchars($_POST['username']));
        $hashedPassword = base64_encode(htmlspecialchars($_POST['password']));
        if (empty($x) || empty($hashedPassword)) {
            sleep(rand(1, 5));
            echo "<script>alert('لطفا اطلعات رو پر کنید .');</script>";
            $_SESSION['randomNumber1'] = rand(1, 9);
            $_SESSION['randomNumber2'] = rand(1, 9);
            $_SESSION['sum'] = ($_SESSION['randomNumber1'] + $_SESSION['randomNumber2']);
        } else {
            try {
                $servername = "localhost";
                $username = "mrqwir_mp";
                $password = "R&#[[o_fq!1)";
                $conn = new PDO("mysql:host=$servername;dbname=mrqwir_mp", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "خطا در اتصال به دیتابیس: " . $e->getMessage();
            }
            $sql = "SELECT COUNT(*) AS count FROM qw WHERE username = :user AND paswoord = :password";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $x);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row['count'] > 0) {
                $conn = null;
                sleep(rand(1, 5));
                echo "<script>alert('با موفقیت وارد شدید .');</script>";
                header("Location: https://mrqw.ir/");
                exit;
            } else {
                $conn = null;
                sleep(rand(1, 5));
                echo "<script>alert('لطفا اطلعات را درست وارد کنید.');</script>";
                $_SESSION['randomNumber1'] = rand(1, 9);
                $_SESSION['randomNumber2'] = rand(1, 9);
                $_SESSION['sum'] = ($_SESSION['randomNumber1'] + $_SESSION['randomNumber2']);
            }
        }
    } else {
        $_SESSION['randomNumber1'] = rand(1, 9);
        $_SESSION['randomNumber2'] = rand(1, 9);
        $_SESSION['sum'] = ($_SESSION['randomNumber1'] + $_SESSION['randomNumber2']);
        sleep(rand(1, 5));
        echo "<script>alert('لطفا اعدد کپچا را درست وارد کنید ');</script>";
    }
    unset($_SESSION['clicked']);
    }else {
        sleep(rand(1, 5));
        echo "<script>alert('لطفا تا زمان پردازش قبلی صبر کنید.');</script>";
    }
}
