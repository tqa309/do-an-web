// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataProduct').removeAttr('width').DataTable( {
       
        scrollCollapse: true,
        paging:         true,
        columnDefs: [
            { width: "8%", targets: 0 },
            { width: "4%", targets: 1 },
            { width: "8%", targets: 4 },
            { width: "8%", targets: 3 },
            { width: "8%", targets: 4 },

          	{ width: "15%", targets: 6 }
           
        ],
         scroller: {
        rowHeight: "100px"
    },
        fixedColumns: true
    } );


})