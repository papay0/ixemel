xquery version "3.0";

let $groups := distinct-values(/students/student/group)
let $students := /students/student
    return
    <?xml version="1.0" encoding="UTF-8"?>
    <?xml-stylesheet type="text/xsl" href="xsl/studentsPerGroup.xsl"?>
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