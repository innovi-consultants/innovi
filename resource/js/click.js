	$(document).ready(function(){
						  
	  $(".btn").click(function(){
	  	   var stu_id=$(this).closest('tr').find('td:eq(0)').html();
		   alert(stu_id);
			$(this).parents("td").html("审核通过");
			$(this).remove();
			
   });
});