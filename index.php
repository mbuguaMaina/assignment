 <?php
include("./model/assignments.php");
include("./model/courses.php");
include("./model/connection.php");
$assignment_id = filter_input(INPUT_POST, "assignment_id", FILTER_DEFAULT);
$course_name = filter_input(INPUT_POST, "course_name", FILTER_DEFAULT);
$desc = filter_input(INPUT_POST,"description", FILTER_DEFAULT);
  $course_id =
  $course_id =   filter_input(INPUT_POST, "course_id", FILTER_VALIDATE_INT)  ;

if(!$course_id){
    $course_id = filter_input(INPUT_GET, "course_id", FILTER_VALIDATE_INT);
    if(!$course_id){
      $course_id = "";
    }
}

$action =  
  filter_input(INPUT_POST, "action", FILTER_DEFAULT) ;
  if(!$action)
  {
   $action =  filter_input(INPUT_GET, "action", FILTER_DEFAULT) ;
    if(!$action)
    {
$action = "list_assignments";
    }
  }

switch ($action) {
  case 'list_courses':
      $courses = get_courses();
    include("./view/courses.php");
    break;
    case 'add_course':
      add_courses($course_name);
      header("Location: .?action=list_courses");
      break;
    case 'add_assignment':
      add_assignment($course_id,$desc);
      header("Location: .?action=list_assignments");
      break;
    case 'delete_assignment':
      delete_assignment($assignment_id);
      header("Location: .?action=list_assignments");
      break;  
      case 'delete_course':
      delete_courses($course_id);
      header("Location: .?action=list_courses");
      break;    
  default:
  $course_name = get_courses_name($course_id);
  $assignments  = get_assignments_by_course($course_id) ;
  $courses = get_courses();
include("./view/assignments.php");
   break;
}
 ?>