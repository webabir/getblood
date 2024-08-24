<!-- error number used -->
<?php
$message = $this->session->flashdata('error');
if ($message) { ?>

    <script>
        Swal.fire(
            'Error',
            '<?php echo $message ?>',
            'error'
        )
    </script>

<?php } ?>


<!-- add  Successfully -->

<?php
$message = $this->session->flashdata('success');
if ($message) { ?>

    <script>
        Swal.fire(
            'Success',
            '<?php echo $message ?>',
            'success'
        )
    </script>

<?php } ?>