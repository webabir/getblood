<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/lib/owlcarousel/owl.carousel.min.js"></script>
<!-- Js table -->
<script src="<?php echo base_url() ?>assets/vendors/js/jquery.dataTables.min.js"></script>
<!-- Js table -->
<!-- push js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js" integrity="sha512-eiqtDDb4GUVCSqOSOTz/s/eiU4B31GrdSb17aPAA4Lv/Cjc8o+hnDvuNkgXhSI5yHuDvYkuojMaQmrB5JB31XQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- push js -->
<script src="<?php echo base_url() ?>assets/vendors/js/cascading.js"></script>
<!-- Js ripple -->
<script src="<?php echo base_url() ?>assets/vendors/js/ripples.js"></script>
<!-- Template Javascript -->
<script src="<?php echo base_url() ?>assets/vendors/js/main.js"></script>
<!-- sweet alert -->
<script src="<?php echo base_url(); ?>assets/vendors/lib/sweetalert/js/sweetalert2.min.js"></script>


<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });



    var countries = [];

    function unselect() {
        $.each($(".dependent-selects__child option:selected"), function() {
            countries.push($(this).val());
            $(this).prop('selected', false);
        });
    }

    $("#id_parent").click(unselect);
</script>

<?php if (isset($_SESSION['username'])) { ?>

<?php } else { ?>
    <script type="text/javascript">
        $(window).on('load', function() {
            setTimeout(function() {
                $('#staticBackdrop').modal('show');
            }, 8000);
        });
    </script>
<?php } ?>

<script>
//     Push.create("Hello world!", {
//     body: "How's it hangin'?",
//     icon: '/icon.png',
//     timeout: 4000,
//     vibrate:[200, 100],
//     onClick: function () {
//         window.focus();
//         this.close();
//     }
// });



// auto delete
setInterval(myFunction,300000);
function myFunction(){
    $.ajax({
        url: "auto-delete-request",
        // success: function(data) {
        //     alert("sucess");
        // }
    });
    
}
       
</script>

</body>

</html>