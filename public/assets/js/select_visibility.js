function funcion( th, thF ){
       var elementosArray = [ "rolname"];
       if( Number( th.options[ th.selectedIndex ].value ) == 3 )
           for(var i=0;i<elementosArray.length;i++)thF[    elementosArray[i] ].disabled = !thF[ elementosArray[i] ].disabled;
        
};

//$(document).ready( function ()
//{
//	$('#visibilityname').change(function()
//	{
//		var option = $(this).find('option:selected').val();
//		$('#rolname').val(option);
//	});
//});
//
//
//var visibility = $('#visibilityname').find(":selected").text();
//
