<?php require './functions.php';
include '../header.php'?>

   <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataProduct" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Thao tác</th>
                                            <th>ID</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hãng</th>
                                            <th>Giá bán</th>
                                            <th>Mô tả sản phẩm</th>
                                            <th>Ảnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php foreach ($product->getData() as $item) { ?>
                                        <tr>
                                            <td class="d-flex justify-content-center " style="    height: 200px;">
                                                <a data-toggle="modal" data-target="#exampleModalCenter" class=" mr-4 mt-3" style="width: max-content;cursor:pointer">
                                                    <i class="fas fa-edit edit-product"></i></a>
                                                    <a class=" roduct(pl-4 mt-3  " style="cursor:pointer" onclick="deleteProduct(this)">
                                                    <i class="fas fa-trash-alt "></i></a>
                                            </td>
                                            <td><?php echo $item['item_id']; ?></td>
                                            <td><?php echo $item['item_name'] ?></td>
                                            <td> <?php echo $item['item_brand']; ?></td>
                                            <td> <?php echo $item['item_price']; ?></td>
                                            <td><?php echo $item['item_decription']; ?></td>
                                            <td><img src="<?php echo $item['item_image']; ?>" class="img-thumbnail border-0">
                                            </td>
                                        </tr>
                                      <?php } ?>
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




<?php include '../footer.php' ?>