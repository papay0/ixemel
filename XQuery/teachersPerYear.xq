xquery version "3.0";

let $source := doc("../xml/project.xml")
let $teachers := $source/project/teachers/teacher
let $students := $source/project/students/student
let $years := distinct-values($source/project/students/student/year)
    return
        <years>{
            for $year in $years
                return
                    <year name="{$year}">
                        <teachers>{
                            for $student in $students
                            where $student/year = $year
                            return
                                for $teacher in $teachers
                                where $teacher/groups/group = $student/group
                                return $teacher
                        }
                        </teachers>
                    </year>
        }
        </years>