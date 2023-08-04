<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Medicine Master</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">GROUP </a></li>
                                    <li class="breadcrumb-item active">Medicine Master</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th data-priority="1">Sr.No.</th>
                                                    <th data-priority="3">Item Name</th>
                                                    <th data-priority="3">HSN Code</th>
                                                    <th data-priority="1">Item Code</th>
                                                    <th data-priority="1">Type</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sno = 0;
                                                $sql = "SELECT med_subgrp.id AS id, med_subgrp.subgrp_name as subgrp_name, med_subgrp.code AS code, med_grp.grp_name AS grp_name FROM med_subgrp
                                                    INNER JOIN med_grp ON med_grp.id = med_subgrp.grp_id
                                                    ORDER BY med_subgrp.id DESC";
                                                $res = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                        $id = $row['id'];
                                                        $sno = $sno + 1;
                                                        $subgrp_name = $row['subgrp_name'];
                                                        $code = $row['code'];

                                                        $grp_name = $row['grp_name'];
                                                        echo '<tr>
                                                                    <td>' . $sno . '</td>
                                                                    <td>' . $grp_name . '</td>
                                                                    <td>' . $subgrp_name . '</td>
                                                                    <td>' . $code . '</td>
                                                                    <td>' . $code . '</td>
                                                                    <td>
                                                                        <a href="" class="btn btn-sm btn-primary"><i class="mdi mdi-content-save-edit"></i></a>
                                                                        <a href="" class="btn btn-sm btn-danger"><i class="mdi mdi-delete"></i></a>
                                                                    </td>
                                                                  </tr>';
                                                    }

                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <!-- Add Group -->
                    <!-- style="max-height:32rem; overflow: auto;" -->
                    <div class="col-12 col-md-12 col-lg-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" id="form" class="needs-validation was-validated ">
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Select Group <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-select select2" name="grp_id" required aria-label="Default select example">
                                                <option selected="" disabled="" value="">Choose...</option>
                                                <?php
                                                $sql = "SELECT * FROM med_grp ORDER BY id DESC";
                                                $res = mysqli_query($conn, $sql);
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_assoc($res)) {
                                                        $id = $row['id'];
                                                        $grp_name = $row['grp_name'];
                                                        echo "<option value='$id'>$grp_name</option>"; // Corrected concatenation
                                                
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Select Sub Group <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <select class="form-select select2" name="subgrp_id" required aria-label="Default select example">
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">item Name <span
                                                style="color:red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" maxlength="25" name="item_name"
                                                required />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Code</label>
                                        <?php
                                        $sql = "SELECT * FROM med_subgrp ORDER BY code DESC LIMIT 1";
                                        $res = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($res) > 0) {
                                            $row = mysqli_fetch_assoc($res);
                                            $last_id = $row["code"];

                                            if ($last_id == "") {
                                                $code_id = "001";
                                            } else {
                                                $code_id = intval($last_id) + 1;
                                                $code_id = str_pad($code_id, 3, '0', STR_PAD_LEFT); // Add leading zeros
                                            }
                                        } else {
                                            $code_id = "001";
                                        }
                                        ?>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" maxlength="25" name="item_code"
                                                value="<?php echo $code_id; ?>" id="code" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">HSN Code </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" maxlength="25" name="hsn_code" />
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Presentation</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" maxlength="25" name="prsn" />
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">VED </label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" maxlength="25" name="ved" />
                                        </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" id="switch7" switch="info" checked value="1" />
                                            <label class="col-sm-2 col-form-label" for="switch7" data-on-label="Active"
                                                data-off-label="Deactive"></label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <center>

                                            <input class="form-check-input mb-3" type="checkbox" id="formCheck1">
                                            <label class="form-check-label" for="formCheck1" value="0" name="high_risk">
                                                High Risk
                                            </label>
                                            <input class="form-check-input" type="checkbox" id="formCheck2" value="0"
                                                name="point_earn">
                                            <label class="form-check-label" for="formCheck2">
                                                Point Earn
                                            </label>
                                        </center>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-sm-2 col-form-label">Instruction </label>
                                        <div class="col-sm-10">
                                            <textarea rows="3" class="form-control" maxlength="25"
                                                name="inst"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <center>
                                            <input type="submit" class="btn btn-info waves-effect" value="OK" name="ok">
                                            <input type="button" class="btn btn-info waves-effect" value="NEW"
                                                onclick="myFunction()">
                                        </center>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </div>


    <?php
    if (isset($_POST['ok'])) {
        $grp_id = $_POST['grp_id'];
        $subgrp_name = $_POST['subgrp_name'];
        $code = $_POST['code'];
        $sql = "INSERT INTO `med_subgrp`(`grp_id`,`subgrp_name`, `code`, `added_by`) VALUES ('$grp_id','$subgrp_name','$code','admin')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            showSuccessMessage("New Master has been successfully added");
        }
    }
    ?>



    <script>
        function myFunction() {
            document.getElementById("form").reset();

        }
    </script>

    <?php include 'footer.php'; ?>

</body>

</html>