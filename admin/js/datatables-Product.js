// Call the dataTables jQuery plugin
$(document).ready(function() {
    $('#dataProduct').removeAttr('width').DataTable({
            scrollCollapse: false,
            paging: true,
            lengthMenu: [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            columnDefs: [
                { width: "50%", targets: 0 }
            ]
        ],
        scroller: {
            rowHeight: "100px"
        },
        fixedColumns: false,
        language: {
            lengthMenu: "_MENU_ sản phẩm/trang",
            search: "Tìm kiếm",
            info: "Từ sản phẩm _START_ tới _END_ của _TOTAL_ sản phẩm"
        }
    });


})