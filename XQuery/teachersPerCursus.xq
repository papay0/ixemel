xquery version "3.0";

let $source := doc("../xml/project.xml")
let $cursus := distinct-values($source/project/subjects/subject/cursuss/cursus)
let $subjects := $source/project/subjects/subject
let $teachers := $source/project/teachers/teacher
    return
        <cursuss>{
            for $cursu in $cursus
                return 
                    <cursus name="{$cursu}">
                        <teachers>{
                            for $teacher in $teachers
                                for $subject in $teacher/subjects/subject
                                    let $subjectSelect := $subjects[@id = $subject/@id]
                                    for $cursuSubject in $subjectSelect/cursuss/cursus
                                    where $cursuSubject/text() = $cursu
                                    return $teacher
                        }
                        </teachers>
                    </cursus>
        }
        </cursuss>