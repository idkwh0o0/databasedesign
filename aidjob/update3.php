<?php
// 設定資料庫參數
$hostname = 'localhost'; // 主機名稱
$username = 'root'; //帳號
$password = '2022db06'; //密碼
$database = 'aidjob_0617'; //資料庫名稱

// 建立SQL連線
$link = mysqli_connect($hostname, $username, $password); // 取得物件連線，link 用來檢查連線
mysqli_query($link, "SET NAMES 'UTF8'"); //設定編碼
mysqli_select_db($link, $database) or die("無法選擇資料庫"); // 選擇資料庫，檢查連線
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
  <title>aidjobbManagerInsertPage</title>
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
            <a class="nav-link active" aria-current="page" href="home.php">使用者頁面</a>
          </li>

          <li class="nav-brand">
            <a class="nav-link navbar-fixed" href="updatework.php">新增與修改</a>
          </li>


        </ul>
      </div>
    </div>
  </nav>
  <br>


  <section>
    <div class="row">
      <div class="row">



        <!-- <div class="shadow-lg p-3 mb-5 bg-body rounded"> -->


        <br />
        <h3 style="text-align:center">新增與修改</h3>
        <br>




        <div style="text-align:center">
          <?php
          $ans2 = $_POST['attribute'];
          echo '你選到的屬性是:' . $ans2 . '<br>'; //debug用
          echo '<form method="POST" action="echo htmlspecialchars($_SERVER["PHP_SELF"]);">'; //已經POST
          echo '<input type="search" placeholder="搜尋" aria-label="Search" size="50" name="search">';

          echo '<span>';

          echo '<button type="submit" class="btn btn-outline-warning button">搜尋</button>';
          echo '</form>'; //已經POST
          echo $search = $_POST['search'];
          ?>
          </span>
        </div>



      </div>

      <div class="row">
        <div style="text-align:center;float:center">
          <table cellspacing=1px>
            <tr>
            <tr>
              <!-- for迴圈載入 -->
              <td>屬性對應</td>

            </tr>

            <td>
              <input type="text" size='13px' name="job_id[]" value="<?php echo $row['job_id']; ?> " readonly="readonly">
            </td>



            <td>
              <button class="btn btn-danger" style="width:70px" type="submit" name="<?php echo 'd' . $temp ?>" value="<?php echo $num; ?>" onclick='onDeleteButton()'>刪除</button>
            </td>

            <td>
              <button type="submit" name="<?php echo $temp ?>" style="width:70px" class="btn btn-primary " onclick='onUpdateButton()'>修改</button><br />
            </td>
            <td>
              <button type="submit" name="<?php echo $temp ?>" style="width:70px" class="btn btn-success " onclick='onInsertButton()'>新增</button><br />
            </td>
            <tr>


              <br>
        </div>
      </div>
  </section>


  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script> -->

</body>