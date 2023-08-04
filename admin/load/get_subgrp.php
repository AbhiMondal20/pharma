
<?php
// load/get_subgrp.php
include('../../db_conn.php');

if (isset($_POST['subgrp_id']) && !empty($_POST['subgrp_id'])) {
    $selectedGroupId = $_POST['subgrp_id'];

    // Replace 'subgroup_table' with your actual subgroup table name
    $sql = "SELECT id, subgrp_name FROM med_subgrp WHERE grp_id = $selectedGroupId"; 
    $result = mysqli_query($conn, $sql);

    $subGroups = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $subGroups[] = array(
            'id' => $row['id'],
            'name' => $row['subgrp_name']
        );
    }

    echo json_encode($subGroups);
} else {
    echo json_encode(array()); // Return an empty JSON array if no subgroups are found
}
?>

