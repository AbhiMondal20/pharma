<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include('header.php'); ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Medicine Sub Group</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">GROUP </a></li>
                                    <li class="breadcrumb-item active">Medicine Sub Group</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive mb-0" data-pattern="priority-columns">
                                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th data-priority="1">Sr.No.</th>
                                                    <th data-priority="3">Group Name</th>
                                                    <th data-priority="3">Item Name</th>
                                                    <th data-priority="1">Code</th>
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
                                                    if(mysqli_num_rows($res) > 0){
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
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" id="form" class="needs-validation was-validated ">
                                    <div class="mt-3">
                                        <label class="mb-1">Select Group <span style="color:red;">*</span></label>
                                        <select class="form-control select2" name="grp_id" required id="validationCustom03">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <?php
                                            $sql = "SELECT * FROM med_grp ORDER BY id DESC";
                                            $res = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($res) > 0){
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $id = $row['id'];
                                                    $grp_name = $row['grp_name'];
                                                    echo "<option value='$id'>$grp_name</option>"; // Corrected concatenation

                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label class="mb-1">Sub Group <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="25" name="subgrp_name"
                                        id="subgrp_name" required />
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label class="mb-1">Code</label>
                                        <?php
                                            $sql = "SELECT * FROM med_subgrp ORDER BY code DESC LIMIT 1";
                                            $res = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($res) > 0){
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
                                            <input type="text" class="form-control" maxlength="25" name="code" value="<?php echo $code_id; ?>" id="code" />


                                    </div>
                                    <div class="mt-3">
                                        <center>
                                            <input type="submit" class="btn btn-info waves-effect" value="OK" name="ok">
                                            <input type="button" class="btn btn-info waves-effect" value="NEW" onclick="myFunction()">
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
           $res  = mysqli_query($conn, $sql);
           if ($res) {
               showSuccessMessage("New Sub Group has been successfully added");
           }
       }
       ?>
       

       
    <script>
        function myFunction() {   
            document.getElementById("form").reset();

        }
    </script>

    <?php include('footer.php'); ?>

</body>

</html>