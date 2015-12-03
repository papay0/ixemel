xquery version "3.0";

let $source := doc("../xml/project.xml")
let $teachers := $source/project/teachers/teacher
let $groups := distinct-values($teachers/groups/group)
    return
        <groups>{
            for $group in $groups
                return
                    <group name="{$group}">
                        <teachers>{
                            for $teacher in $teachers
                                where $teacher/groups/group = $group
                                return $teacher
                        }
                        </teachers>
                    </group>
        }
        </groups>