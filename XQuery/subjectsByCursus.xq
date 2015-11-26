xquery version "3.0";

let $cursus := distinct-values(/subjects/subject/cursuss/cursus)
let $subjects := /subjects/subject
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