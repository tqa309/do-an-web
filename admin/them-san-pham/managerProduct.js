const deleteProduct = async function(param) {
    let btn = $(param);
    let idProduct = btn.closest('tr').children().eq(1).text();
    productRow = btn.closest('tr').addClass('deleteProduct');

    await $.ajax({
        url: 'deleteProduct.php',
        type: 'POST',
        dataType: 'json',
        data: {
            idProduct: idProduct
        },
        success: async function(data) {
            await notification(data, 1);
            $('.deleteProduct').fadeOut(700);
        }

    });

}

$('.edit-product').click(async function() {
    let product = $(this).closest('tr');
    let id = product.children().eq(1).text().trim();
    let name = product.children().eq(4).text().trim();
    let brand = product.children().eq(5).text().trim();
    let price = product.children().eq(6).text();
    let decription = product.children().eq(7).text().trim(" ");

    $('#idProduct').val(id);
    $('#nameProduct').val(name);
    $('#brandProduct').val(brand);
    $('#priceProduct').val(parseFloat(price));
    $('#decriptionProduct').val(decription);



})
//? add product to topsale
$('.top-sale').change(async function() {
    let checkbox = $(this);
    let idProduct = checkbox.closest('tr').children().eq(1).text()
    if (this.checked) {
        await $.ajax({
            type: "POST",
            url: "topSale.php",
            data: {
                idProduct: idProduct
            },
            dataType: "json",
            success: async function(data) {
                await notification(data);
            }
        });
    } else {
        await $.ajax({
            type: "POST",
            url: "rmtopSale.php",
            data: {
                idProduct: idProduct
            },
            dataType: "json",
            success: async function(data) {
                await notification(data, 1);

            }
        });
    }

})
$('.special-price').change(async function() {
    let checkbox = $(this);
    let idProduct = checkbox.closest('tr').children().eq(1).text()
    if (this.checked) {
        await $.ajax({
            type: "POST",
            url: "specialPrice.php",
            data: {
                idProduct: idProduct
            },
            dataType: "json",
            success: async function(data) {
                await notification(data);
            }
        });
    } else {
        await $.ajax({
            type: "POST",
            url: "rmspecialPrice.php",
            data: {
                idProduct: idProduct
            },
            dataType: "json",
            success: async function(data) {
                await notification(data, 1);
            }
        });
    }

})

$('#updatebtn').click(async function() {
    let idProduct = $('#idProduct').val();
    let name = $('#nameProduct').val().trim();
    let brand = $('#brandProduct').val().trim();
    let price = $('#priceProduct').val().trim();
    let decription = $('#decriptionProduct').val();
    let file = $('#pictureProduct').prop('files')[0] ? $('#pictureProduct').prop('files')[0] : "";
    let match = ["image/gif", "image/png", "image/jpg", "image/jpeg"];
    if (file === "") {
        var form_data = new FormData();
        form_data.append('name', name);
        form_data.append('brand', brand);
        form_data.append('price', price);
        form_data.append('decription', decription);
        form_data.append('idProduct', idProduct);

        if (name == "") {
            alert("Thiếu tên sản phẩm");
            return;
        }
        if (brand == "") {
            alert("Thiếu hãng sản xuất");
            return;
        }
        if (price == "") {
            alert("Thiếu giá sản phẩm");
            return;
        }
        await $.ajax({
            url: 'editProduct2.php',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'Json',
            data: form_data,

            success: async function(data) {
                await notification(data);
                product = $(`tr[data-id=${idProduct}]`)
                product.children().eq(4).text(name);
                product.children().eq(5).text(brand);
                product.children().eq(6).text(price);
                product.children().eq(7).text(decription);
            }
        })


    } else {
        let type = file.type;
        if (type != match[0] && type != match[1] && type != match[2] && type != match[3]) {
            alert("File không phải định dạng ảnh");
            return;
        }
        var form_data = new FormData();
        form_data.append('file', file);
        form_data.append('name', name);
        form_data.append('brand', brand);
        form_data.append('price', price);
        form_data.append('decription', decription);
        form_data.append('idProduct', idProduct);

        if (name == "") {
            alert("Thiếu tên sản phẩm");
            return;
        }
        if (brand == "") {
            alert("Thiếu hãng sản xuất");
            return;
        }
        if (price == "") {
            alert("Thiếu giá sản phẩm");
            return;
        }
        await $.ajax({
            url: 'editProduct.php',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'Json',
            data: form_data,

            success: async function(data) {
                await notification(data);
                product = $(`tr[data-id=${idProduct}]`);
                product.children().eq(4).text(name);
                product.children().eq(5).text(brand);
                product.children().eq(6).text(price);
                product.children().eq(7).text(decription);
                product.children().eq(8).children().attr("src", data[0].src);
            }
        })
    }
    $('#exampleModalCenter').modal('hide');
});
//? function show image when choose image file
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#uploadimg')
                .attr('src', e.target.result).width(200)
                .height(250);
            $('#uploadimg').css('display', 'block');

        };

        reader.readAsDataURL(input.files[0]);
    }
}
//? function add data product to database
$('#submit').click(async function() {
    let name = $('#nameProduct').val();
    let brand = $('#brandProduct').val();
    let price = $('#priceProduct').val();
    let decription = $('#decriptionProduct').val();
    let file = $('#pictureProduct').prop('files')[0] ? $('#pictureProduct').prop('files')[0] : "";
    let match = ["image/gif", "image/png", "image/jpg", "image/jpeg", "image/webp"];
    if (await file === "") {
        alert("File ảnh sản phẩm rỗng")
        return;
    }
    let type = file.type;
    if (type != match[0] && type != match[1] && type != match[2] && type != match[3] && type != match[4]) {
        alert("File không phải định dạng ảnh");
        return;
    }
    var form_data = new FormData();
    form_data.append('file', file);
    form_data.append('name', name);
    form_data.append('brand', brand);
    form_data.append('price', price);
    form_data.append('decription', decription);

    if (name == "") {
        alert("Thiếu tên sản phẩm");
        return;
    }
    if (brand == "") {
        alert("Thiếu hãng sản xuất");
        return;
    }
    if (price == "") {
        alert("Thiếu giá sản phẩm");
        return;
    }
    await $.ajax({
        url: 'addProductBe.php',
        type: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'Json',
        data: form_data,

        success: async function(data) {
            await notification(data);
            
        }
    })

});

// ? function show alert
notificationSuccess = function(message) {
    VanillaToasts.create({
        title: 'Thông báo',
        text: message,
        type: 'info', // success, info, warning, error   / optional parameter
        // icon: '/img/alert-icon.jpg', // optional parameter
        timeout: 6000 // hide after 5000ms, // optional parameter
    });
}
notificationWarning = function(message) {
    VanillaToasts.create({
        title: 'Thông báo',
        text: message,
        type: 'warning', // success, info, warning, error   / optional parameter
        // icon: '/img/alert-icon.jpg', // optional parameter
        timeout: 6000 // hide after 5000ms, // optional parameter
    });
}
notificationError = function(message) {
    VanillaToasts.create({
        title: 'Thông báo',
        text: message,
        type: 'error', // success, info, warning, error   / optional parameter
        // icon: '/img/alert-icon.jpg', // optional parameter
        timeout: 6000 // hide after 5000ms, // optional parameter
    });
}
notification = async function(data, type = 0) {
    if (type == 0) {
        if (data[0].error == false) {
            await notificationSuccess(data[0].message);
        } else {
            await notificationError(data[0].message)
        }
    } else {
        if (data[0].error == false) {
            await notificationWarning(data[0].message);
        } else {
            await notificationError(data[0].message)
        }
    }
}