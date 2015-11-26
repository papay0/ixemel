xquery version "3.0";

let $students := /students/student
let $currentYear := 4
    return
        <students>{
            for $student in $students
                where (count($student/marks/studyYear[@year < $currentYear]/mark = 00) >= 2)
                return 
                    $student
        }
        </students>