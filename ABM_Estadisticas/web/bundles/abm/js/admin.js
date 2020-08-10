function Admin() {
	
}

Admin.prototype.init = function() {
	this.titulos="";
	this.subtitulos="";
	this.anios="";
	this.forms="";
	this.oTable="";
	this.row="";
	this.object="";
	this.initDialogs();
	this.setupEvents();


};

Admin.prototype.initDialogs = function() {
	
	$("#editarNoveDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 400,
		width: 900,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',		
	});
	
	$("#editarTresDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 400,
		width: 900,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',		
	});
	
	$("#editarEvesDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 400,
		width: 900,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',		
	});
	
	$("#editarPeriDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 280,
		width: 550,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#editarIndiDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 480,
		width: 980,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',		
	});

	$("#editarCainDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 280,
		width: 550,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#editarAresDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 680,
		width: 980,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',		
	});
	
	$("#editarSubtituloDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 320,
		width: 550,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#editarTituloDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 320,
		width: 550,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#editarJurisdiccionDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 300,
		width: 440,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#agregarAnioDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 300,
		width: 440,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	$("#editarCapituloDLG").dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 300,
		width: 440,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed bold',
	});
	
	
	$( "#info" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 130,
		width: 300,
		show: {
			effect: "fade",
			duration: 50
		},
		hide: {
			effect: "fade",
			duration: 50
		},
		dialogClass: 'dlgfixed bold',

	});
	
	$( "#ALERTA" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 220,
		width: 350,
		show: {
			effect: "fade",
			duration: 50
		},
		hide: {
			effect: "fade",
			duration: 50
		},
		dialogClass: 'dlgfixed bold',

	});
	
	$(".dlgfixed").center();

	$("[name='anio']").addClass('form-horizontal');
	$("[name='capitulo']").addClass('form-horizontal');
	$("[name='jurisdiccion']").addClass('form-horizontal');
	$("[name='titulo']").addClass('form-horizontal');
	$("[name='subtitulo']").addClass('form-horizontal');
	$("[name='ares']").addClass('form-horizontal');
	$("[name='capituloindicador']").addClass('form-horizontal');
	$("[name='indicador']").addClass('form-horizontal');
	$("[name='periodo']").addClass('form-horizontal');
	$("[name='evolucionestadistica']").addClass('form-horizontal');
	$("[name='novedades']").addClass('form-horizontal');
	$("[name='trabajoespecial']").addClass('form-horizontal');

	
};

Admin.prototype.setupEvents = function() {
	$("#progressbar").hide();
	var self = this;
	self.aaData = "";
	self.oTable = "";
	self.habilitar = '&nbsp<a href="javascript:void(0)" class="habilitacion" title="Habilitar"><i class="fa fa-thumbs-o-up"></i></a>';
	self.deshabilitar = '&nbsp<a href="javascript:void(0)" class="habilitacion" title="Deshabilitar"><i class="fa fa-thumbs-o-down"></i></a>';
	
	$("#tablaNove").click(function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Novedades');
	});
	
	$("#tablaTres").click(function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('TrabajoEspecial');
	});
	
	$("#tablaFall").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Fallo');
	});
	
	$("#tablaFadi").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('FallosDivision');
	});
	
	$("#tablaEves").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('EvolucionEstadistica');
	});
	
	$("#tablaPeri").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Periodo');
	});
	
	$("#tablaInd").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Indicador');
	});
	
	$("#tablaCapiInd").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('CapituloIndicador');
	});
	
	$("#tablaAres").on("click",function(e) {
		e.preventDefault();
		
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('ArchivoEstadistico');
	});
	
	$("#tablaAnio").on("click",function(e) {
		e.preventDefault();

		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Anio');
    });
	
	$("#tablaCapitulo").on("click",function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Capitulo');

	});
	
	$("#tablaJurisdiccion").click(function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Jurisdiccion');
	});
	
	$("#tablaTitulo").click(function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Titulo');
	});
	
	$("#tablaSubtitulo").click(function(e) {
		e.preventDefault();
		if (self.oTable)  {
			self.oTable.fnDestroy();
			self.oTable.empty();
		}
		self.ajaxTabla('Subtitulo');
	});

	//CHANGE FUNCTIONS ARES
	
	
	$("#ares_aresCapitulo").change(function(e) {
		self.removerDatos('#ares_aresTitulo', 'Ninguno');
		var c = 0;
		$.each(self.titulos,function() {
			if (this.tituCapitulo) {
				if (this.tituCapitulo.capiId == $("#ares_aresCapitulo").val()) {
					$('#ares_aresTitulo').append($("<option></option>").val(this.tituId).text(this.tituDetalle));	
					c++;
				}
								
			}
			
		});
		if ((self.object.aresTitulo) && (self.object.aresCapitulo))
			$("#ares_aresTitulo").val((c > 0 && self.object.aresCapitulo.capiId == $("#ares_aresCapitulo").val()) ? self.object.aresTitulo.tituId : -1).trigger('change');
		else
			$("#ares_aresTitulo").val(-1).trigger('change');
	});
	
	$("#ares_aresTitulo").change(function(e) {
		self.removerDatos('#ares_aresSubtitulo', 'Ninguno');
		var c = 0;
		$.each(self.subtitulos,function() {
		   if (this.subtTitulo) {
			   if (this.subtTitulo.tituId == $("#ares_aresTitulo").val()) {
				   
				   $('#ares_aresSubtitulo').append($("<option></option>").val(this.subtId).text(this.subtDetalle));		
				   c++;
			   }
					   
		   }
			
		});
		if ((self.object.aresTitulo) && (self.object.aresSubtitulo))
			$("#ares_aresSubtitulo").val((self.object.aresSubtitulo && c > 0 && self.object.aresTitulo.tituId == $("#ares_aresTitulo").val()) ? self.object.aresSubtitulo.subtId : -1);
		else
			$("#ares_aresSubtitulo").val(-1).trigger('change');
	});
	
	/**
	 * DATATABLES TRABAJOS ESPECIALES
	 * 
	 */
	
	$("#datatable").on("click",".editarTRES", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#trabajoespecial_tresId").val(self.object.tresId);
		$("#trabajoespecial_tresDetalle").val(self.object.tresDetalle);
		$("#trabajoespecial_tresLink").val(self.object.tresLink);
		$("#trabajoespecial_tresDescarga").val(self.object.tresDescarga);
		$("#trabajoespecial_tresEditar").val(1);
		
		$("#eliminarTres").show();
		self.cerrarDialogs();
		$("#editarTresDLG").dialog("open");
		
	});
	
	
	$("#agregarTres").click(function(e) {
		self.object = "";
		
		$("#trabajoespecial_tresId").val("");
		$("#trabajoespecial_tresDetalle").val("");
		$("#trabajoespecial_tresLink").val("");
		$("#trabajoespecial_tresDescarga").val("");
		$("#trabajoespecial_tresEditar").val(0);
		
	
		$("#eliminarTres").hide();
		
		self.cerrarDialogs();
		$("#editarTresDLG").dialog("open");
	});
	
	/**
	 * DATATABLES NOVEDADES
	 * 
	 */
	
	$("#datatable").on("click",".editarNOVE", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#novedades_noveId").val(self.object.noveId);
		$("#novedades_noveDetalle").val(self.object.noveDetalle);
		$("#novedades_noveLink").val(self.object.noveLink);
		$("#novedades_noveDescarga").val(self.object.noveDescarga);
		$("#novedades_noveEditar").val(1);
		
		$("#eliminarNove").show();
		self.cerrarDialogs();
		$("#editarNoveDLG").dialog("open");
		
	});
	
	
	$("#agregarNove").click(function(e) {
		self.object = "";
		
		$("#novedades_noveId").val("");
		$("#novedades_noveDetalle").val("");
		$("#novedades_noveLink").val("");
		$("#novedades_noveDescarga").val("");
		$("#novedades_noveEditar").val(0);
		
	
		$("#eliminarNove").hide();
		
		self.cerrarDialogs();
		$("#editarNoveDLG").dialog("open");
	});
	
	/**
	 * DATATABLES EVOLUCION ESTADISTICA
	 * 
	 */
	
	$("#datatable").on("click",".editarEVES", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#evolucionestadistica_evesId").val(self.object.evesId);
		$("#evolucionestadistica_evesDetalle").val(self.object.evesDetalle);
		$("#evolucionestadistica_evesLink").val(self.object.evesLink);
		$("#evolucionestadistica_evesPeriodo").val(self.object.evesPeriodo.periId);
		$("#evolucionestadistica_evesEditar").val(1);
		
		$("#eliminarEves").show();
		self.cerrarDialogs();
		$("#editarEvesDLG").dialog("open");
		
	});
	
	
	$("#agregarEves").click(function(e) {
		self.object = "";
		
		$("#evolucionestadistica_evesId").val("");
		$("#evolucionestadistica_evesDetalle").val("");
		$("#evolucionestadistica_evesLink").val("");
		$("#evolucionestadistica_evesPeriodo option:first-child").attr("selected", "selected");
		$("#evolucionestadistica_evesEditar").val(0);
		
	
		$("#eliminarEves").hide();
		
		self.cerrarDialogs();
		$("#editarEvesDLG").dialog("open");
	});
	
	
	/**
	 * DATATABLES PERIODO
	 * 
	 */
	
	$("#datatable").on("click",".editarPERI", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#periodo_periId").val(self.object.periId);
		$("#periodo_periDetalle").val(self.object.periDetalle);
		$("#periodo_periEditar").val(1);
		$("#eliminarPeri").show();
		self.cerrarDialogs();
		$("#editarPeriDLG").dialog("open");
	});
	
	$("#agregarPeri").click(function(e) {
		self.object = "";
		$("#periodo_periId").val("");
		$("#periodo_periDetalle").val("");
		$("#periodo_periEditar").val(0);
		$("#eliminarPeri").hide();
		self.cerrarDialogs();
		$("#editarPeriDLG").dialog("open");
	});
	
	
	/**
	 * DATATABLES INDICADOR
	 * 
	 */
	
	$("#datatable").on("click",".editarINDI", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#indicador_indiId").val(self.object.indiId);
		$("#indicador_indiDetalle").val(self.object.indiDetalle);
		$("#indicador_indiCapitulo").val(self.object.indiCapitulo.cainId);
		$("#indicador_indiLink").val(self.object.indiLink);
		$("#indicador_indiDescarga").val(self.object.indiDescarga);
		$("#indicador_indiAnio").val(self.object.indiAnio.anioId);
		$("#indicador_indiEditar").val(1);
		
		$("#eliminarIndi").show();
		self.cerrarDialogs();
		$("#editarIndiDLG").dialog("open");
		
	});
	
	
	$("#agregarIndi").click(function(e) {
		self.object = "";
		
		$("#indicador_indiId").val("");
		$("#indicador_indiDetalle").val("");
		$("#indicador_indiCapitulo option:first-child").attr("selected", "selected");
		$("#indicador_indiLink").val("");
		$("#indicador_indiDescarga").val("");
		$("#indicador_indiAnio option:first-child").attr("selected", "selected");
		$("#indicador_indiEditar").val(0);
	
		$("#eliminarIndi").hide();
		
		self.cerrarDialogs();
		$("#editarIndiDLG").dialog("open");
	});
	
	/**
	 * 
	 * DATATABLES CAPITULO INDICADOR
	 * 
	 * 
	 */
	
	$("#datatable").on("click",".editarCI", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#capituloindicador_cainId").val(self.object.cainId);
		$("#capituloindicador_cainDetalle").val(self.object.cainDetalle);
		$("#capituloindicador_cainEditar").val(1);
		$("#eliminarCain").show();
		self.cerrarDialogs();
		$("#editarCainDLG").dialog("open");
	});
	
	$("#agregarCapiInd").click(function(e) {
		self.object = "";
		$("#capituloindicador_cainId").val("");
		$("#capituloindicador_cainDetalle").val("");
		$("#capituloindicador_cainEditar").val(0);
		$("#eliminarCain").hide();
		self.cerrarDialogs();
		$("#editarCainDLG").dialog("open");
	});
	
	/**
	 * 
	 * DATATABLES ARCHIVO ESTADISTICO
	 * 
	 * 
	 */
	$("#datatable").on("click",".editarAE", function(e) {
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		$("#ares_aresId").val(self.object.aresId);
		$("#ares_aresAnio").val(self.object.aresAnio.anioId);
		$("#ares_aresCapitulo").val(self.object.aresCapitulo.capiId);		
		$("#ares_aresLink").val(self.object.aresLink);
		$("#ares_aresDescarga").val(self.object.aresDescarga);
		$("#ares_aresDetalle").val(self.object.aresDetalle);
		$("#ares_aresDescripcion").val(self.object.aresDescripcion);
		$("#ares_aresComentario").val(self.object.aresComentario);
		$("#ares_aresEditar").val(1);
		$("#eliminarAres").show();
		$("#ares_aresCapitulo").trigger("change");
		$("#ares_aresTitulo").trigger("change");
		e.preventDefault();

		

		self.cerrarDialogs();
		$("#editarAresDLG").dialog("open");
	});
	
	
	$("#aresAgregar").click(function(e) {
		self.object = "";
		$("#ares_aresId").val("");
		$("#ares_aresDetalle").val("");
		if (!($("#ares_aresAnio").val((new Date).getFullYear()).val()))
			$('#ares_aresAnio option:first-child').attr("selected", "selected");
		$("#ares_aresCapitulo").trigger("change");
		$("#ares_aresTitulo").trigger("change");
		$("#ares_aresLink").val("");
		$("#ares_aresDescarga").val("");
		$("#ares_aresDescripcion").val("");
		$("#ares_aresComentario").val("");
		$("#ares_aresEditar").val(0);
		$("#eliminarAres").hide();
		
		self.cerrarDialogs();
		$("#editarAresDLG").dialog("open");
	});
	

	
	/**
	 * DATATABLES CAPITULO
	 * 
	 */
	
	$("#datatable").on("click",".editarCap",function(e) {
		
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		$("#capitulo_capi_editar").val(1);
		$("#capitulo_capi_id").val(self.object.capiId);
		$("#capitulo_capi_detalle").val(self.object.capiDetalle);
		$("#capitulo_capi_id_original").val(self.object.capiId);
		$("#eliminarCapitulo").show();
		self.cerrarDialogs();
		$("#editarCapituloDLG").dialog("open");


	});

	
	
	$("#ALERTA").on("click","#alertaAceptar",function(e) {
		$("#ALERTA").dialog("close");
		$("#alertaMensaje").empty();
		
		$("#progressbar").show();
		e.preventDefault();
		if ($("#alertaTabla").val() == 'anio') {
				$.ajax({
					url: self.eliminarAnio,
					type: 'POST',
					async: true,
					data: { anioId: self.object.anioId },
					success: function(response, textStatus, xhr) {
						self.oTable.fnDeleteRow(self.row);
						
						$("#anio_anioId").append($("<option></option>").val(self.object.anioId).text(self.object.anioId));
						$('#ares_aresAnio option[value=' + val + ']').remove();
						$('#indicador_indiAnio option[value=' + val + ']').remove();
						
						$("#progressbar").hide();
						self.cerrarDialogs();
						$("#info").empty();
						$("#info").append("Operación exitosa");
						$("#info").dialog("open");
					},
					error: function(xhr, textStatus, errorThrown) {
						alert("ERROR: " + textStatus);
	                	return false;
					}
				});
		
		}
		else if ($("#alertaTabla").val() == 'capitulo') { 
			$.ajax({
				url: self.eliminarCapitulo,
				type: 'POST',
				async: true,
				data: { capitulo: self.object.capiId },
				success: function(response, textStatus, xhr) {
					self.oTable.fnDeleteRow(self.row);
					$("#progressbar").hide();
					
					$("#editarCapituloDLG").dialog("close");
					$("#capitulo_capi_editar").val(0);
					$("#capitulo_capi_id").val("");
					$("#capitulo_capi_detalle").val("");
					$("#capitulo_capi_id_original").val("");
					self.cerrarDialogs();
					$("#info").empty();
					$("#info").append("Operación exitosa");
					$("#info").dialog("open");
				},
				error: function(xhr, textStatus, errorThrown) {
					alert("ERROR: " + textStatus);
                	return false;
				}
			});
	
		}
		
		
		
	});
	
	/**
	 * DATATABLES TITULO
	 * 
	 * 
	 * 
	 */
	
	$("#datatable").on("click",".editarTitu", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#titulo_titu_id").val(self.object.tituId);
		$("#titulo_titu_detalle").val(self.object.tituDetalle);
		$("#titulo_titu_editar").val(1);
	
		$("#titulo_titu_capitulo").val(self.object.tituCapitulo.capiId);
		
		self.object.tituHabilitado ? $("#titulo_titu_habilitado_0").prop("checked", true) : $("#titulo_titu_habilitado_1").prop("checked", true);
		$("#eliminarTitu").show();
		self.cerrarDialogs();
		$("#editarTituloDLG").dialog("open");
		
	});
	
	$("#agregarTitulo").click(function(e) {
		e.preventDefault();
		$("#eliminarTitu").hide();
		$("#titulo_titu_editar").val(0);
		self.cerrarDialogs();
		$("#editarTituloDLG").dialog("open");
	});
	
	/**
	 * DATATABLES SUBTITULO
	 * 
	 */
	
	$("#datatable").on("click",".editarSubt", function(e) {
		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#subtitulo_subt_id").val(self.object.subtId);
		$("#subtitulo_subt_detalle").val(self.object.subtDetalle);
		$("#subtitulo_subt_editar").val(1);
		$("#subtitulo_titu_capitulo").val(self.object.subtTitulo.tituId);
		
		self.object.subtHabilitado ? $("#subtitulo_subt_habilitado_0").prop("checked",true) : $("#subtitulo_subt_habilitado_1").prop("checked",true);
		$("#eliminarSubt").show();
		self.cerrarDialogs();
		$("#editarSubtituloDLG").dialog("open");
		
	});
	
	$("#agregarSubtitulo").click(function(e) {
		e.preventDefault();
		$("#eliminarSubt").hide();
		$("#subtitulo_subt_editar").val(0);
		self.cerrarDialogs();
		$("#editarSubtituloDLG").dialog("open");
	});
	
	/**
	 * DATATABLES JURISDICCION
	 * 
	 * 
	 * 
	 */
	$("#datatable").on("click",".editarJuri",function(e) {

		e.preventDefault();
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );
		
		$("#jurisdiccion_juriId").val(self.object.juriId);
		$("#jurisdiccion_juriDetalle").val(self.object.juriDetalle);
		$("#jurisdiccion_juriEditar").val(1);
		$('#jurisdiccion_juriCapitulo').val(self.object.juriCapitulo.capiId);

		self.cerrarDialogs();
		$("#editarJurisdiccionDLG").dialog("open");
	});
	
	$("#agregarJurisdiccion").click(function(e) {
		e.preventDefault();

		
		$("#jurisdiccion_juriId").val("");
		$("#jurisdiccion_juriDetalle").val("");
		$("#jurisdiccion_juriEditar").val(0);
		$('#jurisdiccion_juriCapitulo option:first-child').attr("selected", "selected");
		$("#eliminarJuris").hide();
		self.cerrarDialogs();
		$("#editarJurisdiccionDLG").dialog("open");
	});

	/**
	 * DATATABLES AÑO
	 * 
	 * 
	 * 
	 */
	
	$("#datatable").on("click",".habilitacion",function(e) {
		$("#progressbar").show();
		e.preventDefault();
		var row = $(this).closest("tr")[0];
		var object = self.oTable.fnGetData( $(this).closest("tr") );
		$.ajax({
			url: self.habilitacionAnio,
			type: 'POST',
			async: true,
			data: { anioId: object.anioId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnUpdate({anioId:object.anioId, anioHabilitado: response.habilitado},row);
				$("#progressbar").hide();
			},
			error: function(xhr, textStatus, errorThrown) {
                alert("ERROR: " + textStatus);
                return false;
            }
		});
	});
	
	$("#datatable").on("click",".eliminar",function(e) {
		$("#alertaMensaje").empty();
		$("#alertaMensaje").append("La eliminación del año provocará un borrado en cascada de todos los datos correspondientes al año. Desea continuar?");
		$("#alertaTabla").val("anio");
		$("#ALERTA").dialog("open");
		
		self.row = $(this).closest("tr")[0];
		self.object = self.oTable.fnGetData( $(this).closest("tr") );


	});

	
	$("#ALERTA").on("click","#alertaCancelar",function(e) {
		$("#ALERTA").dialog("close");
		$("#alertaMensaje").empty();
	});
	
	$("#agregarAnio").on("click",function(e) {
		e.preventDefault();
		self.cerrarDialogs();
		$("#agregarAnioDLG").dialog("open");
	});
	
	//SUBMIT FORM TRABAJO ESPECIAL
	
	$("[name='trabajoespecial']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#trabajoespecial_tresEditar").val() == 1) {
					self.oTable.fnUpdate({
						
						tresId: $("#trabajoespecial_tresId").val(),
						tresDetalle: $("#trabajoespecial_tresDetalle").val(),
						tresLink: $("#trabajoespecial_tresLink").val(),
						tresDescarga: $("#trabajoespecial_tresDescarga").val()
						
					},self.row);
				} else {
					self.ajaxTabla('TrabajoEspecial');
				}
				$("#editarTresDLG").dialog("close");
				$("#eliminarTres").show();
				
				$("#trabajoespecial_tresId").val("");
				$("#trabajoespecial_tresDetalle").val("");
				$("#trabajoespecial_tresLink").val("");
				$("#trabajoespecial_tresDescarga").val("");
				$('#trabajoespecial_tresEditar').val(0);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;
		});
	});
	
	//SUBMIT FORM NOVEDADES
	
	$("[name='novedades']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#novedades_noveEditar").val() == 1) {
					self.oTable.fnUpdate({
						
						noveId: $("#novedades_noveId").val(),
						noveDetalle: $("#novedades_noveDetalle").val(),
						noveLink: $("#novedades_noveLink").val(),
						noveDescarga: $("#novedades_noveDescarga").val()
						
					},self.row);
				} else {
					self.ajaxTabla('Novedades');
				}
				$("#editarNoveDLG").dialog("close");
				$("#eliminarNove").show();
				
				$("#novedades_noveId").val("");
				$("#novedades_noveDetalle").val("");
				$("#novedades_noveLink").val("");
				$("#novedades_noveDescarga").val("");
				$('#novedades_noveEditar').val(0);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;
		});
	});
	
	//SUBMIT FORM EVOLUCION ESTADISTICA
	
	$("[name='evolucionestadistica']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#evolucionestadistica_evesEditar").val() == 1) {
					self.oTable.fnUpdate({
						
						evesId: $("#evolucionestadistica_evesId").val(),
						evesDetalle: $("#evolucionestadistica_evesDetalle").val(),
						evesLink: $("#evolucionestadistica_evesLink").val(),
						evesPeriodo: {
							periId: $("#evolucionestadistica_evesPeriodo").find(":selected").val(),
							periDetalle: $("#evolucionestadistica_evesPeriodo").find(":selected").text(),
						}
						
					},self.row);
				} else {
					self.ajaxTabla('EvolucionEstadistica');
				}
				$("#editarEvesDLG").dialog("close");
				$("#eliminarEves").show();
				
				$("#evolucionestadistica_evesId").val("");
				$("#evolucionestadistica_evesDetalle").val("");
				$("#evolucionestadistica_evesLink").val("");
				$('#evolucionestadistica_evesPeriodo option:first-child').attr("selected", "selected");
				$('#evolucionestadistica_evesEditar').val(0);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;
		});
	});
	
	//SUBMIT FORM PERIODO
	
	$("[name='periodo']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#periodo_periEditar").val() == 1) {
					self.oTable.fnUpdate({
						periId: $("#periodo_periId").val(),
						periDetalle: $("#periodo_periDetalle").val()
					},self.row);
				}
					else {
						self.ajaxTabla('Periodo');
					}
					$("#editarPeriDLG").dialog("close");
					$("#eliminarPeri").show();
					$("#periodo_pediId").val("");
					$("#periodo_periDetalle").val("");
					$("#periodo_editar").val(0);
					self.cerrarDialogs();
					$("#info").empty();
					$("#info").append("Operación exitosa");
					$("#info").dialog("open");
				}
			return false;
		});
	});
	
	//SUBMIT FORM INDICADOR
	 
	$("[name='indicador']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#indicador_indiEditar").val() == 1) {
					self.oTable.fnUpdate({
						
						indiId: $("#indicador_indiId").val(),
						indiCapitulo: {
							cainId: $("#indicador_indiCapitulo").find(":selected").val(),
							cainDetalle: $("#indicador_indiCapitulo").find(":selected").text(),
						},
						indiDetalle: $("#indicador_indiDetalle").val(),
						indiLink: $("#indicador_indiLink").val(),
						indiDescarga: $("#indicador_indiDescarga").val(),
						indiAnio: {
							anioId: $("#indicador_indiAnio").find(":selected").val(),
							anioHabilitado: 1
						}
						
					},self.row);
				} else {
					self.ajaxTabla('Indicador');
				}
				$("#editarIndiDLG").dialog("close");
				$("#eliminarIndi").show();
				
				$("#indicador_indiId").val("");
				$("#indicador_indiDetalle").val("");
				$("#indicador_indiLink").val("");
				$("#indicador_indiDescarga").val("");
				$('#indicador_indiCapitulo option:first-child').attr("selected", "selected");
				$('#indicador_indiAnio option:first-child').attr("selected", "selected");
				$('#indicador_indiEditar').val(0);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;
		});
	});
	
	
	//SUBMIT FORM CAPITULO INDICADOR
	$("[name='capituloindicador']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#capituloindicador_cainEditar").val() == 1) {
					self.oTable.fnUpdate({
						cainId: $("#capituloindicador_cainId").val(),
						cainDetalle: $("#capituloindicador_cainDetalle").val()
					},self.row);
				}
					else {
						self.ajaxTabla('CapituloIndicador');
					}
					$("#editarCainDLG").dialog("close");
					$("#eliminarCain").show();
					$("#capituloindicador_cainId").val("");
					$("#capituloindicador_cainDetalle").val("");
					$("#capituloindicador_editar").val(0);
					self.cerrarDialogs();
					$("#info").empty();
					$("#info").append("Operación exitosa");
					$("#info").dialog("open");
				}
			return false;
		});
	});
	
	
	//SUBMIT FORM TITULO
	
	$("[name='titulo']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				var detalle = $("#titulo_titu_capitulo").find(":selected").text().split('. ');
				if ($("#titulo_titu_editar").val() == 1) {
					
					self.oTable.fnUpdate({
						tituId: $("#titulo_titu_id").val(),
						tituDetalle: $("#titulo_titu_detalle").val(),
						tituCapitulo: {
							capiId: $("#titulo_titu_capitulo").val(),
							capiDetalle: detalle[1],
						},
						tituHabilitado: $("#titulo_titu_habilitado_0").prop("checked") ? 1 : 0
					},self.row);				

				} else {
					self.ajaxTabla('Titulo');
				}
				$("#editarTituloDLG").dialog("close");
				$("#eliminarTitu").show();
				$('#titulo_titu_id').val("");
				$("#titulo_titu_detalle").val("");
				$('#titulo_titu_capitulo option:first-child').attr("selected", "selected");
				$("#titulo_titu_habilitado_0").prop("checked", false);
				$("#titulo_titu_habilitado_1").prop("checked", false);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			
			return false;

		});
	});
	
	//SUBMIT FORM CAPITULO
	
	$("[name='capitulo']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm($(this), function( response ){
	    	if (response == 'ok') {
	    			if ($("#titulo_titu_editar").val() === 0) {	    			
	    				self.ajaxTabla('Capitulo');

	    			}
	    			else {
	    				self.oTable.fnUpdate({capiId:$("#capitulo_capi_id").val(), capiDetalle: $("#capitulo_capi_detalle").val()},self.row);
	    			}

	    				$("#editarCapituloDLG").dialog("close");
	    				$("#capitulo_capi_editar").val(0);
	    				$("#capitulo_capi_id").val("");
	    				$("#capitulo_capi_detalle").val("");
	    				$("#capitulo_capi_id_original").val("");
	    				self.cerrarDialogs();
						$("#info").empty();
						$("#info").append("Operación exitosa");
						$("#info").dialog("open");
	    	}
	    	
	    	return false;
	    });		
	});
	
	
	//SUBMIT FORM ARES
	
	$("[name='ares']").submit(function(e) {
		e.preventDefault();
		var submit = $(this);
		self.postForm($(this), function(response) {
			if (response == 'ok') {
				if ($("#ares_aresEditar").val() == 1) {
					var detalle = $('#ares_aresCapitulo').find(":selected").text().split('. ');
					

					
					self.oTable.fnUpdate({
						aresId: $("#ares_aresId").val(),
						aresAnio: {
							anioId: $("#ares_aresAnio").val(),
							anioHabilitado: self.anios.filter( function(data) { return data.anioId == $("#ares_aresAnio").val();  } )[0].anioHabilitado,
						},
						aresCapitulo:{
								capiId: $('#ares_aresCapitulo').val(),
								capiDetalle: detalle[1]
						},
						aresTitulo: {
								tituId: $('#ares_aresTitulo').val(),
								tituDetalle: $('#ares_aresTitulo').text(),
								tituCapitulo: $("#ares_aresCapitulo").val(),
								tituHabilitado: self.titulos.filter( function(data) { return data.tituCapitulo.capiId == $("#ares_aresCapitulo").val(); })[0].tituHabilitado,
						},
						aresSubtitulo: {
							subtId: $('#ares_aresSubtitulo').val(),
							subtDetalle: $('#ares_aresSubtitulo').text(),
							subtTitulo: $("#ares_aresTitulo").val(),
							subtHabilitado: self.subtitulos.filter( function(data) { return data.subtTitulo.tituId == $("#ares_aresTitulo").val(); })[0].subtHabilitado,
						},
						aresDetalle: $('#ares_aresDetalle').val(),
						aresLink: $('#ares_aresLink').val(),
						aresDescarga: $('#ares_aresDescarga').val(),
						aresComentario: $('#ares_aresComentario').val(),
						aresDescripcion: $('#ares_aresDescripcion').val()

					},self.row);

				}
				else {
					self.ajaxTabla('ArchivoEstadistico');				
				}
				
				
				$("#ares_aresId").val("");
				if (!$("#ares_aresAnio").val((new Date).getFullYear()).val())
					$('#ares_aresAnio option:first-child').attr("selected", "selected");
				$("#ares_aresCapitulo").val(0);		
				$("#ares_aresLink").val("");
				$("#ares_aresDescarga").val("");
				$("#ares_aresDetalle").val("");
				$("#ares_aresDescripcion").val("");
				$("#ares_aresComentario").val("");
				$("#ares_aresCapitulo").trigger("change");
				$("#ares_aresTitulo").trigger("change");
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarAresDLG").dialog("close");
				$("#eliminarAres").show();


			}
			return false;
		});
	});

	

	
	
		
	//SUBMIT FORM AÑO
	

	$("[name='anio']").submit(function(e) {
		e.preventDefault(); 
		if ($("#anio_anioId").val() != -1) {
			
		    self.postForm($(this), function( response ){ 
		    	
		    	return false;  
		    	});
		    
		   var val = $('#anio_anioId').find(":selected").val();
		   $('#anio_anioId option[value=' + val + ']').remove();
		   
			$("#ares_aresAnio").append($("<option></option>").val(val).text(val));
			$("#indicador_indiAnio").append($("<option></option>").val(val).text(val));

		   
		   $("#agregarAnioDLG").dialog("close");
		   self.cerrarDialogs();
		   self.ajaxTabla('Anio');
			$("#info").empty();
			$("#info").append("Operación exitosa");
			$("#info").dialog("open");
			
			$('[name="anio[anioHabilitado]"]').val("");
		}
		else {
			alert('Seleccione un año');
		}	    
	});
	

	
	
	$("#agregarCapitulo").click(function(e) {
		$("#eliminarCapitulo").hide();
		$("#capitulo_capi_editar").val(0);
		self.cerrarDialogs();
		$("#editarCapituloDLG").dialog("open");
	});

	
	//SUBMIT FORM JURISDICCION
	
	$("[name='jurisdiccion']").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm($(this), function( response ){
			if (response == 'ok') {
				if ($("#titulo_titu_editar").val() == 1) {
					
					var detalle = $('#jurisdiccion_juriCapitulo').find(":selected").text().split('. ');
					self.oTable.fnUpdate({
						juriId: $("#jurisdiccion_juriId").val(),
						juriDetalle:$("#jurisdiccion_juriDetalle").val(),
						juriCapitulo:{
								capiId: $('#jurisdiccion_juriCapitulo').find(":selected").val(),
								capiDetalle: detalle[1]
							}

					},self.row);
				}
				else {
	    			self.ajaxTabla('Jurisdiccion');
				}
				$("#editarJurisdiccionDLG").dialog("close");
				$("#jurisdiccion_juriId").val("");
				$("#jurisdiccion_juriDetalle").val("");
				$("#jurisdiccion_juriEditar").val(0);
				$("#eliminarJuris").show();
				$('#jurisdiccion_juriCapitulo option:first-child').attr("selected", "selected");
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;
		});
		
	});

	//SUBMIT FORM SUBTITULO
	
	$("#editarSubt").submit(function(e) {
		var submit = $(this);
		e.preventDefault();
		self.postForm(submit, function(response) {
			if (response == 'ok') {
				if ($("#titulo_titu_editar").val() == 1) {

					
					self.oTable.fnUpdate({
						subtId: $("#subtitulo_subt_id").val(),
						subtDetalle: $("#subtitulo_subt_detalle").val(),
						subtTitulo: {
							tituId: $("#subtitulo_subt_titulo").val(),
							tituDetalle: $("#subtitulo_subt_titulo").find(":selected").text()
						},
						subtHabilitado: $("#subtitulo_subt_habilitado_0").prop("checked") ? 1 : 0
					},self.row);
					

					
				} else {
					self.ajaxTabla('Subtitulo');
				}
				
				$('#subtitulo_subt_id').val("");
				$("#subtitulo_subt_detalle").val("");
				$('#subtitulo_subt_titulo option:first-child').attr("selected", "selected");

				$("#subtitulo_subt_habilitado_0").prop("checked", false);
				$("#subtitulo_subt_habilitado_1").prop("checked", false);
				$("#editarSubtituloDLG").dialog("close");
				$("#eliminarSubt").show();
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			}
			return false;

		});
	});
	
	
	$(".cancelarBoton").click(function(e) {
		e.preventDefault();
		$(this).parent().parent().parent().parent().dialog("close");
	});
	
	//ELIMINAR
	
	$("#eliminarCapitulo").click(function(e) {
		e.preventDefault();
		$("#alertaMensaje").empty();
		$("#alertaMensaje").append("La eliminación del capítulo provocará un borrado en cascada de todos los datos que contengan este capítulo. Desea continuar?");
		$("#alertaTabla").val("capitulo");
		$("#ALERTA").dialog("open");
	});
	
	$("#eliminarIndi").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarIndi,
			type: 'POST',
			async: true,
			data: { indiId: self.object.indiId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
		
				$("#indicador_indiId").val("");
				$("#indicador_indiDetalle").val("");
				$("#indicador_indiLink").val("");
				$("#indicador_indiDescarga").val("");
				$('#indicador_indiCapitulo option:first-child').attr("selected", "selected");
				$('#indicador_indiAnio option:first-child').attr("selected", "selected");
				$('#indicador_indiEditar').val(0);

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarIndiDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarJuris").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarJuris,
			type: 'POST',
			async: true,
			data: { juriId: self.object.juriId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#editarJurisdiccionDLG").dialog("close");
				$("#jurisdiccion_juriId").val("");
				$("#jurisdiccion_juriDetalle").val("");
				$("#jurisdiccion_juriEditar").val(0);
				$('#jurisdiccion_juriCapitulo option:first-child').attr("selected", "selected");
				$("#eliminarJuris").show();
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
		
		
		
	});
	
	$("#eliminarTitu").click(function(e){
		e.preventDefault();
		$.ajax({
			url: self.eliminarTitu,
			type: 'POST',
			async: true,
			data: { tituId: self.object.tituId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#editarTituloDLG").dialog("close");
				
				$('#titulo_titu_id').val("");
				$("#titulo_titu_detalle").val("");
				$('#titulo_titu_capitulo option:first-child').attr("selected", "selected");
				$("#titulo_titu_habilitado_0").prop("checked", false);
				$("#titulo_titu_habilitado_1").prop("checked", false);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarSubt").click(function(e){
		e.preventDefault();
		$.ajax({
			url: self.eliminarSubt,
			type: 'POST',
			async: true,
			data: { subtId: self.object.subtId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#editarSubtituloDLG").dialog("close");
				
				$('#subtitulo_subt_id').val("");
				$("#subtitulo_subt_detalle").val("");
				$('#subtitulo_subt_titulo option:first-child').attr("selected", "selected");

				$("#subtitulo_subt_habilitado_0").prop("checked", false);
				$("#subtitulo_subt_habilitado_1").prop("checked", false);
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarAres").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarAres,
			type: 'POST',
			async: true,
			data: { aresId: self.object.aresId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#ares_aresId").val("");
				if (!$("#ares_aresAnio").val((new Date).getFullYear()).val())
					$('#ares_aresAnio option:first-child').attr("selected", "selected");
				$("#ares_aresCapitulo").val(0);		
				$("#ares_aresLink").val("");
				$("#ares_aresDescarga").val("");
				$("#ares_aresDetalle").val("");
				$("#ares_aresDescripcion").val("");
				$("#ares_aresComentario").val("");
				$("#ares_aresCapitulo").trigger("change");
				$("#ares_aresTitulo").trigger("change");
				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarAresDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarCain").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarCain,
			type: 'POST',
			async: true,
			data: { cainId: self.object.cainId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#capituloindicador_cainId").val("");

				$("#capituloindicador_cainDetalle").val("");

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarCainDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarPeri").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarPeri,
			type: 'POST',
			async: true,
			data: { periId: self.object.periId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
				$("#periodo_periId").val("");

				$("#periodo_periDetalle").val("");

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarPeriDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarEves").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarEves,
			type: 'POST',
			async: true,
			data: { evesId: self.object.evesId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
		
				$("#evolucionestadistica_evesId").val("");
				$("#evolucionestadistica_evesDetalle").val("");
				$("#evolucionestadistica_evesLink").val("");
				$('#evolucionestadistica_evesPeriodo option:first-child').attr("selected", "selected");
				$('#evolucionestadistica_evesEditar').val(0);

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarEvesDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarNove").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarNove,
			type: 'POST',
			async: true,
			data: { noveId: self.object.noveId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
		
				$("#novedades_noveId").val("");
				$("#novedades_noveDetalle").val("");
				$("#novedades_noveLink").val("");
				$('#novedades_noveDescarga').val("");
				$('#novedades_noveEditar').val(0);

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarNoveDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	
	$("#eliminarTres").click(function(e) {
		e.preventDefault();
		$.ajax({
			url: self.eliminarTres,
			type: 'POST',
			async: true,
			data: { tresId: self.object.tresId },
			success: function(response, textStatus, xhr) {
				self.oTable.fnDeleteRow(self.row);
				$("#progressbar").hide();
				
		
				$("#trabajoespecial_tresId").val("");
				$("#trabajoespecial_tresDetalle").val("");
				$("#trabajoespecial_tresLink").val("");
				$('#trabajoespecial_tresDescarga').val("");
				$('#trabajoespecial_tresEditar').val(0);

				self.cerrarDialogs();
				$("#info").empty();
				$("#info").append("Operación exitosa");
				$("#info").dialog("open");
				$("#editarTresDLG").dialog("close");

			},
			error: function(xhr, textStatus, errorThrown) {
				alert("ERROR: " + textStatus);
            	return false;
			}
		});
	});
	

	


};


Admin.prototype.postForm = function($form, callback) {
	 
	  /*
	   * Get all form values
	   */
	  var values = {};
	  $.each( $form.serializeArray(), function(i, field) {
	    values[field.name] = field.value;
	  });
	  
	 
	  /*
	   * Throw the form values to the server!
	   */
	  $.ajax({
	    type        : $form.attr( 'method' ),
	    url         : $form.attr( 'action' ),
	    data        : values,
	    success     : function(response) {
	      callback( 'ok' );
	    },
		error: function(xhr, textStatus, errorThrown) {
            alert(((xhr.responseJSON) ? (xhr.responseJSON.message ? xhr.responseJSON.message : xhr.responseText): xhr.responseText) );
            return false;
        }
	  });
	 
};

Admin.prototype.ajaxTabla = function(tabla) {
	$("#progressbar").show();
	var self = this;
	$.ajax({
			url: self.getTabla,
			type: 'POST',
			async: true,
			data: {tabla: tabla},
			success: function(response, textStatus, xhr) {
				self.createDatatable(response,tabla);
			},
			error: function(xhr, textStatus, errorThrown) {
                alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
                return false;
            }
	});
};

Admin.prototype.createDatatable = function(aaData,tabla) {
	var self = this;
	self.aaData = aaData;
	
	switch (tabla) {
	case 'Anio':
		self.createAnioDatatable(aaData);
		break;
	
	case 'Capitulo':
		self.createCapituloDatatable(aaData);
		break;
	case 'Jurisdiccion':
		self.createJurisdiccionDatatable(aaData);
		break;
	case 'Titulo':
		self.createTituloDatatable(aaData);
		break;
	case 'Subtitulo':
		self.createSubtituloDatatable(aaData);
		break;
	case 'ArchivoEstadistico':
		self.createAresDatatable(aaData);
		break;
	case 'CapituloIndicador':
		self.createCapituloIndDatatable(aaData);
		break;
	case 'Indicador':
		self.createIndicadorDatatable(aaData);
		break;
	case 'Periodo':
		self.createPeriodoDatatable(aaData);
		break;
	case 'EvolucionEstadistica':
		self.createEvolucionDatatable(aaData);
		break;
	case 'Fallo':
		self.createFalloDatatable(aaData);
		break;
	case 'FallosDivision':
		self.createFallosDivisionDatatable(aaData);
		break;
	case 'Novedades':
		self.createNovedadesDatatable(aaData);
		break;
	case 'TrabajoEspecial':
		self.createTrabajoEspecialDatatable(aaData);
		break;
	}


		

};

Admin.prototype.cerrarDialogs = function() {
	$("#editarEvesDLG").dialog("close");
	$("#editarPeriDLG").dialog("close");
	$("#editarIndiDLG").dialog("close");
	$("#editarNoveDLG").dialog("close");
	$("#editarTresDLG").dialog("close");
	$("#editarCainDLG").dialog("close");
	$("#editarAresDLG").dialog("close");
	$("#editarSubtituloDLG").dialog("close");
	$("#editarTituloDLG").dialog("close");
	$("#editarJurisdiccionDLG").dialog("close");
	$("#agregarAnioDLG").dialog("close");
	$("#editarCapituloDLG").dialog("close");
};

Admin.prototype.achicarString = function(string) {
	return string.length > 50 ? string.substring(0,46) + '...' : string;
};

Admin.prototype.createTrabajoEspecialDatatable = function(aaData) {
	
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Trabajo Especial.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.tresId;
		                     }
		                 },
		                 
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.tresDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.tresLink;
			                    }
			            },
			            
		                 { 
		                	 "sTitle": "Descarga",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.tresDescarga;
		                     }
		                 },
			            
		            
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarTRES" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
	
	
};


Admin.prototype.createNovedadesDatatable = function(aaData) {
	
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Novedades.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.noveId;
		                     }
		                 },
		                 
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.noveDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.noveLink;
			                    }
			            },
			            
		                 { 
		                	 "sTitle": "Descarga",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.noveDescarga;
		                     }
		                 },
			            
		            
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarNOVE" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
	
	
};

Admin.prototype.createFallosDivisionDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Fallos.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.fadiId;
		                     }
		                 },          
		               
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.fadiDetalle;
			                    }
			            },
			         

		               ]	,
	});	
};

Admin.prototype.createFalloDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Fallos.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.fallId;
		                     }
		                 },
		                 
		                 { 
		                	 "sTitle": "Año",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.fallAnio.anioId;
		                     }
		                 },
		                 
		                 { 
		                	 "sTitle": "Division",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.fallDivision.fadiDetalle;
		                     }
		                 },

		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.fallDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.fallLink;
			                    }
			            },

		               ]	,
	});	
};

Admin.prototype.createEvolucionDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Evolución Estadística.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.evesId;
		                     }
		                 },
		                 
		                 { 
		                	 "sTitle": "Periodo",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.evesPeriodo.periId;
		                     }
		                 },

		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.evesDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.evesLink;
			                    }
			            },
			            
		            
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarEVES" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
};

Admin.prototype.createPeriodoDatatable = function(aaData) {
	
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Periodo.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.periId;
		                     }
		                 },

		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.periDetalle;
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarPERI" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
	
};

Admin.prototype.createIndicadorDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Indicador.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.indiId;
		                     }
		                 },
		                 { 
		                	 "sTitle": "Capitulo",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.indiCapitulo.cainDetalle;
		                     }
		                 },
		                 
		                 { 
		                	 "sTitle": "Año",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.indiAnio.anioId;
		                     }
		                 },

		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.indiDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.indiLink;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Descarga",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.indiDescarga;
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarINDI" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
};

Admin.prototype.createCapituloIndDatatable = function(aaData) {
	
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Capítulo Indicador.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.cainId;
		                     }
		                 },

		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.cainDetalle;
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarCI" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
	
};

Admin.prototype.createAresDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollX": "100%",
		"sScrollY": "590px",
	    "sScrollXInner": "270%",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Archivos Estadísticos.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "mRender": function(data, type, row) {
		                         return row.aresId;
		                     }
		                 },
		                { 
			                   "sTitle": "Año",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresAnio.anioId;
			                    }
			            },
			            {
			                   "sTitle": "Capítulo",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
			                	   return row.aresCapitulo.capiId + '. ' + row.aresCapitulo.capiDetalle;				                	
			                    }
			            },
		                { 
			                   "sTitle": "Título",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return (row.aresTitulo) ? row.aresTitulo.tituDetalle : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Subtítulo",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return (row.aresSubtitulo) ? row.aresSubtitulo.subtDetalle : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Link",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresLink ? row.aresLink : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Descarga",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresDescarga ? row.aresDescarga : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresDetalle ? self.achicarString(row.aresDetalle) : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Descripción",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresDescripcion ? self.achicarString(row.aresDescripcion) : 'NULL';
			                    }
			            },
		                { 
			                   "sTitle": "Comentario",
			                   "mData" : null,
			                   "mRender": function( data, type, row) {
				                	   return row.aresComentario ? self.achicarString(row.aresComentario) : 'NULL';
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarAE" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
};

Admin.prototype.createSubtituloDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
		
	    "scrollCollapse": true,
		"bAutoWidth": false,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
		"sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Subtítulo.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "sWidth": "3%",
		                	 "mRender": function(data, type, row) {
		                         return row.subtId;
		                     }
		                 },
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "sWidth": "30%",
			                   "mRender": function( data, type, row) {
				                	   return row.subtDetalle;
			                    }
			            },
			            {
			                   "sTitle": "Título",
			                   "mData" : null,
			                   "sWidth": "40%",
			                   "mRender": function( data, type, row) {
				                	   return row.subtTitulo.tituDetalle;
			                    }
			            },
		                { 
			                   "sTitle": "Habilitado",
			                   "mData" : null,
			                   "sWidth": "10%",
			                   "mRender": function( data, type, row) {
				                	   return row.subtHabilitado ? 'Si':'No';
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
		                	 "sWidth": "10%",
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarSubt" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
};

Admin.prototype.createTituloDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
		
	    "scrollCollapse": true,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
	    "sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Título.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "sWidth": "3%",
		                	 "mRender": function(data, type, row) {
		                         return row.tituId;
		                     }
		                 },
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "sWidth": "30%",
			                   "mRender": function( data, type, row) {
				                	   return row.tituDetalle;
			                    }
			            },

			            
		                { 
			                   "sTitle": "Capítulo",
			                   "mData" : null,
			                   "sWidth": "40%",
			                   "mRender": function( data, type, row) {
				                	   return row.tituCapitulo.capiId + '. ' + row.tituCapitulo.capiDetalle;
			                    }
			            },
			            
		                { 
			                   "sTitle": "Habilitado",
			                   "mData" : null,
			                   "sWidth": "10%",
			                   "mRender": function( data, type, row) {
				                	   return row.tituHabilitado ? 'Si':'No';
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
		                	 "sWidth": "10%",
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarTitu" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            },

			            
		               ]	,
	});	
	
};

Admin.prototype.createJurisdiccionDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
		
	    "scrollCollapse": true,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
	    "sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Jurisdicción.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID",
		                	 "mData" : null,
		                	 "sWidth": "10%",
		                	 "mRender": function(data, type, row) {
		                         return row.juriId;
		                     }
		                 },
		                { 
			                   "sTitle": "Detalle",
			                   "mData" : null,
			                   "sWidth": "40%",
			                   "mRender": function( data, type, row) {
				                	   return row.juriDetalle;
			                    }
			            },
		                { 
			                   "sTitle": "Capítulo",
			                   "mData" : null,
			                   "sWidth": "40%",
			                   "mRender": function( data, type, row) {
				                	   return row.juriCapitulo.capiId + '. ' + row.juriCapitulo.capiDetalle;
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
		                	 "sWidth": "10%",
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarJuri" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
	
};

Admin.prototype.createCapituloDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
		
	    "scrollCollapse": true,
		"bAutoWidth": true,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
	    "sScrollY": "590px",
	    "bScrollCollapse": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Capítulo.</b>&nbsp&nbsp&nbsp Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID Capítulo",
		                	 "mData" : null,
		                	 "sWidth": "20%",
		                	 "mRender": function(data, type, row) {
		                         return row.capiId;
		                     }
		                 },
		                { 
			                   "sTitle": "Detalle Capítulo",
			                   "mData" : null,
			                   "sWidth": "60%",
			                   "mRender": function( data, type, row) {
				                	   return row.capiDetalle;
			                    }
			            },
			            {
		                	"sTitle": "Editar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
		                	 "sWidth": "20%",
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="editarCap" title="Editar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-pencil-square-o" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]	,
	});	
};

Admin.prototype.createAnioDatatable = function(aaData) {
	var self = this;
	self.oTable = $("#datatable").dataTable({
		"sScrollY": "590px",
		"scrollCollapse": true,
		"bAutoWidth": false,
		"bPaginate": true,
		"bFilter" : true,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).",
			
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			"oPaginate": {
	  	        "sPrevious": "Anterior",
		  	    "sNext": "Siguiente",
	  	     },
		      "sLengthMenu": '<b> Tabla Año.</b>&nbsp&nbsp&nbsp  Mostrar <select>'+
		        '<option value="10">10</option>'+
		        '<option value="20">20</option>'+
		        '<option value="30">30</option>'+
		        '<option value="40">40</option>'+
		        '<option value="50">50</option>'+
		        '<option value="-1">Todos</option>'+
		        '</select> resultados.'
			
		},
		
		"data": $.parseJSON(aaData) ,
		 "initComplete": function( settings, json ) {
			 $("#progressbar").hide();
		},
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "ID (Año)",
		                	 "mData" : null,
		                	 "sWidth": "15px",
		                	 "mRender": function( data, type, row) {
		                         return row.anioId ? row.anioId : 'null';
		                     }
		                 },
		                { 
			                   "sTitle": "Habilitado",
			                   "mData" : null,
			                   "sWidth": "40px",
			                   "mRender": function( data, type, row) {
				                	   return (row.anioHabilitado == 1) ? "SI" + self.deshabilitar : "NO" + self.habilitar;
			                    }
			            },
			            {
		                	"sTitle": "Eliminar",
		                	"mData": null,
		                	"bSortable": false,
		                	"bSearchable": false,
		                	 "sWidth": "40px",
			                "mRender": function( data, type, row) {
			                	return '<a href="javascript:void(0)" class="eliminar" title="Eliminar"><button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">&nbsp<i class="fa fa-minus" role="button"></i>&nbsp</button></a>';
			                }
			            	
			            }
		               ]
	});
	
	$("#datatable_wrapper");
};

Admin.prototype.removerDatos = function(obj,text) {
		$(obj + ' option').remove();
		$(obj).append($("<option></option>").val("-1").text(text));
};