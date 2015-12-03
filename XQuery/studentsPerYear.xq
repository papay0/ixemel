xquery version "3.0";

let $source := doc("../xml/project.xml")
let $years := distinct-values($source/project/students/student/year)
let $students := $source/project/students/student
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