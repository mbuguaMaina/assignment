<?php
require_once("./model/header.php");
?>
<div class="assignments_header assignments_container  ">

  <header>
    <h5 class="text-center fw-bolder text-white">Assignments Table</h5>
    <form action="." class="form" method="get">
      <div class="input-group">
        <input type="hidden" class="form-control" name="action" value="list_assignments">
        <select name="course_id" required class="form-select-sm rounded-start ">
          <option value="0">Select_Course/view all</option>
          <?php
          foreach ($courses as $course) {

            if ($course_id == $course['CourseID']) {

          ?>
              <option value="<?= $course['CourseID'] ?>" selected><?= $course['course_Name'] ?></option>

            <?php } else {  ?>

              <option value="<?= $course['CourseID'] ?>"><?= $course['course_Name'] ?></option>

          <?php }
          } ?>
        </select>

        <button type="submit" class="btn btn-primary btn-sm">GO</button>
      </div>
    </form>
  </header>
  <div class=" scroll">
    <?php
    if ($assignments) {

      foreach ($assignments as $assignment) {
    ?>
        <div class="assignment-content">
          <div>
            <p class="course_name "><?= $assignment['course_Name'] ?> <br> <span class="description"><?= $assignment['Description']  ?></span></p>
          </div>
          <hr>
          <div>
            <form action="." method="post" class="form-inline">
              <div class="form-group">

                <input type="hidden" name="action" value="delete_assignment">
                <input class="form-control " type="hidden" name="assignment_id" value="<?= $assignment['ID'] ?>">
              </div>

              <button type="submit" value="DELETE" class="btn btn-danger btn-sm"> <i class="fas fa-times"></i></button>
            </form>
          </div>
        </div>
      <?php
      }
    } else {
      if ($course_id) {
      ?>
        <p class="text-center text-info fw-bolder  fs-4">NO assignments exist for this course yet</p>
      <?php
      } else { ?>
        <p class="text-center text-info fw-bolder  fs-4 ">Select a course to show assignments!</p>

    <?php  }
    }
    ?>
  </div>
  <div class="add_assignment">
    <p class="lead text-center text-primary fw-bold">Add Assignment</p>
    <form action="." class=" form " method="post">
      <input type="hidden" name="action" value="add_assignment">



      <div class="form__group">
        <div class="select "> <select name="course_id" class=" form-select rounded-0" required>
            <option value="">please select a course</option>
            <?php
            foreach ($courses as $course) { ?>
              <option value="<?= $course['CourseID'] ?>"> <?= $course['course_Name'] ?></option>
            <?php }
            ?>
          </select>
          <div class=" input-group ">
            <input type="text" name="description" placeholder="add assignment description" class=" form-control rounded-0 zero_m" required>
          </div>
        </div>
        <button class="btn btn-primary "><i class="fas fa-plus "></i></button>
      </div>

    </form>
  </div>
  <p class="text-center text-blue"><a href=".?action=list_courses">Add/Edit Assignment</a>
   <div class="progress-bar progress-bar-striped" style="width: 64%;">
      
   </div></p> <?php
                                                                                                require_once("./model/footer.php");
                                                                                                ?>
