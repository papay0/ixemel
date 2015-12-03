xquery version "3.0";

let $source := doc("../xml/project.xml")
let $students := $source/project/students/student
    return
        <students>{
            for $student in $students
                where (count($student/marks/studyYear[@year < $student/year]/mark = 00) = 1) and (count($student/marks/studyYear[@year = $student/year]/mark = 00) = 0)
                return 
                    $student
        }
        </students>