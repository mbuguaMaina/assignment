<? require_once("./model/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">
  <link rel="stylesheet" href="./bst/bootstrap.min.css">
  <link rel="stylesheet" href="./css fonts/all.min.css">
  <title>Assignment Tracker</title>
</head>
<body>
  


<div class=" courses_container container d-flex flex-column justify-content-center align-items-center   ">
  <div>
    <?php
    if ($courses) { ?>
      <table class="table-striped table-hover">
        <thead>
          <tr>

            <h1 class=" fw-bold fs-2 text-primary text-decoration-underline text-center text ">Courses</h1>

          </tr>
        </thead>

        <?php foreach ($courses as $course) { ?>
          <tbody>
            <tr>

              <div class="row_item p-1 mt-0 mb-1 bg-info  ">
                <?= '<p class="text-white fw-bold text-uppercase mb-0  ">' . $course["course_Name"] . '</p>' ?>
                <div class="remove">
                  <form action="." method="post">
                    <input type="hidden" name="action" value="delete_course">
                    <input type="hidden" name="course_id" value="<?= $course['CourseID'] ?>">
                    <button type="submit" value="DELETE" class="btn btn-sm btn-danger"> <i class="fas fa-times"></i> </button>
                  </form>
                </div>

              <?php } ?>

              </div>
              <hr>

            </tr>
  </div>
<?php } else {
      echo "No courses Exists yet";
    }
?>
</div>
</tbody>
</table>
<div class="">
  <h1 class="fw-bold text-primary">Add Course</h1>
  <form action="." method="post" class="form">
    <div class="input-group ">
      <input type="hidden" name="action" value="add_course" class="form-control-lg">
      <input type="text" name="course_name" placeholder="add a course" required>
      <input type="submit" class="btn btn-primary btn-sm">
    </div>
  </form>

</div>
<p class="text-center text-blue"><a href=".">View &amp; Add Assignment</a> </p>
</div>
<?php
require_once("./model/footer.php");
?>


<? require_once("./model/footer.php"); ?>