<script src="<?= public_url('js/bootstrap/jquery-3.6.0.min.js') ?>"></script>
<script src="<?= public_url('js/bootstrap/popper.min.js') ?>"></script>
<script src="<?= public_url('js/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= public_url('js/tail.select.min.js') ?>"></script>
<script src="<?= public_url('js/index.js') ?>"></script>
</body>

</html>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $(() => {
        $("input[name=search]").keyup(function() {
            let value = $(this).val();
            let subject = "value=" + value;
            $.ajax({
                type: "POST",
                url: "<?= public_url('php/ajax.php') ?>",
                data: subject,
                success: function(data) {
                    $('.result').html(data)
                }
            })
        })
    })
    tail.select(".select-search");
    
</script>