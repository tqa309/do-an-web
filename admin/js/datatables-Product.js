// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataProduct').removeAttr('width').DataTable({
        scrollCollapse: true,
        paging: true,
        lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
        ],
        columnDefs: [{
                width: "8%",
                targets: 0
            },
            {
                width: "4%",
                targets: 1
            },
            {
                width: "8%",
                targets: 4
            },
            {
                width: "8%",
                targets: 3
            },
            {
                width: "8%",
                targets: 4
            },
            {
                width: "15%",
                targets: 6
            }

        ],
        scroller: {
            rowHeight: "100px"
        },
        fixedColumns: true,
        language: {
            lengthMenu: "_MENU_ sản phẩm/trang",
            search: "Tìm kiếm",
            info: "Từ sản phẩm _START_ tới _END_ của _TOTAL_ sản phẩm"
        }
    });


})