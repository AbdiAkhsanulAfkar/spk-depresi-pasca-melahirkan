<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.
            All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                class="ti-heart text-danger ml-1"></i></span>
    </div>
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base_url('assets/'); ?>admin/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url('assets/'); ?>admin/vendors/chart.js/Chart.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url('assets/'); ?>admin/js/off-canvas.js"></script>
<script src="<?= base_url('assets/'); ?>admin/js/hoverable-collapse.js"></script>
<script src="<?= base_url('assets/'); ?>admin/js/template.js"></script>
<script src="<?= base_url('assets/'); ?>admin/js/settings.js"></script>
<script src="<?= base_url('assets/'); ?>admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets/'); ?>admin/js/dashboard.js"></script>
<script src="<?= base_url('assets/'); ?>admin/js/chart.js"></script>
<!-- End custom js for this page-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.4.1/js/dataTables.dateTime.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>	
<script src="<?= base_url('assets/'); ?>/admin/flashscript.js"></script>

<!-- <script type="text/javascript">
  $(document).ready(function() {
    var table = $('#example').DataTable({
      dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
      lengthChange: false,
      buttons: [{
          extend: "pageLength",
          className: "btn-primary"
        },
        { extend: 'spacer'},
        {
          extend: 'excel',
          text: 'Export EXCEL',
          className: "btn-primary"
        }
      ],
      initComplete: function() {

        this.api().buttons().container()
          .appendTo('#example_wrapper .col-sm-6:eq(0)');
        $(".btn-primary").removeClass("btn-secondary");
      }
    });
  });
</script> -->

<script>
var minDate, maxDate;

// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        var min = minDate.val();
        var max = maxDate.val();
        var date = new Date(data[6]);

        if (
            (min === null && max === null) ||
            (min === null && date <= max) ||
            (min <= date && max === null) ||
            (min <= date && date <= max)
        ) {
            return true;
        }
        return false;
    }
);

$(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
        format: 'MMMM D YYYY'
    });
    maxDate = new DateTime($('#max'), {
        format: 'MMMM D YYYY'
    });

    var table = $('#example').DataTable({
        dom: "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        lengthChange: false,
        buttons: [{
                extend: "pageLength",
                className: "btn-primary"
            },
            {
                extend: 'spacer'
            },
            {
                extend: 'excel',
                text: 'Export EXCEL',
                className: "btn-primary"
            }
        ],
        initComplete: function() {

            this.api().buttons().container()
                .appendTo('#example_wrapper .col-sm-6:eq(0)');
            $(".btn-primary").removeClass("btn-secondary");
        }
    });

    // Refilter the table
    $('#min, #max').on('change', function() {
        table.draw();
    });
});
</script>

<script>
$(function() {
    //get the bar chart canvas
    var cData = JSON.parse('<?php echo $usia; ?>');
    var ctx = $("#chart-usia");

    //bar chart data
    var data = {
        labels: cData.usia,
        datasets: [{
            label: 'Total',
            data: cData.count,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
            fill: 3,
        }]
    };

    //options
    var options = {
        responsive: true,
        title: {
            position: "top",
            text: "Monthly Registered Users Count",
            fontSize: 18,
            fontColor: "#111"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    userCallback: function(label, index, labels) {
                        if (Math.floor(label) === label) {
                            return label;
                        }

                    },
                }
            }],
        },

    };

    var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
    });

});
</script>
<script>
$(function() {
    //get the bar chart canvas
    var cData = JSON.parse('<?php echo $alamat; ?>');
    var ctx = $("#chart-alamat");

    //bar chart data
    var data = {
        labels: cData.alamat,
        datasets: [{
            label: 'Total',
            data: cData.count,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    //options
    var options = {
        responsive: true,
        title: {

            position: "top",
            text: "Monthly Registered Users Count",
            fontSize: 18,
            fontColor: "#111"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    userCallback: function(label, index, labels) {
                        if (Math.floor(label) === label) {
                            return label;
                        }

                    },
                }
            }],
        },

    };

    var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
    });

});
</script>

<script>
$(function() {
    //get the bar chart canvas
    var cData = JSON.parse('<?php echo $dpr; ?>');
    var ctx = $("#chart-depresi");

    //bar chart data
    var data = {
        labels: cData.depresi,
        datasets: [{
            label: 'Total',
            data: cData.count,
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    //options
    var options = {
        responsive: true,
        title: {

            position: "top",
            text: "Monthly Registered Users Count",
            fontSize: 18,
            fontColor: "#111"
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    userCallback: function(label, index, labels) {
                        if (Math.floor(label) === label) {
                            return label;
                        }

                    },
                }
            }],
        },

    };

    var chart1 = new Chart(ctx, {
        type: "bar",
        data: data,
        options: options
    });

});
</script>
</body>

</html>