$(document).ready(function() {
    //biến toàn cục
    var selectedRowData;
    var dataview;
    var selectedIndex;
    var datatable;
    var dataview;
    //khởi tạo datatable
   datatable =  new DataTable('#examplethongtinduan', {
        dom: 'Bfrtip',
        // buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        language: {
url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/vi.json',
},
columnDefs: [{ width: '50px', targets: 4 },
{ width: '50px', targets: 5 },
{ width: '50px', targets: 6 }]
    });
    //css hàng đã chọn
    // $('#example').on('click', 'tr', function() {
    //     $('tr.highlight').removeClass('highlight');
    //     // Thêm lớp highlight cho ô được click
    //     $(this).addClass('highlight');
    // })
});