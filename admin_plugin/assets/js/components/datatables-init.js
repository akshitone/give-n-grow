// Title: Demo code for jQuery Datatables
// Location: tables.data.html
// Dependency File(s):
// assets/vendor/datatables.net/js/jquery.dataTables.js
// assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js
// assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css
// -----------------------------------------------------------------------------

(function(window, document, $, undefined) {
  "use strict";
    $(function() {

      $('#bs4-table').DataTable({
        "aaSorting": []
      });
      $('#bs4-table1').DataTable({
        "aaSorting": []
      });
      $('#bs4-table2').DataTable({
        "aaSorting": []
      });

    });

})(window, document, window.jQuery);
