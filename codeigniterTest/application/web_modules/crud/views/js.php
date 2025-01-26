<script>
            $.extend(true, $.fn.dataTable.defaults, {
                "language": {
                    "sProcessing": "กำลังดำเนินการ...",
                    "sLengthMenu": "แสดง _MENU_ แถว",
                    "sZeroRecords": "ไม่พบข้อมูล",
                    "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                    "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                    "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                    "sInfoPostFix": "",
                    "sSearch": "ค้นหา:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "เิริ่มต้น",
                        "sPrevious": "ก่อนหน้า",
                        "sNext": "ถัดไป",
                        "sLast": "สุดท้าย"
                    }
                },
                "lengthMenu": [
                    [10, 15, 20],
                    [10, 15, 20],
                ],
            });
            $('#myTable').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
            </script>

<!-- DataTable -->
<!-- Include jQuery (required by DataTables) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include the DataTables JS -->
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>