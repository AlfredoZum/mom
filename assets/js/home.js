/**
* @fileoverview funcionalidad del screen home
*
* @author Alfredo Zum
* @version 0.1
* @copyright OrvelSoft 2017
*/

var activityIS = false;
var installationIS = false;

$('#sliderModalGallery').attr('exist',false);
$('#sliderModalGallery2').attr('exist',false)

$('.btnCamp').click(function(){
	
	var url = URL_BASE + "home/getCampById";
	id = $(this).attr('id');
	
	$.ajax({
		type: "POST",
		url: url,
		dataType:'json',
		data: {  
			
			id: id
		},
		success: function(data){
			if(data.items.length > 0){
				item = data.items[0];
				$('#description').html(item.description);
				$('#observations').html(item.observations);
				var iframe = '<iframe id="videoIframe" width="560" height="315" src="' + item.video + '" frameborder="0" allowfullscreen></iframe>';
				$('#video').html(iframe);
				
				iframe
				$('#myModal').modal("show");
			}
			
		},
		error: function(data){
			alert("Error al conectarse vuelva a intentarlo");
		}
	});
	
	//
});

/******* tabs ******/

$('.tabsPanel').on('click', function (e) {
	var id = $(this).attr('attr_id');
	$('.tab-pane').removeClass('active');
	$('#' + id).addClass('active');
})


$('.btnMenu').on('click',function(){

	var section = $(this).attr('attr_id');
	
	var posicion = $('#' + section ).position();
	//alert(posicion.top)
	$('body, html').animate({
		scrollTop: posicion.top
	}, 1000);
	//$( document ).scrollTop( posicion.top );

});