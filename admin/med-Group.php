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
                            <h4 class="mb-sm-0">Medicine Group and Medicine Sub Group</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">GROUP </a></li>
                                    <li class="breadcrumb-item active">Medicine Group and Medicine Sub Group</li>
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
                                        <table id="tech-companies-1" class="table">
                                            <thead>
                                                <tr>
                                                    <th data-priority="1">Sr.No.</th>
                                                    <th data-priority="3">Item Name</th>
                                                    <th data-priority="1">Code</th>
                                                    <th data-priority="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sno = 0;
                                                    $sql = "SELECT * FROM med_grp";
                                                    $res = mysqli_query($conn, $sql);
                                                    if(mysqli_num_rows($res) > 0){
                                                        while ($row = mysqli_fetch_assoc($res)) {
                                                            # code...
                                                            $sno = $sno + 1;
                                                            $grp_name = $row['grp_name'];
                                                            $code = $row['code'];
                                                            echo '<tr>
                                                            <td>'.$sno.'</td>
                                                            <td>'.$grp_name.'</td>
                                                            <td>'.$code.'</td>
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
                                <form action="" method="post" id="form">
                                    <div class="mt-3">
                                        <label class="mb-1">Group Name <span style="color:red;">*</span></label>
                                        <input type="text" class="form-control" maxlength="25" name="grp_name"
                                        id="grp_name" required />
                                    </div>
                                    
                                    <div class="mt-3">
                                        <label class="mb-1">Code</label>
                                        <input type="text" class="form-control" maxlength="25" name="code"
                                        id="code" />
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
    <script>
        function myFunction() {   
            document.getElementById("form").reset();

        }
    </script>

    <?php include('footer.php'); ?>

</body>

</html>