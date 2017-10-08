(function( $ ) {
$( document ).ready(function(){
	var target_id;

	function loadXMLDoc(target_id)
	{
		var xmlhttp;
		if ( window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest();}
		else { xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");}

		xmlhttp.onreadystatechange=function()
		{
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		    {
		    	target_id = xmlhttp.responseText;
		   		$('#result_fb').text(target_id);
		    }
		}
		
		xmlhttp.open("GET","/wp-content/plugins/sem_fb_info/admin/class-sem_fb_info-admin.php?target_id="+target_id,true);
		xmlhttp.send();
	}

	$('#get_the_fb').click(function(){
		
		target_id = $('#target_id').val();
		loadXMLDoc(target_id);
	})

});
})( jQuery );