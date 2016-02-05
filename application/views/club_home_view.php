<!-- registration -->
<div class="main-1">
    <div class="container">
        <div class="view_student">

            <div class="page-header">
                <span><h1 style="display: inline-block; padding-right: 15px;">Registered Students</h1>
<!--                    <a-->
<!--                        href="--><?php //echo base_url('club/add_students'); ?><!--">-->
                        <button type="button" class="btn btn-info btn-lg" onclick="window.location.href='<?php echo site_url('club/add_students') ?>'">Add students</button></span>

            </div>
<!--            <span><h2 style="display: inline-block; padding-right: 15px;">Registered Students</h2>-->
<!--                <a-->
<!--                    href="--><?php //echo base_url('club/add_students'); ?><!--">-->
<!--                    <button type="button" class="btn btn-info btn-lg">Add students</button>-->
<!--                    <button type="button" style="margin-top: 1em;-->
<!--color: #fff;-->
<!--font-size: 1.2em;-->
<!--padding: 0.7em 1em;-->
<!---webkit-appearance: none;-->
<!--text-transform: uppercase;-->
<!--display: inline-block;-->
<!---webkit-transition: all 0.3s ease-out;-->
<!---moz-transition: all 0.3s ease-out;-->
<!---ms-transition: all 0.3s ease-out;-->
<!---o-transition: all 0.3s ease-out;-->
<!--transition: all 0.3s ease-out;-->
<!--font-weight: 400;-->
<!--border: none;-->
<!--text-transform: uppercase;-->
<!--outline: none;-->
<!--cursor: pointer;-->
<!--/*width: 30%;*/-->
<!--background: #666666;-->
<!--border-radius: 0.3em;-->
<!---webkit-border-radius: 0.3em;-->
<!---o-border-radius: 0.3em;-->
<!---moz-border-radius: 0.3em;">Add-->
<!--                    </button>-->
<!--                </a> </span>-->

            <div class="table-responsive">
                <table class="table table-striped" >

                    <thead>
                    <tr>
                        <th>Sl No.</th>
                        <th>Name</th>
                        <th>School Name</th>
                        <th>Club Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Birth Star</th>
                        <th>Manage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($students)) {


                        foreach ($students as $row) {
                            $count = 1;
                            echo "<tr>";
                            echo "<td>{$count}</td>";
                            echo "<td>{$row['name']}</td>";
                            echo "<td>School Name</td>";
                            echo "<td>Club Name</td>";
                            echo "<td>{$row['address']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['contact']}</td>";
                            echo "<td>{$row['dob']}</td>";
                            echo "<td>{$row['gender']}</td>";
                            echo "<td>{$row['blood']}</td>";
                            echo "<td>{$row['birth_star']}</td>";
                            echo "<td>
<a style='text-decoration: none' href='" . site_url('club/student_edit/' . $row['id']) . "'><button type='button' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span>Edit</button></a>
<a style='text-decoration: none' href='" . site_url('club/student_delete/' . $row['id']) . "'><button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>Delete</button></a>
<a style='text-decoration: none' href='" . site_url('club/view_gallery/' . $row['id']) . "'><button type='button' class='btn btn-warning'><span class='glyphicon glyphicon-image'></span>View Gallery</button></a>
</td>";
                            echo "</tr>";

                            $count++;
                        }
                    } else {
                        echo "<tr><td style='text-align: center' colspan='11'>No students found..</td></tr>";
                    }
                    ?>

                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
            <!--            <div class="register-but">-->
            <!--                <form>-->
            <!--                    <input type="submit" value="submit">-->
            <!--                    <div class="clearfix"> </div>-->
            <!--                </form>-->
            <!--            </div>-->
        </div>
    </div>
</div>
<!-- registration -->
