xquery version "3.0";

let $source := doc("../xml/project.xml")
let $students := $source/project/students/student
    return
        <students>{
            for $student in $students
                where (every $s in $student/marks/studyYear[@year < $student/year]/mark/@mark satisfies xs:integer($s) ne 00) and (some $st in $student/marks/studyYear[@year = $student/year]/mark/@mark satisfies xs:integer($st) eq 00)
                return 
                    $student
        }
        </students> 