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

    .table> :not(:last-child)> :last-child>* {
        border: none;
    }

    .table>thead {
        border-bottom: 1px solid;
    }

    .td-name {
        display: block;
        width: 190px;
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

                            <table id="tableID" class="table pt-5">
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
                                                <?php
                                                if ($row->facebook != null) {
                                                    echo '<a class="facebook-link fs-12 p-1 px-2" href="' . $row->facebook . '">Facebook</a>';
                                                } else {
                                                    echo '<a class="facebook-link bg-gray fs-12 p-1 px-2 " href="javascript:;">No Value</a>';
                                                }
                                                ?>
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
                                                    <a class="text-info" onclick="tblDetails()" href="javascript:;"><i class="far fa-eye"></i></a>
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
    $(document).ready(function() {
        $('#tableID').DataTable({
            initComplete: function() {
                this.api()
                    .columns()
                    .every(function() {
                        var column = this;
                        var select = $('<select><option value="">All</option></select>')
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
            paging: true,
            "language": {
                "paginate": {
                    "previous": "Prev"
                }
            }
        });
    });
    
    

    
</script>