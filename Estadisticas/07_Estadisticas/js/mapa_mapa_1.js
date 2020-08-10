function Mapa() {
	this.map="";
	this.src="";
};

Mapa.prototype = new Layout;

Mapa.prototype.init = function() {
	Layout.prototype.init.call(this);
	var kmlLayer = this.initialize();
	google.maps.event.addDomListener(window, 'load', kmlLayer);
	this.setup(kmlLayer);
};

/**
 * Initializes the map and calls the function that creates polylines.
 */
Mapa.prototype.initialize = function() {
    this.map = new google.maps.Map(document.getElementById('map_canvas'), {
        center: new google.maps.LatLng(-40.35576659050737, -66.01839100683596),
        zoom: 4,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    });
    return kmlLayer = this.loadKmlLayer(this.src, this.map);	    
};

Mapa.prototype.setup = function(kmlLayer) {
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

    
    google.maps.event.addListener(kmlLayer, 'click', function (kmlEvent) {
        var text = kmlEvent.featureData.name;
        $("#JurisdiccionesMapa").val(parseInt(text.substring(5)));
        self.centrar(text.substring(5),self.map);
    });
    

    $("#JurisdiccionesMapa").change(function(e) {
    	e.preventDefault();
    	self.centrar( $("#JurisdiccionesMapa").val() ,self.map);
    });
    
    $("#AniosMapa").change(function(e) {
    	e.preventDefault();
    	if (!($('#AniosMapa').find(":selected").val() == "default"))
    	{
	    	self.removerDatos( "#DivisionesMapa", "Seleccione Titulo" );
	    	self.removerDatos("#ArchivosMapa", "Seleccione Archivo");
			if (!self.mostrarObjetoMap( "#DivisionesMapa", "#divisionesLabel", self.DivisionesUrl , { capituloID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() },true )) {
			
				self.mostrarObjetoMap( "#ArchivosMapa", "#archivosLabel", self.ArchivosUrl , { capituloID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() } );
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
    		if(!self.mostrarObjetoMap("#SubtitulosMapa", "#subtitulosLabel", self.SubtitulosUrl, {divisionID: $('#DivisionesMapa').find(":selected").val(), capituloID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() }, true)) {
    			self.mostrarObjetoMap( "#ArchivosMapa", "#archivosLabel", self.ArchivosUrl,{ divisionID: $('#DivisionesMapa').find(":selected").val(), capituloID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() } );
    			self.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo");
    		}
			
    	} else { self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo"); self.ocultarObjetoMap("#SubtitulosMapa", "subtitulosLabel", "Seleccione Subtítulo"); }
    	self.deshabilitarBotonesMap();
    });
    
    
	$('#SubtitulosMapa').change(function(e) {
	  	if (!( $("#SubtitulosMapa").find(":selected").val() == "default" )) {
	   		self.removerDatos("#ArchivosMapa", "Seleccione Archivo");
	   		self.mostrarObjeto("#ArchivosMapa",true,self.ArchivosUrl,{ subtituloID: $('#SubtitulosMapa').find(":selected").val(), divisionID: $('#DivisionesMapa').find(":selected").val(), capituloID:  $('#JurisdiccionesMapa').find(":selected").val(), anioID: $('#AniosMapa').find(":selected").val() });
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
	
	
};

/**
 * Adds a KMLLayer based on the URL passed. Clicking on a marker
 * results in the balloon content being loaded into the right-hand div.
 * @param {string} src A URL for a KML file.
 */
Mapa.prototype.loadKmlLayer = function(src, map) {
    var kmlLayer = new google.maps.KmlLayer(src, {
        suppressInfoWindows: true,
        preserveViewport: false,
        map: map
    });
    
    return kmlLayer;
};

Mapa.prototype.centrar = function(juris,map) {
	
	var self = this;
	if ($.isNumeric(juris))
	{
		
		$.ajax({
			url: self.obtenerCoordenadasUrl,
			data: { id: parseInt(juris) },
			type: 'POST',
			success: function(response, textStatus, xhr) {
				if ((response.zoom) && (response.latitud) && (response.longitud)) {
					map.setZoom(response.zoom);
					map.setCenter(new google.maps.LatLng(response.latitud,response.longitud));
					self.removerDatos( "#AniosMapa", "Seleccione Año" );
					self.mostrarObjetoMap( "#AniosMapa", "#aniosLabel", self.getAnioJurisdiccionesUrl, { id:  $('#JurisdiccionesMapa').find(":selected").val() } );

				} else {
					self.ocultarObjetoMap("#AniosMapa", "aniosLabel", "Seleccione Año");
				}
	    		self.ocultarObjetoMap("#DivisionesMapa","#divisionesLabel","Seleccione Título");
	    		self.ocultarObjetoMap("#SubtitulosMapa", "#subtitulosLabel", "Seleccione Subtítulo");
	    		self.ocultarObjetoMap("#ArchivosMapa","#archivosLabel","Seleccione Archivo");
	    		self.deshabilitarBotonesMap();
			},
			error: function(xhr, textStatus, errorThrown) {
                alert("ERROR: " + textStatus);
                return false;
            }				
		});
	}
	else {
			map.setCenter(new google.maps.LatLng(-40.35576659050737, -66.01839100683596));
			map.setZoom(4);
			self.ocultarTodo();
	}

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
				
			$("#formMapa").attr("action", response.link);
			$("#descripcionMapa").html(response.descripcion ? response.descripcion : "No hay descripción disponible.");
		},
		error: function(xhr, textStatus, errorThrown) {
            alert("ERROR: " + textStatus);
            return false;
        }					
	});
	
	this.mostrarObjetoMap( "#abrirJurisMapa");
	this.mostrarObjetoMap( "#descripcionMapa");
//	$("#formMapa").scrollTop($("#formMapa")[0].scrollHeight);

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
//		$(label).hide();
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
//			$(label).show();	
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
	
	
