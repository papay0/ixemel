xquery version "3.0";

let $source := doc("../xml/project.xml")
let $teachers := $source/project/teachers/teacher
let $subjects := $source/project/subjects/subject
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