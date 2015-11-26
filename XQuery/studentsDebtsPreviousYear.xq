xquery version "3.0";

let $students := /students/student
let $currentYear := 4
    return
        <students>{
            for $student in $students
                where $student/marks/studyYear[@year < $currentYear]/mark = 00
                return 
                    <student> {$student} </student>
                    
        }
        </students>