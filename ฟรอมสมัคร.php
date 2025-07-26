<html>
    <head>
        <title>สมัครสมาชิก</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/pop.css">
    </head>
    <body class="bg">
    <?php
      include "include/nav.php";
      if(filter_input(INPUT_POST,'submit')){
        echo '<div class="container">';
          echo '<main>';
            echo '<div class="py-5 text-center">';
            echo '</div>';
              echo '<div class="row g-3 field">';
                echo '<h4 class="mb-3">สมัครเสร็จสิ้น</h4>';
                echo '<form class="needs-validation" method="post" name="regiskpp" action="" >';
                  echo '<div class="col-12 "><label class="labelf">ชื่อจริง :</label>'.filter_input(INPUT_POST,'firstn').'</div>';
                  echo '<div class="col-12 "><label class="labelf">นามสกุล :</label>'.filter_input(INPUT_POST,'lastn').'</div>';
                  echo '<div class="col-12 "><label class="labelf">Username :</label>'.filter_input(INPUT_POST,'usern').'</div>';
                  echo '<div class="col-12 "><label class="labelf">Email :</label>'.filter_input(INPUT_POST,'email').'</div>';
                  echo '<div class="col-12 "><label class="labelf">หมายเลขบัตรประชาชน :</label>'.filter_input(INPUT_POST,'idcard').'</div>';
                
                  echo '<div class="col-12"><label class="labelf">เพศ :</label>';
                        if(filter_input(INPUT_POST,'gender')=="m"){echo "ชาย";
                        }else{echo "หญิง";}
                  echo '</div>';

                  echo '<div class="col-12 "><label class="labelf">วัดเกิด :</label>'.filter_input(INPUT_POST,'birth').'</div>';

                  echo '<div class="col-12"><label class="labelf">จังหวัด :</label>';
                        switch(filter_input(INPUT_POST,'province')){
                          case 1 : echo "กำแพงเพชร";
                              break;
                          case 2 : echo "ตาก";
                              break;
                          default : echo "ไม่ระบุจังหวัด";
                        }
                  echo '</div>';

                  echo '<div class="col-12"><label class="labelf">อำเภอ :</label>';
                    switch(filter_input(INPUT_POST,'state')){
                      case 1 : echo "เมือง";
                          break;
                      case 2 : echo "คลองลาน";
                          break;
                      case 3 : echo "ไทรงาม";
                          break;
                      case 4 : echo "แม่สอด";
                          break;
                      default : echo "ไม่ระบุอำเภอ";
                    }
                  echo '</div>';

                  echo '<div class="col-12"><label class="labelf">ตำบล :</label>';
                    switch(filter_input(INPUT_POST,'local')){
                      case 1 : echo "ในเมือง";
                          break;
                      case 2 : echo "นครชุม";
                          break;
                      case 3 : echo "สระแก้ว";
                          break;
                      default : echo "ไม่ระบุตำบล";
                    }
                  echo '</div>';

                echo '</form>';
                echo '<hr class="my-4">';
                  echo '<button class="w-100 btn btn-primary btn-lg" type="submit" name="return" value="กลับ" onclick="javascript:window.history.back()">ย้อนกลับ</button>';
              echo '</div>';
          echo '</main>';
        echo '</div>';
      }else{





    ?>
    <div class="container">
        <main>
          <div class="py-5 text-center">
          </div>
            <div class="row g-5 field">
              <h4 class="mb-3 title">สมัครสมาชิก</h4>
                  <form class="needs-validation" method="post" name="regiskpp" action="" >
                    <div class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">ชื่อจริง</label>
                          <input type="text" class="form-control" name="firstn" placeholder="" required="">
                      </div>

                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">นามสกุล</label>
                          <input type="text" class="form-control" name="lastn" placeholder="" required="">
                      </div>

                      <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <input type="text" class="form-control" name="usern" placeholder="ชื่อผู้ใช้งาน" required="">
                          </div>
                      </div>

                      <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                          <div class="input-group has-validation">
                            <input type="password" class="form-control" name="pw" id="pw" placeholder="รหัสผู้ใช้งาน" required="">
                              <div style="margin-top:.5rem"><input type="checkbox" onclick="togglePassword()"> แสดงรหัสผ่าน</div>
                                <script>
                                  function togglePassword() {
                                  var pw = document.getElementById("pw");
                                  ( pw.type === "password" ) ? pw.type = "text": pw.type = "password";
                                  }
                                </script>
                          </div>
                      </div>

                      <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                          <input type="email" class="form-control" name="email" placeholder="">
                      </div>

                      <div class="col-12">
                        <label for="idcard" class="form-label">หมายเลขบัตรประชาชน</label>
                          <input type="text" class="form-control" maxlength="13" name="idcard" required="" >
                      </div>

                      <div class="col-12">
                        <label for="gender" class="form-label">เพศ</label>
                        <div class="form-check">
                          <input name="gender" type="radio" class="form-check-input" value="m" >
                            <label class="form-check-label" for="gender">ชาย</label>
                        </div>
                        <div class="form-check">
                          <input name="gender" type="radio" class="form-check-input" value="f">
                            <label class="form-check-label" for="gender">หญิง</label>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="birth" class="form-label">วันเกิด</label>
                          <input type="date" class="form-control" name="birth">
                      </div>

                      <div class="col-md-5">
                        <label for="province" class="form-label">จังหวัด</label>
                          <select class="form-select" name="province" required="">
                              <option value="">จังหวัด</option>
                              <option value="1">กำแพงเพชร</option>
                              <option value="2">ตาก</option>
                          </select>
                      </div>

                      <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                          <select class="form-select" name="state" required="">
                            <option value="">อำเภอ</option>
                            <option value="1">เมือง</option>
                            <option value="2">คลองลาน</option>
                            <option value="3">ไทรงาม</option>
                            <option value="4">แม่สอด</option>
                          </select>
                      </div>

                      <div class="col-md-3">
                        <label for="local" class="form-label">ตำบล</label>
                          <select class="form-select" name="local" required="">
                            <option value="">ตำบล</option>
                            <option value="1">ในเมือง</option>
                            <option value="2">นครชุม</option>
                            <option value="3">สระแก้ว</option>
                          </select>
                      </div>
                
                      <div class="col-12">
                        <label for="address" class="form-label">ที่อยู่เพิ่มเติม</label>
                          <textarea class="form-control" id="address" row="3" cols="50"></textarea>   
                      </div>
                    </div>
                <hr class="my-4">
                  <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit" value="ยืนยัน" >ยันยันสมัคร</button>
              </form>
            </div>
          </main>    
      </div>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <?php
          }
          include "include/footer.php";
    ?>
    </body>
</html>
  