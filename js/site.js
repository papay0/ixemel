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
 });