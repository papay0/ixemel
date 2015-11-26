xquery version "3.0";

let $groups := distinct-values(/students/student/group)
let $students := /students/student
    return
        <groups>{
            for $group in $groups
                return 
                    <group name="{$group}">
                    <students>{
                        for $student in $students
                        where $student/group = $group
                        return $student
                        }
                    </students>
                    </group>
        }
        </groups>