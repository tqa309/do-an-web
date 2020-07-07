const deleteProduct = async function(param) {
    let btn = $(param);
    let idProduct = btn.closest('tr').children().eq(1).text();
    productRow = btn.closest('tr').addClass('deleteProduct');

    await $.ajax({
        url: 'deleteProduct.php',
        type: 'POST',
        dataType: 'json',
        data: { idProduct: idProduct },
        success: function(data) {
            alert(data[0].message);
        }
    });
    $('.deleteProduct').fadeOut('500');
}

$('.edit-product').click(async function() {
    let product = $(this).closest('tr');
    let id = product.children().eq(1).text();
    let name = product.children().eq(2).text();
    let brand = product.children().eq(3).text();
    let price = product.children().eq(4).text();
    let decription = product.children().eq(5).text().trim(" ");
    console.log(product)

    $('#idProduct').val(id);
    $('#nameProduct').val(name);
    $('#brandProduct').val(brand);
    $('#priceProduct').val(parseFloat(price));
    $('#decriptionProduct').val(decription);



})

$('#updatebtn').click(async function() {
    let idProduct = $('#idProduct').val();
    let name = $('#nameProduct').val();
    let brand = $('#brandProduct').val();
    let price = $('#priceProduct').val();
    let decription = $('#decriptionProduct').val();
    let file = $('#pictureProduct').prop('files')[0] ? $('#pictureProduct').prop('files')[0] : "";
    let match = ["image/gif", "image/png", "image/jpg", "image/jpeg"];
    if (await file === "") {
        alert("File ảnh sản phẩm rỗng")
        return;
    }
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

        success: function(data) {
            alert(data[0].message)

        }
    })
});

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
$('#submit').click(async function() {
    let name = $('#nameProduct').val();
    let brand = $('#brandProduct').val();
    let price = $('#priceProduct').val();
    let decription = $('#decriptionProduct').val();
    let file = $('#pictureProduct').prop('files')[0] ? $('#pictureProduct').prop('files')[0] : "";
    let match = ["image/gif", "image/png", "image/jpg", "image/jpeg"];
    if (await file === "") {
        alert("File ảnh sản phẩm rỗng")
        return;
    }
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

        success: function(data) {
            alert(data[0].message);
        }
    })

});