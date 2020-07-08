
<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";
require "$path/common/functions.php";
include "$path/common/header.php" ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <form id="report">
            <div class="form-group" >
              <label>Ngày bắt đầu</label>
              <input type="date" class="form-control" id="start_day" name="start_day" aria-describedby="emailHelp" placeholder="Enter email">
             
           
            
              <label >Ngày cuối </label>
              <input type="date" class="form-control" id="end_day" name="end_day">
            </div>
            <div class="form-group">
            <label>Chọn bộ lọc</label>
            <select name="type_filter" id="type_filter">
              <option value="Tất cả">Tất cả</option>
              <option value="Theo loại điện thoại">Theo loại điện thoại</option>
              <option value="Theo hãng điện thoại">Theo hãng điện thoại</option>
            </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="report()" >Xuất báo cáo</button>
          </form>
          
        <div id="notice_form" class="warning"></div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table id="adding_table" class="table table-bordered"  width="100%" cellspacing="0">  
                </table>
              </div>
            </div>
        </div>
       
        <!-- /.container-fluid -->
      

      <!-- End of Main Content -->

     
      <?php include "$path/common/footer.php" ?>
   
<script>
  function report()
{
  $("#adding_table tr").remove();
    var formData = $('#report').serialize();
    var begin=document.getElementById("start_day").value;
   var end=document.getElementById("end_day").value;
   if (begin===undefined || end===undefined)
   {
    document.getElementById("notice_form").innerHTML="Nhập thiếu dữ liệu";
   }
   else
   {
        $.ajax({
            type: "POST",
            url: "fetch.php",
            data: formData,
            success: function(data) {
                $('#adding_table').append(data);
                alert(data);
            }
        });
    }
 
}

</script>

