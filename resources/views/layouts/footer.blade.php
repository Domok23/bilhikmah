{{-- Konten Utama --}}
</main>
<!-- FOOTER -->
<footer class="bg-green-light text-center py-3">
    Copyright &copy; <?php echo date("Y"); ?> <a href="/dashboard" class="text-success text-decoration-none"> {{ env('APP_NAME') }}. All rights reserved.</a>
</footer>
<script src="/home/js/bootstrap.bundle.min.js"></script>
<script src="/home/js/jquery.min.js"></script>
<script src="/home/js/myscript.js"></script>
<script src="/home/js/lightbox.js"></script>
<script src="https://cdn.userway.org/widget.js" data-account="T0y450VW3Y"></script>
<!-- LazySizes -->
<script src="/plugins/lazysizes/lazysizes.min.js"></script>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

</body>

</html>
