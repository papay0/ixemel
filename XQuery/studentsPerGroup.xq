xquery version "3.0";

let $source := doc("../xml/project.xml")
let $groups := distinct-values($source/project/students/student/group)
let $students := $source/project/students/student
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