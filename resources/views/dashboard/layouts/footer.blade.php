<footer class="main-footer">
    <strong>Copyright &copy;
        <?php echo date("Y"); ?> <a href="/dashboard" class="text-success">Bilhikmah. All rights reserved.</a>
    </strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/lte/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/lte/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/lte/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/lte/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/lte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/lte/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/lte/plugins/moment/moment.min.js"></script>
<script src="/lte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/js/adminlte.js"></script>
<!-- AdminLTE dashboard -->
<script src="/lte/js/pages/dashboard.js"></script>
<!-- Lightbox -->
<script src="/home/js/lightbox.js"></script>
<!-- LazySizes -->
<script src="/plugins/lazysizes/lazysizes.min.js"></script>
<!-- DataTable -->
<script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
<script>
    $(document).ready(function() {
            $('#dataTable').DataTable();
        });
</script>
<!-- Script untuk Trix -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
<!-- Script untuk CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<!-- bs-custom-file-input -->
<script src="/lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Script untuk preview gambar -->
<script>
    function previewImage() {
            const gambar = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
</script>
<!-- Page specific script -->
<script>
    $(function() {
            bsCustomFileInput.init();
        });
</script>
</body>

</html>
