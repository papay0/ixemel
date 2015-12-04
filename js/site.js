/**
 * Created by gautier and Arthur on 20/11/15.
 */

 $(function() {
 	$('#studentsByGroup').click(function() {
 		$.get('html/studentsPerGroup.html', function(data) {
 			$('.content').html(data);
 		});    
 	});  

 	$('#studentsByYear').click(function() {
 		$.get('html/studentsPerYear.html', function(data) {
 			$('.content').html(data);
 		});    
 	}); 

 	$('#studentsByCursus').click(function() {
 		$.get('html/studentsPerCursus.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#subjectsByCursus').click(function() {
 		$.get('html/subjectsPerCursus.html', function(data) {
 			$('.content').html(data);
 		});    
 	});

 	$('#subjectsByTeacher').click(function() {
 		$.get('html/subjectsPerTeacher.html', function(data) {
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
