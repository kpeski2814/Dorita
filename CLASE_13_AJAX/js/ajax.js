$(function(){


	$("select#departamento").on("change",function(){

		//esto representa el contexto actual
		//del objeto
		var _this = $(this);

 


		$.ajax({
			url: URL+'provincia.php',
			type: 'POST',
			dataType: 'html',
			data: {
				id: _this.val()


			},
		})
		.done(function(data) {
			
		 
			$("#resultado_provincia").html(data)

		})
		.fail(function(data) {
			console.log(data);
		});
	 




	});

	//SE ASIGNA EL EVENTO DE ESTA MANERA
	//CUANDO SE CARGA CON AJAX
  	$(document).on("change","#provincia",function(){
	
		
  		//esto representa el contexto actual
		//del objeto
		var _this = $(this);

 


		$.ajax({
			url: URL+'distrito.php',
			type: 'POST',
			dataType: 'html',
			data: {
				id: _this.val()


			},
		})
		.done(function(data) {
			
		 
			$("#resultado_distrito").html(data)

		})
		.fail(function(data) {
			console.log(data);
		});
	 







	});





})