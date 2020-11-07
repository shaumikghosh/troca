<footer class="t-footer text-dark position-relative py-3 mw-100 t-header-light shadow">
    <div class="d-flex justify-content-sm-between align-items-center">
        <p>Time: <span id="hour"></span>:<span id="minute"></span> <span id="dn"></span> | Date: <span id="month"></span>-<span id="day"></span>-<span id="year"></span></p>
        <p>Copyright © 2020 </p>
    </div>
    <!-- /.t-header-content-wrapper -->
</footer>

<script>
    $(document).ready(function() {
        var dt = new Date();

        setInterval(()=>{
            var dt = new Date();
            $('#hour').text(dt.getHours());
            $('#minute').text(dt.getMinutes());

            var ampm = ($('#hour').text(dt.getHours()) >= 12) ? "AM" : "PM";
            $('#dn').text(ampm);
        });

        $('#year').html(dt.getFullYear());
        $('#month').text(dt.getMonth());

        var day = dt.getDate();
        var month = dt.getMonth();

        if (month < 9) {
            $('#month').text('0'+dt.getMonth());
        }else{
            $('#month').text(dt.getMonth());
        }

        if (day < 9) {
            $('#day').text('0'+dt.getDate());
        }else{
            $('#day').text(dt.getDate());
        }

    })
</script>
