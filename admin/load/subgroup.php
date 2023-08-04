<?php
    $sql = "SELECT * FROM med_subgrp ORDER BY id DESC";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $grp_name = $row['grp_name'];
            echo "<option value='$id'>$grp_name</option>"; // Corrected concatenation

        }
    }
?>