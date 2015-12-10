xquery version "3.0";

let $source := doc("../xml/project.xml")
let $students := $source/project/students/student
    return
        <students>{
            for $student in $students
                where some $s in $student/marks/studyYear[@year < $student/year]/mark/@mark satisfies xs:integer($s) eq 00
                return 
                    $student
                    
        }
        </students>