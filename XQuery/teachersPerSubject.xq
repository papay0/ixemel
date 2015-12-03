xquery version "3.0";

let $teachers := /teachers/teacher
let $subjects := /subjects/subject
    return
        <subjects>{
            for $subject in $subjects
                return 
                    <subject id="{$subject/@id}">
                        {$subject/element()}
                        <teachers>{
                            for $teacher in $teachers
                                for $subjectTeacher in $teacher/subjects/subject
                                where $subjectTeacher/@id = $subject/@id
                                return $teacher
                        }
                        </teachers>
                    </subject>
        }
        </subjects>