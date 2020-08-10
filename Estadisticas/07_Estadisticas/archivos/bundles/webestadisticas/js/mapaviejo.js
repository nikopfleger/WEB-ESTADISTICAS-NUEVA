function Mapa() {
};

Mapa.prototype = new Layout;

Mapa.prototype.init = function() {
	Layout.prototype.init.call(this);
	this.setup();
};

Mapa.prototype.setup = function() {
	var self = this;
    
	$('#abrirJurisMapa').hover(
	        function () {
	        	if (!$(this).hasClass('ui-state-disabled'))
	        		$(this).addClass('ui-state-hover');
	        },
	        function () {
	            $(this).removeClass('ui-state-hover');
	        }
	);
	
	$('#descargarJurisMapa').hover(
	        function () {
	        	if (!$(this).hasClass('ui-state-disabled'))
	        		$(this).addClass('ui-state-hover');
	        },
	        function () {
	            $(this).removeClass('ui-state-hover');
	        }
	);
	
	
	
    self.ocultarTodo();
    self.obtenerDatos(self.getJurisUrl, $("#JurisdiccionesMapa") );

    
    $("#JurisdiccionesMapa").change(function(e) {
    	e.preventDefault();
    	self.seleccionarJuris();
    });
    
    $("#AniosMapa").change(function(e) {
    	e.preventDefault();
    	if (!($('#AniosMapa').find(":selected").val() == "default"))
    	{
	    	self.removerDatos( "#DivisionesMapa", "Seleccione Titulo" );
	    	self.removerDatos("#ArchivosMapa", "Seleccione Archivo");
			if (!self.mostrarObjetoMap( "#DivisionesMapa", "#divisionesLabel", self.DivJurisUrl , { juriID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() },true )) {
			
				self.mostrarObjetoMap( "#ArchivosMapa", "#archivosLabel", self.ArchJurisUrl , { juriID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() } );
				self.ocultarObjetoMap("#DivisionesMapa","#divisionesLabel","Seleccione Título");
			}
				
    	} else { self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo"); self.ocultarObjetoMap("#DivisionesMapa","#divisionesLabel","Seleccione Título"); }
    	self.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo");
    	self.deshabilitarBotonesMap();

    });
    
    $("#DivisionesMapa").change(function(e) {
    	e.preventDefault();
    	if (!($('#DivisionesMapa').find(":selected").val() == "default"))
    	{
    		self.removerDatos("#SubtitulosMapa", "Seleccione Subtítulo");
    		self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo");
    		if(!self.mostrarObjetoMap("#SubtitulosMapa", "#subtitulosLabel", self.SubtJurisUrl, {divisionID: $('#DivisionesMapa').find(":selected").val(), juriID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() }, true)) {
    			self.mostrarObjetoMap( "#ArchivosMapa", "#archivosLabel", self.ArchJurisUrl,{ divisionID: $('#DivisionesMapa').find(":selected").val(), juriID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() } );
    			self.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo");
    		}
			
    	} else { self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo"); self.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo"); }
    	self.deshabilitarBotonesMap();
    });
    
    
	$('#SubtitulosMapa').change(function(e) {
	  	if (!( $("#SubtitulosMapa").find(":selected").val() == "default" )) {
	   		self.removerDatos("#ArchivosMapa", "Seleccione Archivo");
	   		self.mostrarObjeto("#ArchivosMapa",true,self.ArchJurisUrl,{ subtituloID: $('#SubtitulosMapa').find(":selected").val(), divisionID: $('#DivisionesMapa').find(":selected").val(), juriID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() });
	   	} else self.ocultarObjeto("#ArchivosMapa",true,"Seleccione Archivo");
	  	self.deshabilitarBotonesMap();
	});		
    
   
    $("#ArchivosMapa").change(function(e) {
    	e.preventDefault();
    	if (!($('#ArchivosMapa').find(":selected").val() == "default"))
    		self.habilitarBotonesMap( self.getUrlDescarga, { id: $('#ArchivosMapa').find(":selected").val() } );
    	else self.deshabilitarBotonesMap();

    	
    });
    
    $("#tooltipSelMapaButton").click(function(e) {
    	$("#tooltipDiv").remove();
    });
    
    $(".poly").click(function(e) {
    	self.seleccionarJuris(parseInt($(this).attr("name").substring(4)));
    });
	
	
};

Mapa.prototype.seleccionarJuris = function(juris) {
	var self= this;
	if (juris) 
		$("#JurisdiccionesMapa").val(juris);
	
	  if (!($('#JurisdiccionesMapa').find(":selected").val() == "default"))
	  {
			self.removerDatos( "#AniosMapa", "Seleccione Año" );
			self.mostrarObjetoMap( "#AniosMapa", "#aniosLabel", self.getAnioJurisdiccionesUrl, { id:  $('#JurisdiccionesMapa').find(":selected").val() } );
	  } else self.ocultarObjetoMap("#AniosMapa", "aniosLabel", "Seleccione Año");

	  self.ocultarObjetoMap("#DivisionesMapa","#divisionesLabel","Seleccione Título");
	  self.ocultarObjetoMap("#SubtitulosMapa", "#subtitulosLabel", "Seleccione Subtítulo");
	  self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo");
	  self.deshabilitarBotonesMap();	
};

Mapa.prototype.habilitarBotonesMap = function(url,json) {
	var self = this;

	$.ajax({
		url: url,
		data: json,
		type: 'POST',
		async: false,
		success: function(response, textStatus, xhr) {
			
			if (response.descarga) {
				$("#descargarJurisMapa").attr("href",response.descarga);
				self.mostrarObjeto("#descargarJurisMapa", false);					
			}
			else {
				self.ocultarObjeto("#descargarJurisMapa", false);
				$("#descargarJurisMapa").removeAttr("href");
			}
			
			if (response.link) {
				$("#abrirJurisMapa").attr("href", response.link);
				self.mostrarObjetoMap( "#abrirJurisMapa");
			} else {
				$("#abrirJurisMapa").attr("href", "javascript:void(0)");
				self.ocultarObjetoMap( "#abrirJurisMapa");
			}
			
			if (response.comentario) {
				self.showPopUp(response.comentario);
			}
				
			
			$("#descripcionMapa").html(response.descripcion ? response.descripcion : "No hay descripción disponible.");
		},
		error: function(xhr, textStatus, errorThrown) {
            alert("ERROR: " + textStatus);
            return false;
        }					
	});
	
	
	this.mostrarObjetoMap( "#descripcionMapa");

};

Mapa.prototype.deshabilitarBotonesMap = function() {
	$("#descripcionMapa").empty();
	$("#descripcionMapa").html("Descripción del archivo a solicitar.");
	$("#descargarJurisMapa").removeAttr("href");
	this.ocultarObjetoMap( "#abrirJurisMapa");
	this.ocultarObjetoMap( "#descargarJurisMapa");
	this.ocultarObjetoMap( "#descripcionMapa" );
};


Mapa.prototype.ocultarObjetoMap = function(obj,label,text) {
	var self = this;
	$(obj).parent().hide();
	$(obj).prop('disabled', true).addClass('ui-state-disabled');
	if (label) {
		self.removerDatos(obj,text);
	}
};

Mapa.prototype.mostrarObjetoMap = function(obj,label,url,json,async) {
	var self = this;
	var result = true;
	$(obj).parent().show();
	$(obj).prop('disabled', false).removeClass('ui-state-disabled');
	$("#formMapa").scrollTop($("#formMapa")[0].scrollHeight);
	if (label) {
			result = self.obtenerDatos(url,obj,json,async);
	}
	return result;
};

Mapa.prototype.ocultarTodo = function() {
	this.ocultarObjetoMap( "#AniosMapa", "#aniosLabel", "Seleccione Año" );
	this.ocultarObjetoMap( "#DivisionesMapa", "#divisionesLabel", "Seleccione Título" );
	this.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo");
	this.ocultarObjetoMap( "#ArchivosMapa", "#archivosLabel", "Seleccione Archivo" );
	this.ocultarObjetoMap( "#descargarJurisMapa" );
	this.ocultarObjetoMap( "#abrirJurisMapa" );	
	this.ocultarObjetoMap( "#descripcionMapa");
};