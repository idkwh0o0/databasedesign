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

            <a class="navbar-brand" >
               <img src="img/aidjob.png" alt="" width="60" height="60">
             </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav"  style="float:right">
               <ul class="navbar-nav me-auto">
                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="option.php">使用者頁面</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="insertwork.php">工作新增</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="insertcourse.php">就業輔導新增</a>
                </li>


                <li class="nav-brand">
                  <a class="nav-link active" aria-current="page" href="insertother.php">其他新增</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="deletework.php">刪除</a>
                </li>

                <li class="nav-brand">
                  <a class="nav-link navbar-fixed" href="updatework.php">修改</a>
                </li>
              
              
  
              </ul>
            </div>
          </div>
        </nav>
        <br>


      <div class="row">
            <div style="text-align:center">
                  <br/>
                    <h3 style="text-align:center">其他新增</h3>
                   <br>
                <div >

                <div style="text-align:center">
                                <span >資料表</span>
                                   <select>
                                        <option>選擇資料表</option>
                                   </select>
                                   <span >
                                          <button type="button" class="btn btn-outline-warning button">確認</button>
                                        </span>
                                
                          </div>
                              

                  <span >屬性</span>
                  <input  type="text" placeholder="請輸入" >
                </div>
              <br>
                
               <br>

               <button type="submit" name="<?php echo $temp?>" style="width:70px" class="btn btn-outline-warning button" onclick='onInsertButton()'>新增</button>

            </div>
        
      </div>

</body>