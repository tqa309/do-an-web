
<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">Tý Mobile</h4>
                <p class="font-size-14 font-rale text-white-50">Nơi mang đến cho bạn những chiếc điện thoại tốt nhất với những mức giá tuyệt vời và chế độ hậu mãi tốt.</p>
            </div>
            <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Nhận tin mới</h4>
                <form class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Email *">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Đăng ký</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Thông tin thêm</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Về chúng tôi</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Thông tin vận chuyển</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Thông tin bảo mật</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Điều khoản &amp; điều kiện</a>
                </div>
            </div>
            <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Tài khoản</h4>
                <div class="d-flex flex-column flex-wrap">
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Giỏ hàng của tôi</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Lịch sử mua hàng</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Danh sách yêu thích</a>
                    <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Khuyến mãi hot</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright text-center bg-dark text-white py-2">
    <p class="font-rale font-size-14">Copyrights 2020 © Tý Mobile</p>
</div>
<!-- !start #footer -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Owl Carousel Js file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!-- Custom Javascript -->
<script src="index.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var url = window.location;
        var hrefArray = url.href.split('/');
        var path = '../' + hrefArray[hrefArray.length - 2];
        console.log(path);
        $('ul.nav a[href="'+ path +'"]').parent().addClass('active');
        $('ul.nav a').filter(function() {
             return this.href == path;
        }).parent().addClass('active');
    });
</script> 
</body></html>