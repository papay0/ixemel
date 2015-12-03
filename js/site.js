/**
 * Created by gautier and Arthur on 20/11/15.
 */

 $(function() {
 	$('#studentsByGroup').click(function() {
 		$.get('html/studentsPerGroup.html', function(data) {
 			// $('#main.container').html(data);
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
 			var numberOfSubjectsAtLeastOneDebt = 0;

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
 			$('#numberOfSubjectsAtLeastOneDebt').html(numberOfSubjectsAtLeastOneDebt+'<sup style="font-size: 20px">%</sup>');
 		}
 	}
 	); 
 });
