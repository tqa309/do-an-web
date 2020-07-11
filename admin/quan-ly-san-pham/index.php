<?php
$path = $_SERVER['DOCUMENT_ROOT'] . "/do-an-web/admin";

include "$path/common/header.php" ?>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center" id="dataProduct" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Thao tác</th>
                            <th>ID</th>
                            <th>Khuyến Mãi Hot</th>
                            <th>Sản phẩm nổi bật</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Hãng</th>
                            <th>Giá bán</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Ảnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $type_detail = $product->getData("item_type_detail");
                        foreach ($product->getData() as $item) { ?>
                            <tr data-id="<?php echo $item['item_id'] ?>">
                                <td class="d-flex justify-content-center border-right-0" >
                                    <a data-toggle="modal" data-target="#exampleModalCenter" class="mt-3" style="width: max-content;cursor:pointer">
                                        <i class="fas fa-edit edit-product"></i></a>
                                    <a class=" pl-4 mt-3  " style="cursor:pointer" onclick="deleteProduct(this)">
                                        <i class="fas fa-trash-alt "></i></a>
                                </td>

                                <th class="pt-4 border-left"><?php echo $item['item_id']; ?></th>
                                <td class="pt-4"> <input class="form-check-input top-sale" type="checkbox" value="T1" <?php foreach ($type_detail as $value) {
                                                                                                                            if (in_array($item['item_id'], $value) and in_array("T1", $value)) {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                        } ?>></td>
                                <td class="pt-4"> <input class="form-check-input special-price" type="checkbox" value="T2" <?php foreach ($type_detail as $value) {
                                                                                                                                if (in_array($item['item_id'], $value) and in_array("T2", $value)) {
                                                                                                                                    echo "checked";
                                                                                                                                }
                                                                                                                            } ?>></td>
                                <td class="pt-4"><?php echo $item['item_name'] ?></td>
                                <td class="pt-4"> <?php echo $item['item_brand']; ?></td>
                                <td class="pt-4"> <?php echo number_format($item['item_price']); ?></td>
                                <td class="pt-4 "><?php echo $item['item_decription']; ?></td>
                                <td class="pt-4"><img src="<?php echo "../../" . $item['item_image']; ?>" class="" height="160px" width="130px">
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Thay đổi thông tin sản phẩm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group">
                            <label for="idProduct">Mã sản phẩm</label>
                            <input type="text" class="form-control" id="idProduct" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <label for="nameProduct">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="nameProduct">
                        </div>
                        <div class=" form-group">
                            <label for="brandProduct">Nhãn hiệu</label>
                            <input type="text" class="form-control" id="brandProduct">
                        </div>
                        <div class=" form-group">
                            <label for="priceProduct">Giá bán</label>
                            <input type="number" class="form-control" id="priceProduct">
                        </div>
                        <div class=" form-group">
                            <label for="decriptionProduct">Mô tả</label>
                            <textarea class="form-control" id="decriptionProduct" rows="7"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Ảnh Sản phẩm</label>
                            <input type="file" class="form-control-file mb-2 w-50" id="pictureProduct" aria-describedby="fileHelp" onchange="readURL(this);">
                            <img id="uploadimg" class=" img-fluid img-thumbnail" src="#" alt="your image" style="display: none">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" id="updatebtn" class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
    <!--Footer.php  -->
</div>




<?php include "$path/common/footer.php" ?>