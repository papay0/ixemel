xquery version "3.0";

let $teachers := /teachers/teacher
let $subjects := /subjects/subject
    return
        <teachers>{
            for $teacher in $teachers
                return 
                    <teacher id="{$teacher/@id}">
                        {
                            for $element in $teacher/element()
                            where $element/name() != "subjects"
                            return $element
                        }
                        <subjects>{
                            for $subjectTeacher in $teacher/subjects/subject
                            return $subjects[@id = $subjectTeacher/@id]
                        }
                        </subjects>
                    </teacher>
        }
        </teachers>