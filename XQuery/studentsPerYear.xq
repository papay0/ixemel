xquery version "3.0";

let $years := distinct-values(/students/student/year)
let $students := /students/student
    return
        <years>{
            for $year in $years
                return 
                    <year name="{$year}">
                    <students>{
                        for $student in $students
                        where $student/year = $year
                        return $student
                        }
                    </students>
                    </year>
        }
        </years>