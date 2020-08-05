@push('script')
    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();

    </script>
@endpush

<!-- Footer -->
<footer id="footer" class="pd-20">
    <div class="d-flex justify-content-between align-items-center">
        <div></div>
        <div>PT. Dobha Putra Salim <span id="year"></span></div>
    </div>
</footer>
