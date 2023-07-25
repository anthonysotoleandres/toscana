$(document).ready(function() {
  $('#dataTable').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "info": true,
    "autoWidth": false,
    "pageLength": 10,
    "language": {
      "search": "Buscar",
      "paginate": {
        "previous": "Anterior",
        "next": "Siguiente"
      },
      "lengthMenu": "Mostrar _MENU_",
      "infoFiltered": "(filtrado de _MAX_ registros en total)",
      "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros"
    }
  });
});
