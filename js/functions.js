$(function()
{
	$("#progress_bar").hide();
	$("#view_holder_results").hide();
	$("#lavado_holder_results").hide();
	$("#paint_holder_results").hide();
	$("#process_wash").hide();
	$("#process_paint").hide();
	$("#alert_warning").hide();
	$("#ver_ar").on("click", function(){
		let service_type = $("#service_group option:selected").html();
		let vehicle_type = $("#vehicle_type option:selected").html();
		if(service_type != 'Seleccionar' && vehicle_type != 'Seleccionar')
		{
			$("#alert_warning").hide();
			switch(service_type)
			{
				case 'Brillado':
					$("#progress_bar").show().delay(1000).fadeOut("slow").promise().done(function(){
						$("#view_holder_results").show();
					});
					$("#paint_holder_results").hide();
					$("#lavado_holder_results").hide();
					break;
				case 'Lavado':
					$("#process_wash").show().delay(1000).fadeOut("slow").promise().done(function(){
						$("#lavado_holder_results").show();
					});
						$("#view_holder_results").hide();
						$("#paint_holder_results").hide();
					break;
				case 'Pintura':
					$("#process_paint").show().delay(1000).fadeOut("slow").promise().done(function(){
						$("#paint_holder_results").show();
					});
						$("#lavado_holder_results").hide();
						$("#view_holder_results").hide();
					break;
			}
		} else {
			$("#alert_warning").show();
		}
	});
});