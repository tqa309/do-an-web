<?php $path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";
include "$path/common/header.php"; ?>



<div class="container-fluid mb-5">
        <h1 class="h3 mb-2 text-gray-800 text-center">Thêm sản Phẩm mới</h1>
        <form action="" method="POST" role="form" accept-charset="utf-8">
                <div class="col-lg-6 container-fluid">
                        <div class="form-group">
                                <label for="nameProduct">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="nameProduct" ">
    	</div>
   	 	<div class=" form-group">
                                <label for="brandProduct">Nhãn hiệu</label>
                                <input type="text" class="form-control" id="brandProduct" ">
    	</div>
    	<div class=" form-group">
                                <label for="priceProduct">Giá bán</label>
                                <input type="number" class="form-control" id="priceProduct" ">
    	</div>
    	<div class=" form-group">
                                <label for="decriptionProduct">Mô tả</label>
                                <textarea class="form-control" id="decriptionProduct" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputFile">Ảnh Sản phẩm</label>
                                <input type="file" class="form-control-file mb-2" id="pictureProduct" aria-describedby="fileHelp" onchange="readURL(this);">
                                <img id="uploadimg" class=" img-fluid img-thumbnail" src="#" alt="your image" style="display: none" />
                        </div>
                        <button type="button" id="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
</div>




<?php include "$path/common/footer.php"; ?>