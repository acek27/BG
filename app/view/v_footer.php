
<script src="<?php echo JS_URL; ?>/jquery.js"></script>
<script src="<?php echo JS_URL; ?>/bootstrap.min.js"></script>
<script src="<?php echo JS_URL; ?>/jquery.prettyPhoto.js"></script>
<script src="<?php echo JS_URL; ?>/jquery.isotope.min.js"></script>
<script src="<?php echo JS_URL; ?>/main.js"></script>
<script src="<?php echo JS_URL; ?>/wow.min.js"></script>
<script src="<?php echo JS_URL; ?>/jquery-1.12.4.js"></script>
<script src="<?php echo JS_URL; ?>/jquery-ui.js"></script>

<!---->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
<!--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script type="text/javascript">
    $('#datepicker').datepicker({
//        changeMonth: true,
//        changeYear: true,
        dateFormat: "yy-mm-dd"
    });

    $(document).ready(function () {
        $('#jenis').change(function () {
            var id = $(this).val();
            $.ajax({
                url: "getUkuran/" + id,
                type: "GET",
                success: function (data) {
                    $('#ukuran').html('<option>Pilih Ukuran Kayu</option>' + data);
                    $('#ukuran').removeAttr('disabled');
                }
            });
        });
    });
</script>

</body>
</html>