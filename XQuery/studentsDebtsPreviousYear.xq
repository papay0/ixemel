xquery version "3.0";

let $source := doc("../xml/project.xml")
let $students := $source/project/students/student
    return
        <students>{
            for $student in $students
                where $student/marks/studyYear[@year < $student/year]/mark = 00
                return 
                    <student> {$student} </student>
                    
        }
        </students>