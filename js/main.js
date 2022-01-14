$(document).ready(function ()
 {
	//console.log('working');
	$('#search').keyup(function()
	{
          var Search = $('#search').val();
          if (Search!="")
           {
            $.ajax(
            {
               url:'search.php',
               method:'POST',
               data:{search:Search},
               success:function(data)
               {
               	// console.log(data);
               	
               		$('#content').html(data);
               	
                 }
             })
           }
           else
           {
             $('#content').html('');
           }


              $(document).on('click','a',function(){

                $('#search').val($(this).text());
                $('#content').html('');

              })

	})

	

})