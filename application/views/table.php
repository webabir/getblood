<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


<?php

$this->load->view('common/header');
$this->load->view('common/sidebar');
?>
<style>
    #myInput {
        padding: 3px 10px;
        border-radius: 3px;
        outline: none;
        border: none;
        margin-bottom: 10px;
    }

    [type="search"] {
        margin-left: 10px;
        padding: 0 10px;
        background: black;
        border: 1px solid #6c7293;
        color: #ffffff;
    }

    select {
        background: black;
        border: 1px solid #6c7293;
        color: #ffffff;
    }

    textarea {
        background: transparent;
        border: none;
        color: #ffffff;
        text-align: start;
    }

    .btn-info {
        color: #fff;
        background-color: #000000;
        border-color: #000000;
        border-left: 1px solid;
        padding: 3px 8px !important;
        border-radius: 0;
        margin-bottom: 1px;
    }

    tfoot {
        position: absolute;
        top: 15px;
        right: 18px;
    }

    tfoot:before {
        content: "District:";
        background: #d51c1c00;
        position: absolute;
        top: 0;
        left: -65px;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .table-desktop-view .table> :not(:last-child)> :last-child>* {
        border: none;
    }

    .table>thead {
        border-bottom: 1px solid;
    }

    .td-name {
        display: block;
        width: 190px;
    }

    /* mobile view */
    .table-mobile-view tbody tr {
        display: grid;
        background: #020410a6;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 5px 5px #ff000073;
    }

    .table-mobile-view tbody tr td {
        padding: 3px 0;
        margin-bottom: 4px;
        border-bottom: 1px solid #34384e;
    }



    .table-mobile-view .table> :not(:last-child)> :last-child>* {
        border-bottom: 1px solid #34384e !important;
    }

    .table-mobile-view tbody tr td:last-child,
    .table-mobile-view tbody tr td:first-child {
        border: none;
    }

    .dataTables_wrapper {
        padding-top: 15px;
    }

a.donor-profile-link {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    text-align: end;
    padding: 3px 7px;
    color: #0f4352;
    font-size: 18px;
}
</style>
<div id="clickId" class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Content Start -->
    <div class="content">
        <?php
        $this->load->view('common/topbar');
        ?>
        <!-- Blank Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">
                <div class="col-12">
                    <div class="bg-secondary rounded h-100 p-4  position-relative">
                        <div class="d-flex align-items-center mb-4 j-570-b ">
                            <h6 class="mb-0 fw-lighter me-5"><?php echo $table_title; ?></h6>
                        </div>
                        <!-- <input id="myInput" type="text" placeholder="Search.."> -->
                        <div class="table-responsive py-3">
                            <!-- table-mobile-view -->
                            <table class="table table-mobile-view pt-5" style="display: none;">
                                <thead>
                                    <tr class="d-none">
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Blood</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">District</th>
                                        <th scope="col">District</th>
                                        <th scope="col">status</th>
s
                                        <!-- <th scope="col">Edit</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($user_data->result() as $row) {
                                    ?>
                                        <tr class="position-relative md-ripples">
                                            <td class="d-flex"><a class="donor-profile-link" href="<?php echo base_url() ?>donor-profile/<?php echo $row->id; ?>"><i class="fas fa-info-circle"></i></a></td>
                                            <td class="d-flex"><span class="d-block fw-bold d-inline-block text-asmani" style="width: 90px;">Name :</span><?php echo $row->name; ?></td>
                                            <td class="d-flex text-primary"><span class="d-block fw-bold d-inline-block text-asmani" style="width: 90px;">Blood :</span><?php echo $row->group_name; ?></td>
                                            <td class="d-flex">
                                                <span class="d-block fw-bold d-inline-block text-asmani" style="width: 90px;">Phone :</span>
                                                <?php if ($row->status == 'Available' && isset($_SESSION['username'])) {
                                                    echo isset($row->number_security) ? $row->phone : '***********';
                                                } else {
                                                    echo '***********';
                                                }
                                                ?>
                                            </td>
                                            <td class="d-none"><?php echo $row->district; ?></td>
                                            <td class="d-flex"><span class="d-block fw-bold d-inline-block text-asmani" style="width: 90px;">District :</span><?php echo $row->district; ?></td>
                                            <td class="d-flex"><span class="d-block fw-bold d-inline-block text-asmani" style="width: 90px;">status :</span>
                                            <?php
                                                if ($row->status == null) {
                                                    echo "";
                                                } else {
                                                    if ($row->status == 'Available') {
                                                        echo "<span class='bg-success p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    } else {
                                                        echo "<span class='bg-gray p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    }
                                                }
                                                ?>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- table-mobile-view -->

                                                
                            <!-- table-desktop-view -->
                            <table class="table table-desktop-view pt-5" style="display: none;">
                                <thead>
                                    <tr style="background: #0c3a3a;">
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Blood</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Facebook</th>
                                        <th scope="col">District</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Details</th>

                                        <!-- <th scope="col">Edit</th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    foreach ($user_data->result() as $row) {
                                    ?>

                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td class="td-name"><?php echo $row->name; ?></td>
                                            <td><?php echo $row->age; ?></td>
                                            <td><?php echo $row->group_name; ?></td>
                                            <td>
                                                <?php if ($row->status == 'Available' && isset($_SESSION['username'])) {
                                                    echo isset($row->number_security) ? $row->phone : '***********';
                                                } else {
                                                    echo '***********';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if (isset($_SESSION['username'])) { ?>
                                                    <?php
                                                    if ($row->facebook != null) {
                                                        echo '<a class="facebook-link fs-12 p-1 px-2" href="' . $row->facebook . '">Facebook</a>';
                                                    } else {
                                                        echo '<a class="facebook-link bg-gray fs-12 p-1 px-2 " href="javascript:;">No Value</a>';
                                                    }
                                                    ?>
                                                <?php }else{?>
                                                    <?php
                                                    if ($row->facebook != null) {
                                                        echo '<a class="facebook-link fs-12 p-1 px-2" onclick="warning()" href="javascript:;">Facebook</a>';
                                                    } else {
                                                        echo '<a class="facebook-link bg-gray fs-12 p-1 px-2 " href="javascript:;">No Value</a>';
                                                    }
                                                    ?>
                                                <?php }?>
                                            </td>
                                            <td><?php echo $row->district; ?></td>
                                            <td>
                                                       
                                                <?php
                                                if ($row->status == null) {
                                                    echo "";
                                                } else {
                                                    if ($row->status == 'Available') {
                                                        echo "<span class='bg-success p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    } else {
                                                        echo "<span class='bg-gray p-1 px-2 rounded fs-10'>$row->status</span>";
                                                    }
                                                }
                                                ?>
                                                           
                                            </td>
                                            <td class="ps-4">
                                                <?php if (isset($_SESSION['username'])) { ?>
                                                    <a class="text-info  md-ripples px-3" href="<?php echo base_url() ?>donor-profile/<?php echo $row->id; ?>"><i class="far fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a class="text-info" onclick="warning()" href="javascript:;"><i class="far fa-eye"></i></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th class="d-none"></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- table-desktop-view -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blank End -->
        <?php $this->load->view('common/footer-bottom') ?>
    </div>
    <!-- Content End -->
</div>
<?php
$this->load->view('common/footer');

?>

<script>
    var x = document.querySelector(".table-mobile-view");
    var y = document.querySelector(".table-desktop-view");

    function myFunction() {
        if (window.matchMedia("(max-width: 500px)").matches) { // If media query matches
            x.setAttribute("id", "tableID");
            x.style.display = "inline-table";
        } else {
            y.setAttribute("id", "tableID");
            y.style.display = "inline-table";
        }
    }

    myFunction();


    
      $(document).ready(function() {
        $('#tableID').DataTable({
           
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var select = $('<select><option clas="distriuct" value="">All</option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function(d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
            paging: false,
       
            "language": {
                "paginate": {
                    "previous": "Prev"
                }
            }
        });
    });
    
    
    // login warning message

    function warning(){
        Swal.fire(
            'Error',
            'Please login to get service',
            'error'
        )
    }
    
</script>