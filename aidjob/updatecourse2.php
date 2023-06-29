<?php
session_start();
require_once('conn.php');

$sql = "SELECT course_ID, course_name, sign_date, sign_due, course_date, course_phone, course_website, course_price, course_type.type as course_type, skill.type as skill_type, city, district, course_address FROM course_0614, course_type, skill, district WHERE course_0614.skill=skill.type_ID and course_0614.course_district=district.district_ID and course_type.course_type=course_0614.course_type";

$result = $link->query($sql);
if (!$result) {
    die($link->error);
}

$datas = array();


while ($row = mysqli_fetch_array($result)) {
    $datas[] = $row;
}

?>
<!DOCTYPE html>
<html lang="zh-en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, user-scalable = no">

    <link rel="stylesheet" href="bar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CDN的方式(直接連到網路) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>aidjobbManagerUpdatePage</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  bg-warning">
        <div class="container-fluid">

            <a class="navbar-brand">
                <img src="img/aidjob.png" alt="" width="60" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav" style="float:right">
                <ul class="navbar-nav me-auto">
                    <li class="nav-brand">
                        <a class="nav-link active" aria-current="page" href="option.php">使用者頁面</a>
                    </li>

                    <li class="nav-brand">
                        <a class="nav-link active" aria-current="page" href="updatework.php">工作修改</a>
                    </li>


                    <li class="nav-brand">
                        <a class="nav-link active" aria-current="page" href="updatecourse.php">就業輔導修改</a>
                    </li>


                    <li class="nav-brand">
                        <a class="nav-link active" aria-current="page" href="updateother.php">其他修改</a>
                    </li>

                    <li class="nav-brand">
                        <a class="nav-link navbar-fixed" href="insertwork.php">新增</a>
                    </li>

                    <li class="nav-brand">
                        <a class="nav-link navbar-fixed" href="deletework.php">刪除</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <br>

    <section>
        <div class="row">

            <br />
            <h3 style="text-align:center">就業輔導修改</h3>
            <br>
            <h4 style="text-align:center">請輸入欲修改成的內容</h4>

        </div>
        <div class="row">

            <div class="form-input mb-3" style="text-align:center" id="worktable">
                <div>
                    <table cellspacing=1px>
                        <tr>
                            <td>課程名稱:</td>
                            <td>報名起始日期:</td>
                            <td>報名截止日期:</td>
                            <td>課程日期:</td>
                            <td>課程電話:</td>
                            <td>課程網站:</td>
                            <td>課程價錢:</td>
                            <td>課程種類:</td>
                            <td>技能:</td>
                            <td>課程地區:</td>
                            <td>課程地址:</td>

                        </tr>
                        <form method="POST" action="updatecourse3.php">
                            <tr>

                                <td>
                                    <input type="text" name="course_name" id="course_name" placeholder="請輸入">

                                </td>
                                <td>
                                    <input type="text" name="sign_date" id="sign_date" placeholder="請輸入">
                                </td>
                                <td>
                                    <input type="text" name="sign_date" id="sign_due" placeholder="請輸入">
                                </td>
                                <td>
                                    <input type="text" name="course_date" id="course_date" placeholder="請輸入">
                                </td>

                                <td>
                                    <input type="text" name="course_phone" id="course_phone" placeholder="請輸入">
                                </td>

                                <td>
                                    <input type="text" name="course_website" id="course_website" placeholder="請輸入">
                                </td>
                                <td>
                                    <input type="text" name="course_price" id="course_price" placeholder="請輸入">
                                </td>
                                <td>
                                    <?php
                                    $sql = "SELECT skill.type_ID, skill.type as skill_type FROM skill";
                                    $result = mysqli_query($link, $sql);

                                    $options = array();
                                    while ($row = mysqli_fetch_array($result)) {
                                        $options[] = $row;
                                    }
                                    echo '<select id = "skill" name="skill">';
                                    echo '<option selected = "slected" name="course_type" value = "no">選擇種類</option>';
                                    foreach ($options as $option) {
                                        echo '<option name="type" value="' . $option["type_ID"] . '">' . $option["skill_type"] . '</option>';
                                    }
                                    echo '</select>';
                                    mysqli_free_result($result);
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    $sql = "SELECT course_type.course_type, course_type.type as course_type FROM course_type ";
                                    $result = mysqli_query($link, $sql);

                                    $options = array();
                                    while ($row = mysqli_fetch_array($result)) {
                                        $options[] = $row;
                                    }
                                    echo '<select id = "course_type" name="skill_type">';
                                    echo '<option selected = "slected" name="course_type" value = "no">選擇種類</option>';
                                    foreach ($options as $option) {
                                        echo '<option name="type" value="' . $option["course_type"] . '">' . $option["course_type"] . '</option>';
                                    }
                                    echo '</select>';
                                    mysqli_free_result($result);
                                    ?>
                                </td>

                                <td>
                                    <?php
                                    $sql = "SELECT district.district_ID,district.city,district.district FROM district ";
                                    $result = mysqli_query($link, $sql);
                                    $options = array();
                                    while ($row = mysqli_fetch_array($result)) {
                                        $options[] = $row;
                                    }
                                    echo '<select id = "district" name="district">';
                                    echo '<option selected = "slected" name ="place"value = "no">選擇地區</option>';
                                    foreach ($options as $option) {
                                        echo '<option name ="place" value="' . $option["district_ID"] . '">' . $option["city"] . $option["district"] . '</option>';
                                    }
                                    echo '</select>';
                                    mysqli_free_result($result);
                                    ?>
                                </td>

                                <td>
                                    <input type="text" id="course_address" name="course_address" placeholder="請輸入">
                                </td>


                                <td>
                                    <?php
                                    $id = $_GET['id'];
                                    // echo $id;
                                    $_SESSION['id'] = $id;
                                    echo '<button type="submit" name ="submit" class="btn btn-outline-warning button">確認</button>';
                                    ?>
                                </td>
                            </tr>
                        </form>
                </div>
                <!-- </div> -->
    </section>


    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script> -->

</body>