$( document ).ready(function() {
	var i=0;
	$('body').on('click', 'a.addlink', function(e){
		e.preventDefault();
		i++;
		$('fieldset').append('<div class="clonado'+i+'"><hr><br/><br/></div>');
		$('fieldset').append('<div class="input select clonado'+i+'"> <label for="Tiposequip'+i+'TiposequipId">Tiposequip</label> <select name="data[Tiposequip]['+i+'][tiposequip_id]" id="Tiposequip'+i+'TiposequipId" class="clTiposequip'+i+'"></select> </div>');
		$('.tiposequip').find('option').clone().appendTo(".clTiposequip"+i);
		$('fieldset').append('<div class="input select required clonado'+i+'"><label for="Itensloc'+i+'TiposequipId">Tiposequip</label><select name="data[Itensloc]['+i+'][tiposequip_id]" id="Itensloc'+i+'TiposequipId" class="clTiposequip2'+i+'"></select></div>');
		$('.tiposequip2').find('option').clone().appendTo(".clTiposequip2"+i);
		$('fieldset').append('<div class="input number clonado'+i+'"><label for="Itensloc'+i+'Qtde">Qtde</label><input name="data[Itensloc]['+i+'][qtde]" step="any" type="number" id="Itensloc'+i+'Qtde"></div>');
		$('fieldset').append('<div class="input date clonado'+i+'"><label for="Itensloc'+i+'DatainicioMonth">Datainicio</label><select name="data[Itensloc]['+i+'][datainicio][month]" id="Itensloc'+i+'DatainicioMonth" class="datainiciomes'+i+'"></select>-<select name="data[Itensloc]['+i+'][datainicio][day]" id="Itensloc'+i+'DatainicioDay" class="datainiciodia'+i+'"></select>-<select name="data[Itensloc]['+i+'][datainicio][year]" id="Itensloc'+i+'DatainicioYear"  class="datainicioano'+i+'"></select></div>');
		$('.datainicio:first').find('option').clone().appendTo(".datainiciomes"+i);
		$('.datainicio:eq(1)').find('option').clone().appendTo(".datainiciodia"+i);
		$('.datainicio:eq(2)').find('option').clone().appendTo(".datainicioano"+i);
		$('fieldset').append('<div class="input date clonado'+i+'"><label for="Itensloc'+i+'DatafimMonth">Datafim</label><select name="data[Itensloc]['+i+'][datafim][month]" id="Itensloc'+i+'DatafimMonth" class="datafimmes'+i+'"></select>-<select name="data[Itensloc]['+i+'][datafim][day]" id="Itensloc'+i+'DatafimDay" class="datafimdia'+i+'"></select>-<select name="data[Itensloc]['+i+'][datafim][year]" id="Itensloc'+i+'DatafimYear" class="datafimano'+i+'"></select></div>');
		$('.datainicio:first').find('option').clone().appendTo(".datafimmes"+i);
		$('.datainicio:eq(1)').find('option').clone().appendTo(".datafimdia"+i);
		$('.datainicio:eq(2)').find('option').clone().appendTo(".datafimano"+i);
		$('fieldset').append('<div class="input number clonado'+i+'"><input name="data[Itensloc]['+i+'][status]" step="any"  id="Itensloc'+i+'Status" value="Pendente" type="hidden"></div>');
		$('fieldset').append('<div class="clonado'+i+'"><a href="#" class="addlink">Adicionar Novo Equipamento+</a><br/><br/></div>');
		$('fieldset').append('<div class="clonado'+i+'"><a href="#" class="removelink" id="clonado'+i+'">Remover Equipamento+</a></div>');
		
	});
	$('body').on('click', 'a.removelink', function(e){
		e.preventDefault();
		var deleteclone=$(this).attr('id');
		$('.'+deleteclone).remove();
	});
});