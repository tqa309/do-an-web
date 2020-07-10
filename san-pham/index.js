function pagelist() {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var page = urlParams.get('page');
    var key = urlParams.get('key');
    if (key == null) { key = ""; };
    if (page == null) { page = 1; };
    $.ajax({
        type: "POST",
        url: "page.php",
        dataType: "json",
        data: { key: key },
        success: function(response) {
            html = "";
            if (Number(response) > 1) {
                if (page != 1 && page != null) {
                    html += '<li class="page-item"><a class="page-link" style="height: 38px" onclick="returnProduct(' + null + ',' ;
                    html += Number(page) - 1;
                    html += `)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg></a></li>`;
                }
                for (var i = 1; i <= response; i++) {
                    if (i == page) { html += '<li class="page-item"><a class="page-link" id="page-active" onclick="returnProduct(' + null + ','  + i + ')" style="color:#fff;background-color:#007bff;">' + i + '</a></li>'; } else { html += '<li class="page-item"><a class="page-link" onclick="returnProduct(' + null + ','  + i + ')">' + i + '</a></li>'; }
                }
                if (page != response) {
                    html += '<li class="page-item"><a class="page-link" style="height: 38px" onclick="returnProduct(' + null + ',' ;
                    html += Number(page) + 1;
                    html += `)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                    </a></li>`;
                }
            }
            $('#Page').html(html);
        }
    });
}
    
function returnProduct(key, page) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var key = urlParams.get('key');
    const state = {};
    const title = '';
    var formData = $('#filter').serialize();
    if (key == null) { key = $('#key').text(); }
    formData += '&key=' + key;
    formData += '&page=' + page;
    history.pushState(state, title, './?'+formData);
    const newqueryString = window.location.search;
    const newurlParams = new URLSearchParams(newqueryString);
    var page = newurlParams.get('page');
    if (page == null) { page = 1; };
    page = Number(page) - 1;
    $.ajax({
        type: 'post',
        data: {
            key: key,
            page: page,
            orderby: $('#orderby').val()
        },
        url: 'ProductList.php',
        dataType: 'json',
        success: function(response) {
            var html = "";
            if (response.length == 0) {
                html += `<span style = "margin: auto;">Không có Sản phẩm phù hợp</span>`;
            } else {
                for (value of response) {
                    let price = Number(value.Price).toLocaleString('de-DE', {
                        style: 'currency',
                        currency: 'VND',
                    });
                    html += `<div class="col-lg-3 col-md-4 col-sm-6" >`;
                    html += '<div class = "item py-2" style = "margin: auto; max-width: 250px;margin-bottom:20px;margin-top:0px; ">';
                    html += '<div class = "product font-rale ">';
                    html += `<a href="../chi-tiet-san-pham/?id=${value.ID}"><img src="../${value.img} " alt="${value.Name}" class="img-fluid " onMouseOver="this.style='transform:scale(1.15,1.15)'" onMouseOut="this.style='transform:scale(1,1)'"></a>`;
                    html += `<div class="text-center " > <h6 style="margin-top: 25px;">${value.Name}</h6>`;
                    html += `<div class="price py-2 "><span style="font-size:20px;color:red;">${price}</span></div><button name="top_sale_submit" class="btn btn-warning font-size-12" type="submit">Add to Cart</button></div> </div> </div></div>`;
                }
            }
            $('#ProductList').html(html);
        }
    })
    pagelist();
}

$(document).ready(function() {
    var key = "";
    var key = $('#key').val();
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var page = urlParams.get('page');
    var key = urlParams.get('key');
    if (page == null) { page = 1; };
    if (key == null) { key = ""; };
    page = Number(page);
    returnProduct(key, page);

    $('#orderby').change(function() {
        returnProduct(null, 1);
    });
});


