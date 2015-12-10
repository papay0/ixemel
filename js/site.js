/**
 * Created by gautier and Arthur on 20/11/15.
 */

 function changeText(a) {
 	$('.content-header>h1').text(a);
 }

 $(function() {
 	$('#studentsByGroup').click(function() {
 		changeText('Étudiants par groupe');
 		$.get('html/studentsPerGroup.html', function(data) {
 			$('.content').html(data);
 		});    
 	});  

 	$('#studentsByYear').click(function() {
 		changeText('Étudiants par année');
 		$.get('html/studentsPerYear.html', function(data) {
 			$('.content').html(data);
 		});    
 	}); 

 	$('#studentsByCursus').click(function() {
 		changeText('Étudiants par cursus');
 		$.get('html/studentsPerCursus.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#teachersByCursus').click(function() {
 		changeText('Professeurs par cursus');
 		$.get('html/teachersPerCursus.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#teachersByGroup').click(function() {
 		changeText('Professeurs par groupe');
 		$.get('html/teachersPerGroup.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#teachersBySubject').click(function() {
 		changeText('Professeurs par matière');
 		$.get('html/teachersPerSubject.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#teachersByYear').click(function() {
 		changeText('Professeurs par année');
 		$.get('html/teachersPerYear.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#subjectsByCursus').click(function() {
 		changeText('Matières par cursus');
 		$.get('html/subjectsPerCursus.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#subjectsByTeacher').click(function() {
 		changeText('Matières par professeur');
 		$.get('html/subjectsPerTeacher.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#studentsDebtsPreviousYear').click(function() {
 		$.get('html/studentsDebtsPreviousYear.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$.ajax( {
 		type: "GET",
 		url: "xml/project.xml",
 		dataType: "xml",
 		success: function(xml) { 
 			var numberOfStudents = 0;
 			var numberOfSubjects = 0;
 			var numberOfTeachers = 0;

 			$(xml).find('student').each( function(){ 
 				numberOfStudents++;
 			} );
 			$(xml).find('subjects:first').find('subject').each( function(){ 
 				numberOfSubjects++;
 			} );
 			$(xml).find('teacher').each( function(){ 
 				numberOfTeachers++;
 			} );

 			$('#numberOfStudents').text(numberOfStudents);
 			$('#numberOfSubjects').text(numberOfSubjects);
 			$('#numberOfTeachers').text(numberOfTeachers);
 		}
 	}); 

 	$.ajax( {
 		type: "GET",
 		url: "xml/components/studentsDebtsPreviousYear.xml",
 		dataType: "xml",
 		success: function(xml) { 
 			var numberOfStudentsAtLeastOneDebt = 0;
 			var pourcentageOfStudentsAtLeastOneDebt = 0;
 			var numberOfStudents = 
 			$(xml).find('student').each( function(){ 
 				numberOfStudentsAtLeastOneDebt++;
 			} );
 			pourcentageOfStudentsAtLeastOneDebt = (numberOfStudentsAtLeastOneDebt / ($('#numberOfStudents').text())*100);
 			pourcentageOfStudentsAtLeastOneDebt = pourcentageOfStudentsAtLeastOneDebt.toFixed(2);
 			$('#pourcentageOfStudentsAtLeastOneDebt').html(pourcentageOfStudentsAtLeastOneDebt+'<sup style="font-size: 20px">%</sup>');
 		}
 	}); 


 });
