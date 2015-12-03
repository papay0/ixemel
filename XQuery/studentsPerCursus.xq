xquery version "3.0";

let $source := doc("../xml/project.xml")
let $cursus := distinct-values($source/project/students/student/cursus)
let $students := $source/project/students/student
    return
        <cursuss>{
            for $cursu in $cursus
                return 
                    <cursus name = "{$cursu}">
                        <students>{
                            for $student in $students
                            where $student/cursus = $cursu
                            return $student
                        }
                        </students>
                    </cursus>
        }
        </cursuss>
            