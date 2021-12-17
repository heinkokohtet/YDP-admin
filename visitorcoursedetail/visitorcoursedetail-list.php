<?php include('../config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor-Course List</title>
    <meta charset="utf-8">
</head>
<body>
    <table>
        <tr>
            <th>Visitor Name</th>
            <th>Course Name</th>
        </tr>

        <tr>

            <?php 

                /*$result = mysqli_query($conn, "SELECT * FROM courseteacherdetail ct, courses cs, teachers ts WHERE ct.course_id = cs.course_id and ct.teacher_id = ts.teacher_id");
*/
                
                $result = mysqli_query($conn, "SELECT * FROM visitorcoursedetail vc, visitors vs, courses cs WHERE vc.visitor_id = vs.visitor_id and vc.course_id = cs.course_id");

                /*$result = mysqli_query($conn, "SELECT * FROM visitorcoursedetail");*/

                while($row = mysqli_fetch_assoc($result)):

            ?>

            <td value="<?php echo $row['visitor_id'] ?>" name="visitor_id">
                <?php echo $row['visitor_name'] ?>
            </td>

            <td value="<?php echo $row['course_id'] ?>" name="course_id">
                <?php echo $row['course_name'] ?>
            </td>

            <td>
                <a href="visitorcoursedetail-delete.php?visitorcoursedetail_id=<?php echo $row['visitorcoursedetail_id'] ?>">
                    <button>Delete</button>
                </a>
            </td>
            <td>
                <a href="visitorcoursedetail-edit.php?visitorcoursedetail_id=<?php echo $row['visitorcoursedetail_id'] ?>">
                    <button>Edit</button>
                </a>
            </td>

        </tr>

        <?php endwhile; ?>

    </table>

    <a href="visitorcoursedetail-new.php">New Visitor-Course</a>

</body>
</html>