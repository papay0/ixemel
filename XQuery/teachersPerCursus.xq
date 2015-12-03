xquery version "3.0";

let $cursus := distinct-values(/subjects/subject/cursuss/cursus)
let $subjects := /subjects/subject
let $teachers := /teachers/teacher
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