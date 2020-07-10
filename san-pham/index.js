function returnproduct(key, page) {
    $.ajax({
        type: "POST",
        url: "ProductList.php",
        dataType: "json",
        data: {
            key: key,
            page: page,
        },
        success: function(response) {
            console.log(response, response.length);
            render(response);

        }
    });
}

function render(response) {
    console.log(response, response.length);
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
<<<<<<< HEAD
            html += `<div class="price py-2 "><span style="font-size:20px;color:red;">${price}</span></div><button name="top_sale_submit" class="btn btn-warning font-size-12" type="submit">Add to Cart</button></div> </div> </div></div>`;
=======
            html += '<div class="rating text-warning font-size-12 "> <span><i class="fas fa-star "></i></span> <span><i class="fas fa-star "></i></span> <span><i class="fas fa-star "></i></span><span><i class="fas fa-star "></i></span><span><i class="far fa-star "></i></span> </div>';
            html += `<div class="price py-2 "><span style="font-size:20px;">${value.Price} đ</span></div></div> </div> </div></div>`;
>>>>>>> e0d0178efb75a02848fc145fa126e1d530b937ab
        }
    }
    $('#ProductList').html(html);
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
    page = Number(page) - 1;
    returnproduct(key, page);
    pagelist();

});
$('#s-btn').click(function() {
    var key = $('#key').val();
    const state = {}
    const title = ''
    const url = './?key=' + key;
    history.pushState(state, title, url)
    returnproduct(key, 0);
    pagelist();
});

function page(i) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var key = urlParams.get('key');
    const state = {};
    const title = '';
    if (key == null) {
        const url = './?page=' + i;
        history.pushState(state, title, url);
    } else {
        const url = './?key=' + key + '&page=' + i;
        history.pushState(state, title, url);
    }
    // history.pushState(state, title, url);
    const newqueryString = window.location.search;
    const newurlParams = new URLSearchParams(newqueryString);
    var page = newurlParams.get('page');
    if (page == null) { page = 1; };
    page = Number(page) - 1;
    if (key == null) { key = ""; };
    returnproduct(key, page);
    pagelist();
}

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

                    html += '<li class="page-item"><a class="page-link" style="height: 38px" href="#" onclick="page(';

                    html += Number(page) - 1;

                    html += `)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

                    <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>

                    <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>

                  </svg></a></li>`;

                }

                for (var i = 1; i <= response; i++) {

                    if (i == page) { html += '<li class="page-item"><a class="page-link" href="#" onclick="page(' + i + ')" style="color:#fff;background-color:#007bff;">' + i + '</a></li>'; } else { html += '<li class="page-item"><a class="page-link" href="#" onclick="page(' + i + ')">' + i + '</a></li>'; }

                }

                if (page != response) {

                    html += '<li class="page-item"><a class="page-link" style="height: 38px" href="#" onclick="page(';

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

var elem = document.getElementById("key");
elem.onkeyup = function(e) {
    if (e.keyCode == 13) {
        var key = $('#key').val();
        const state = {}
        const title = ''
        const url = './?key=' + key;
        history.pushState(state, title, url)
        returnproduct(key, 0);
        pagelist();
    }
}

$(document).ready(function() {

    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    $(".owl-carousel").owlCarousel({
        loop: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 5,
                nav: true
            }
        }
    });

    $(".button-group").on("click", "button", function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })
});