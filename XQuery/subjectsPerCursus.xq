xquery version "3.0";

let $source := doc("../xml/project.xml")
let $cursus := distinct-values($source/project/subjects/subject/cursuss/cursus)
let $subjects := $source/project/subjects/subject
    return
        <cursuss>{
            for $cursu in $cursus
                return 
                    <cursus name="{$cursu}">
                        <subjects>{
                            for $subject in $subjects
                                for $subjectOk in $subject[cursuss/cursus/text() = $cursu]
                                return
                                    <subject id="{$subjectOk/@id}"> {
                                        for $element in $subjectOk/element()
                                        return $element[name() != "cursuss"]   
                                    }
                                    </subject>
                        }
                        </subjects>
                    </cursus>
        }
        </cursuss>