xquery version "3.0";

let $cursus := distinct-values(//students/student/cursus)
let $students := //students/student
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
            