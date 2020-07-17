
<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";
include "$path/common/header.php" ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <br>
    

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">QUẢN LÝ HÓA ĐƠN</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="dataTable" class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Mã Hóa Đơn</th>
                      <th>Tên Người Thanh Toán</th>
                      <th>Điện thoại</th>
                      <th>Địa chỉ</th>
                      <th>Ngày Thanh Toán</th>
                      <th>Vận Chuyển</th>
                      <th>Tình Trạng Thanh Toán</th>
                      <th>Tổng Tiền</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        include 'fetch.php'
                    ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- Modal bill detail -->
        <div class="modal fade" id="modal_bill_detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h3 id="modal_title_detail"></h3>

                
                </div>
                <div class="modal-body">
                <div class="table-responsive">
                <table id="dataTable1" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <td>Tên Sản Phẩm</td>
                        <td>Đơn giá</td>
                        <td>Số Lượng Sản Phẩm</td>
                        <td>Thành Giá</td>
                      </tr>
                    </thead>
                    <tbody id="detail_modal"></tbody>
                </table>
              </div>
                    
                </div>
                <div class="modal-footer">
                <button id="remove_detail" class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                
                </div>
            </div>
            </div>
        </div>
        <!-- /.container-fluid -->
      <!-- Modal Bill Change -->
      <div class="modal fade" id="modal_bill_change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 id="modal_title_change"></h3>
            <button id="remove_change" class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <form  id="form_change" class="needs-validation" method="POST">
          <div><strong>Tình trạng vận chuyển</strong></div>
          <input type="radio" id="status_0" name="status" value="Chưa chuyển">
          <label>Chưa chuyển</label><br>
          <input type="radio" id="status_1" name="status" value="Đang chuyển">
          <label>Đang chuyển</label><br>
          <input type="radio" id="status_2" name="status" value="Đã nhận">
          <label>Đã nhận</label>
          <br>
          <div><strong>Tình trạng thanh toán</strong></div>
          <input type="radio" id="pay_0" name="pay" value="Chưa thanh toán">
          <label>Chưa thanh toán</label><br>
          <input type="radio" id="pay_1" name="pay" value="Đã thanh toán">
          <label>Đã thanh toán</label><br>
          <div></div>
          
          <button id="submitformdata" onclick="SubmitFormData()" type="button" class="btn btn-primary">Cập nhật</button>

          <div class="modal-footer">
          <div id="notice"></div>
          </div>
        </form>
          </div>

        </div>
       
      </div>
    </div>
    



      <!-- End of Main Content -->

      <?php include "$path/common/footer.php" ?>
<script>
function bill_detail(check_bill)
{
    console.log(check_bill);
    document.getElementById("modal_title_detail").innerHTML = "Chi tiết Mã Hóa Đơn "+check_bill ;
       
        $.ajax({
            type: "POST",
            url: "detail.php",
            data: {
                "bill_id": check_bill,
            },
            success: function(data) {
                $('#detail_modal').append(data);
            }
        });
 
}



function bill_change(check_bill)
{
    //console.log(check_bill);
    document.getElementById("modal_title_change").innerHTML = "Cập nhật cho Mã Hóa Đơn "+check_bill ;
    var html='<input type="text" id="bill_id_change" name="bill_id_change" value='+check_bill+' style="display:none"/>';
    $('#form_change').append(html);
   
    // if(document.getElementById('st').checked) {
    //  //Male radio button is checked
    // }else if(document.getElementById('gender_Female').checked) {
    //     //Female radio button is checked
    // }
    // var status = $("input[name="status"]:checked").val();
    // var pay = $("input[name="pay"]:checked").val();
   
        
}

$("#remove_detail").click(function(){
  $("#detail_modal tr").remove();
});



function SubmitFormData() {
    var bill_id_change = document.getElementById("bill_id_change").value;
    var status;
    if (document.getElementById("status_0").checked) 
    status = document.getElementById("status_0").value;
    else 
    if (document.getElementById("status_1").checked) 
    status = document.getElementById("status_1").value;
    else     
    if (document.getElementById("status_2").checked) 
    status = document.getElementById("status_2").value;

    var pay;
    if (document.getElementById("pay_0").checked) 
    pay = document.getElementById("pay_0").value;
    else if (document.getElementById("pay_1").checked) 
    pay = document.getElementById("pay_1").value;
    console.log(bill_id_change);
    console.log(status);
    console.log(pay);
    var html;
    if (pay!==undefined && status!==undefined){
    $.ajax({
            type: "POST",
            url: "detail.php",
            data: {
                "bill_id_change": bill_id_change,
                "status":status,
                "pay":pay,
            },
            success: function(data) {
              $("#notice h5").remove();
              if (data="ok") html='<h5 class="text-success">Cập nhật thành công</h5>';
              $('#notice').append(html);
              
            }
        });
      }
        else html='<h5 class="text-danger">Cập nhật không thành công</h5>';
  $("#notice h5").remove();
  $('#notice').append(html);
}

$("#remove_change").click(function(){
  $("#bill_id_change").remove();
  
  location.reload();

});
</script>


