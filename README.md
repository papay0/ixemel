 - To generate project.xml : xmllint --xinclude xml/build_project.xml > xml/project.xml ; xmllint --schema xsd/project.xsd xml/project.xml

 - To generate a html file from a xml and xsl files : xsltproc xsl/nameFile.xsl xml/nameFile.xml | tail -n 1 > html/nameFile.html
