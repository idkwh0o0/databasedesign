<?php
    session_start();
    require_once('conn.php');

    $id = $_SESSION['id'];
    $course_name = $_POST['course_name'];
    $sign_date = $_POST['sign_date'];
    $course_date = $_POST['course_date'];
    $course_phone = $_POST['course_phone'];
    $course_website = $_POST['course_website'];
    $course_price = $_POST['course_price'];
    $type = $_POST['course_type']; //課程種類
    $course_type = $_POST['course_type']; //課程技能
    $district = $_POST['district'];
    $course_address = $_POST['course_address'];


    $sql = "update course_0614 set course_name= $course_name, sign_date = $sign_date, course_date = $course_date, course_phone = $course_phone";
    $sql.=", course_website = $course_website, course_price = $course_price, course_type = $type, skill = $course_type, course_district = $district";
    $sql.=", course_address = $course_address from course_0614 where course_ID = $id";
    echo $sql;

    echo $sql . '<br>';
    $result = $conn->query($sql);
    if (!$result) {
      die($conn->error);
    }

    // 如果編輯成功
    header('Location: updatecourse.php');
?>