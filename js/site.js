/**
 * Created by gautier and Arthur on 20/11/15.
 */

 $(function() {
 	$('#studentsByCursus').click(function() {
 		$.get('html/studentsPerGroup.html', function(data) {
 			$('.content').html(data);
 		});    
 	});  
 });