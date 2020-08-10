function Layout() {

	this.aaData = new Array();
};



Layout.prototype.init = function() {
	this.initDialog();
	this.setupEvents();
};

Layout.prototype.initDialog = function() {
	
    /*
     * Seteo de Dialogs
     * 
     */
	
	
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
		dialogClass: 'dlgfixed',

	});
	
	
	$( "#indicadores" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 260,
		width: 500,
		show: {
			effect: "fade",
			duration: 1000
		},
		hide: {
			effect: "fade",
			duration: 1000
		},
		dialogClass: 'dlgfixed',

	});
	
	$( "#evolucion" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 240,
		width: 500,
		show: {
			effect: "fade",
			duration: 1000
		},
		hide: {
			effect: "fade",
			duration: 1000
		},
		dialogClass: 'dlgfixed',

	 });

	$( "#fallos" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 370,
		width: 500,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed',

	 });
		
	$( "#fuerJuris" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 490,
		width: 500,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed',

	});

		   
	$( "#selEstad" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 490,
		width: 500,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed',

	 });
	
	$( "#consulta" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 400,
		width: 500,
		show: {
			 effect: "fade",
			 duration: 1000
		},
		hide: {
			 effect: "fade",
			 duration: 1000
		},
		dialogClass: 'dlgfixed',

	 });
	
	$( "#contactenos" ).dialog({
		resizable: false,
		draggable: true,
		modal: true,
		autoOpen: false,
		height: 185,
		width: 500,
		show: {
			  effect: "fade",
			  duration: 1000
		},
		hide: {
			  effect: "fade",
			  duration: 1000
		},
		dialogClass: 'dlgfixed',

	});

	$(".dlgfixed").center();
	 	    
    /*
     * Fin seteo de dialogs
	 * 
	 * 
	 */

};
	
	
Layout.prototype.setupEvents = function() {
		var self = this;

		/*
		 * 
		 * HOVER BUTTONS
		 * 
		 * 
		 */
	
		$('#abrirEvolucion').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		$('#abrirFallo').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		$('#abrirArchivo').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		$('#abrirArchivoJuris').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },	
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		$('#descargarArchivo').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		$('#descargarArchivoJuris').hover(
		        function () {
		        	if (!$(this).hasClass('ui-state-disabled'))
		        		$(this).addClass('ui-state-hover');
		        },
		        function () {
		            $(this).removeClass('ui-state-hover');
		        }
		);
		
		  
		  /*
			 * INDICADORES
			 * ANIOS
			 * 
			 */
		
		
		  $("#indicadoresMenu").on("click",function(e) {
			  e.preventDefault();
			  if (!$("#indicadores").is(":visible"))
			  {
				  e.preventDefault();
				  self.obtenerDatos(self.indiAnioUrl, "#aniosIndicadores", {});
				  self.cerrarDialogs();
				  $("#indicadores").dialog("open");
			  }
		  });
		  
		  /*
			 * INDICADORES
			 * CAPITULO
			 * 
			 */
		  
		  $("#aniosIndicadores").change(function(e) {
     		  if (!($('#aniosIndicadores').find(":selected").val() == "default"))
			  {
				  self.removerDatos("#capituloIndicadores" , "Seleccione Fuero/Jurisdicción" );
				  self.mostrarObjeto("#capituloIndicadores", true, self.indiCapUrl, { id: $('#aniosIndicadores').find(":selected").val() });
 
		     } else self.ocultarObjeto("#capituloIndicadores", true, "Seleccione Fuero/Jurisdicción");
     		 self.ocultarObjeto("#archivoIndicadores", true, "Seleccione Archivo"); 
			 self.deshabilitarBotones("#abrirIndicadores","#descargarIndicadores");			 
			 
		  });
		  
		  /*
		   * 
		   * INDICADORES
		   * ARCHIVOS
		   * 
		   */
		  
		  $("#capituloIndicadores").change(function(e) {
				 if (!($('#capituloIndicadores').find(":selected").val() == "default")) {
					  self.removerDatos("#archivoIndicadores" , "Seleccione Archivo" );
					  self.mostrarObjeto("#archivoIndicadores", true, self.archivosIndicadoresUrl, { id: $('#capituloIndicadores').find(":selected").val(), anio: $('#aniosIndicadores').find(":selected").val() });
	 
			     } else self.ocultarObjeto("#archivoIndicadores", true, "Seleccione Archivo");
				 self.deshabilitarBotones("#abrirIndicadores","#descargarIndicadores");		  
		  });
		  
		  
		  /*
		   * INDICADORES
		   * OBTENER ARCHIVO
		   * 
		   */
		  
		  $("#archivoIndicadores").change(function(e) {
			     if (!($('#archivoIndicadores').find(":selected").val() == "default"))
					 self.habilitarBotones("#abrirIndicadores","#descargarIndicadores",self.getUrlDescargaIndicadores,{ id: $("#archivoIndicadores").find(":selected").val() });
				 else self.deshabilitarBotones("#abrirIndicadores","#descargarIndicadores");  		  
		  });	
		
		
		/*
		 * EVOLUCION
		 * PERIODO
		 * 
		 */
		
		  $("#evolucionMenu").on("click",function(e) {
			  if (!$("#evolucion").is(":visible"))
			  {
				  e.preventDefault();
				  self.obtenerDatos(self.periodosUrl, "#periodoEvolucion", {});
				  self.cerrarDialogs();
				  $("#evolucion").dialog("open");
			  }
		  });
		  
		  /*
		   * EVOLUCION
		   * ARCHIVO
		   * 
		   */
		  
		  $("#periodoEvolucion").change(function(e) {
				 if (!($('#periodoEvolucion').find(":selected").val() == "default")) {
					  self.removerDatos("#archivoEvolucion" , "Seleccione Archivo" );
					  self.mostrarObjeto("#archivoEvolucion", true, self.archivosEvoUrl, { id: $('#periodoEvolucion').find(":selected").val() });
	 
			     } else self.ocultarObjeto("#archivoEvolucion", true, "Seleccione Archivo");
				 self.deshabilitarBoton("#abrirEvolucion");			  
		  });
		  
		  /*
		   * EVOLUCION
		   * OBTENER ARCHIVO
		   * 
		   */
		  
		  $("#archivoEvolucion").change(function(e) {
			     if (!($('#archivoEvolucion').find(":selected").val() == "default"))
					 self.habilitarBoton("#abrirEvolucion",self.getUrlDescargaEvolucion, { id: $('#archivoEvolucion').find(":selected").val() } );
				 else self.deshabilitarBoton("#abrirEvolucion");		  
		  });		
		
		 /*
		  * FALLOS
		  * AÑOS
		  */


		  $("#fallosMenu").on("click",function(e) {
			  e.preventDefault();
			  if (!$("#fallos").is(":visible"))
			  {
				  e.preventDefault();
				  self.obtenerDatos(self.anioFallosUrl, "#aniosFallos", { lim: 2012 });
				  self.cerrarDialogs();
				  $("#fallos").dialog("open");
			  }
		  });
		  
		  /*
		   * FALLOS
		   * TIPOS
		   */
		  
		  $("#aniosFallos").change(function(e) {
			  if (!($('#aniosFallos').find(":selected").val() == "default"))
			  {

				  self.removerDatos("#tipoFallo", "Seleccione Tipo");
				  $("#tipoFallo").append($("<option></option>").val(1).text("Excluidos los de indole previsional")); 
				  $("#tipoFallo").append($("<option></option>").val(2).text("Previsionales"));
	 
				  self.mostrarObjeto("#tipoFallo",false);
				  
			  }
			  
			  else self.ocultarObjeto("#tipoFallo",true,"Seleccione Tipo");
	    	  self.ocultarObjeto("#archivoFallo",true,"Seleccione Fallo");
	    	  self.deshabilitarBoton("#abrirFallo");
		  });
		  
		  /*
		   * FALLOS
		   * ARCHIVOS
		   * 
		   */
		  $("#tipoFallo").change(function(e) {
			 if (!($('#tipoFallo').find(":selected").val() == "default")) {
				  self.removerDatos("#archivoFallo" , "Seleccione Archivo" );
				  self.mostrarObjeto("#archivoFallo", true, self.ArchivosFallosUrl, { anioID: $('#aniosFallos').find(":selected").val(), tipoID: $('#tipoFallo').find(":selected").val() })
 
		     } else self.ocultarObjeto("#archivoFallo", true, "Seleccione Fallo");
			 self.deshabilitarBoton("#abrirFallo");
		  });
		  
		  /*
		   * FALLOS
		   * OBTENER ARCHIVO
		   * 
		   */
		  
		  $("#archivoFallo").change(function(e) {
			 if (!($('#archivoFallo').find(":selected").val() == "default"))
				 self.habilitarBoton("#abrirFallo",self.getUrlDescargaFallos, { id: $('#archivoFallo').find(":selected").val() } );
			 else self.deshabilitarBoton("#abrirFallo");
		  });
		  
		  
			/*
			 *  
			 * AÑO
			 * AÑOS
			 */		
		 
		   $( "#porano ").on("click",function(e) {
			   e.preventDefault();
			   if (!$("#selEstad").is(":visible"))
			   {
				   
				   self.obtenerDatos(self.anioUrl, "#listadoAnios", {})
				   self.cerrarDialogs();
				   $("#selEstad").dialog("open");
		      }			   
		   });
		   
			   
		   /*
		    * 
		    * AÑO
		    * CAPITULOS
		    */
		   
		   
		   $('#listadoAnios').change(function(e) {
			  if (!($("#listadoAnios").find(":selected").val() == "default")) {
				  self.removerDatos( "#listadoCapitulos" , "Seleccione Fuero/Jurisdicción" );
				  self.mostrarObjeto('#listadoCapitulos', true, self.CapitulosUrl, { id:  $('#listadoAnios').find(":selected").val() });
			  } else self.ocultarObjeto('#listadoCapitulos', true, 'Seleccione Fuero/Jurisdicción');

			  self.ocultarObjeto('#listadoDivisiones', true, 'Seleccione Título');
			  self.ocultarObjeto("#listadoSubtitulos", true, "Seleccione Subtitulo");
			  self.ocultarObjeto('#listadoArchivos', true, 'Seleccione Archivo');
			  self.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");
		   });
		   
		   /*
		    * AÑOS
		    * DIVISIONES O ARCHIVOS
		    */
		   
		   $('#listadoCapitulos').change(function(e) {
			   if (!( $("#listadoCapitulos").find(":selected").val() == "default" ))
			   {
				   self.removerDatos("#listadoDivisiones", "Seleccione Título");
				   self.ocultarObjeto("#listadoArchivos",true,"Seleccione Archivo");
				   
				   if (!self.mostrarObjeto("#listadoDivisiones", true, self.DivisionesUrl ,{ capituloID:  $('#listadoCapitulos').find(":selected").val(), anioID: $('#listadoAnios').find(":selected").val() },true))
				   {
					   self.mostrarObjeto( "#listadoArchivos", true, self.ArchivosUrl , { capituloID:  $('#listadoCapitulos').find(":selected").val(), anioID: $('#listadoAnios').find(":selected").val() }); 
					   self.ocultarObjeto("#listadoDivisiones",true,"Seleccione Título");
					   
				   }
					   
	           } else { self.ocultarObjeto("#listadoArchivos",true,"Seleccione Archivo"); self.ocultarObjeto("#listadoDivisiones",true,"Seleccione Título"); }
			   self.ocultarObjeto("#listadoSubtitulos", true, "Seleccione Subtitulo");
			   self.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");				   
		   });
		   
		   /*
		    * AÑOS
		    * SUBTITULOS O ARCHIVOS
		    * 
		    */
		   
		   $('#listadoDivisiones').change(function(e) {
			   	if (!( $("#listadoDivisiones").find(":selected").val() == "default" )) {
			   		
			   		self.removerDatos("#listadoSubtitulos", "Seleccione Subtítulo");
			   		self.ocultarObjeto("#listadoArchivos", true, "Seleccione Archivo");
			   		
			   		if (!self.mostrarObjeto("#listadoSubtitulos",true,self.SubtitulosUrl, { divisionID: $('#listadoDivisiones').find(":selected").val(), capituloID:  $('#listadoCapitulos').find(":selected").val(), anioID: $('#listadoAnios').find(":selected").val() },true))
			   		{
						   self.mostrarObjeto( "#listadoArchivos", true, self.ArchivosUrl , { divisionID: $('#listadoDivisiones').find(":selected").val(), capituloID:  $('#listadoCapitulos').find(":selected").val(), anioID: $('#listadoAnios').find(":selected").val() }); 
						   self.ocultarObjeto("#listadoSubtitulos",true,"Seleccione Subtítulo");
			   		}
			   	} else { self.ocultarObjeto("#listadoArchivos",true,"Seleccione Archivo"); self.ocultarObjeto("#listadoSubtitulos", true, "Seleccione Subtitulo"); }
		   		self.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");
		   });
		   
		   /*
		    * AÑOS
		    * ARCHIVOS
		    * 
		    */
		   
		   $('#listadoSubtitulos').change(function(e) {
			   	if (!( $("#listadoSubtitulos").find(":selected").val() == "default" )) {
			   		self.removerDatos("#listadoArchivos", "Seleccione Archivo");
			   		self.mostrarObjeto("#listadoArchivos",true,self.ArchivosUrl,{ subtituloID: $('#listadoSubtitulos').find(":selected").val(), divisionID: $('#listadoDivisiones').find(":selected").val(), capituloID:  $('#listadoCapitulos').find(":selected").val(), anioID: $('#listadoAnios').find(":selected").val() });
			   	} else self.ocultarObjeto("#listadoArchivos",true,"Seleccione Archivo");
		   		self.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");
		   });
		   
		   
		   
		   /*
		    * AÑOS
		    * OBTENER ARCHIVO
		    * 
		    */
		   
		   $("#listadoArchivos").change(function(e) {
			   if (!($('#listadoArchivos').find(":selected").val() == "default"))
					self.habilitarBotones("#abrirArchivo","#descargarArchivo",self.getUrlDescarga,{ id: $('#listadoArchivos').find(":selected").val() },"#descripcion");
			   else self.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");
		   });
		   
	   
		   /*
		    * JURISDICCIONES
		    * JURISDICCIONES
		    */
		   
		   $( "#porfuerjuris" ).on("click",function(e) {
			   e.preventDefault();
				if (!$('#fuerJuris').is(":visible"))
				{
					
					self.obtenerDatos(self.getJurisUrl, "#listadoJurisdicciones", { id:  $('#listadoJurisdicciones').find(":selected").val() })
					self.cerrarDialogs();
					$("#fuerJuris").dialog("open");
				}
			});		 
		   
		   /*
		    * JURISDICCIONES
		    * AÑOS
		    */
		   
		   $('#listadoJurisdicciones').change(function(e) {
			  if (!($('#listadoJurisdicciones').find(":selected").val() == "default"))
			  {
				  self.removerDatos( "#listadoAniosJuris" , "Seleccione Año" );
				  self.mostrarObjeto( "#listadoAniosJuris", true, self.getAnioJurisdiccionesUrl , { id:  $('#listadoJurisdicciones').find(":selected").val() }); 
			  } else self.ocultarObjeto('#listadoAniosJuris', true, 'Seleccione Año');

			  self.ocultarObjeto('#listadoDivisionesJuris', true, 'Seleccione Título');
			  self.ocultarObjeto("#listadoSubtitulosJuris", true, "Seleccione Subtitulo");
			  self.ocultarObjeto('#listadoArchivosJuris', true, 'Seleccione Archivo');
			  self.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris","#descripcionJuris");

		   });
		   
		   /*
		    * JURISDICCIONES
		    * DIVISIONES/ARCHIVOS
		    * 
		    */
		   
		   
		   $('#listadoAniosJuris').change(function(e) {
			   if (!($('#listadoAniosJuris').find(":selected").val() == "default")) {
				   
				   self.removerDatos("#listadoDivisionesJuris", "Seleccione Título");
				   self.ocultarObjeto("#listadoArchivosJuris",true,"Seleccione Archivo");
				   if (!self.mostrarObjeto("#listadoDivisionesJuris", true, self.DivJurisUrl ,{ juriID:  $('#listadoJurisdicciones').find(":selected").val(), anioID: $('#listadoAniosJuris').find(":selected").val() },true))
				   {
					   self.mostrarObjeto( "#listadoArchivosJuris", true, self.ArchJurisUrl , { juriID:  $('#listadoJurisdicciones').find(":selected").val(), anioID: $('#listadoAniosJuris').find(":selected").val() }); 
					   self.ocultarObjeto("#listadoDivisionesJuris",true,"Seleccione Título");
				   } 				   
			   } else { self.ocultarObjeto("#listadoArchivosJuris",true,"Seleccione Archivo"); self.ocultarObjeto("#listadoDivisionesJuris",true,"Seleccione Título"); }
			   self.ocultarObjeto("#listadoSubtitulosJuris", true, "Seleccione Subtitulo");
			   self.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris","#descripcionJuris");				   
		   });
		
		   
		   /*
		    * JURISDICCIONES
		    * SUBTITULOS O ARCHIVOS
		    * 
		    */
		   
		   $('#listadoDivisionesJuris').change(function(e) {
			   	if (!( $("#listadoDivisionesJuris").find(":selected").val() == "default" )) {
			   		
			   		self.removerDatos("#listadoSubtitulosJuris", "Seleccione Subtítulo");
			   		self.removerDatos("#listadoArchivosJuris", "Seleccione Archivo");
			   		
			   		if (!self.mostrarObjeto("#listadoSubtitulosJuris",true,self.SubtJurisUrl , { divisionID: $('#listadoDivisionesJuris').find(":selected").val(), juriID:  $('#listadoJurisdicciones').find(":selected").val(), anioID: $('#listadoAniosJuris').find(":selected").val() },true))
			   		{
						   self.mostrarObjeto( "#listadoArchivosJuris", true, self.ArchJurisUrl , { divisionID: $('#listadoDivisionesJuris').find(":selected").val(), juriID:  $('#listadoJurisdicciones').find(":selected").val(), anioID: $('#listadoAniosJuris').find(":selected").val() }); 
						   self.ocultarObjeto("#listadoSubtitulosJuris",true,"Seleccione Subtítulo");
			   		}
			   	} else { self.ocultarObjeto("#listadoArchivosJuris",true,"Seleccione Archivo"); self.ocultarObjeto("#listadoSubtitulosJuris", true, "Seleccione Subtitulo"); }
		   		self.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris","#descripcionJuris");
		   });
		   
		   /*
		    * JURISDICCIONES
		    * ARCHIVOS
		    * 
		    */
		   
		   $('#listadoSubtitulosJuris').change(function(e) {
			   	if (!( $("#listadoSubtitulosJuris").find(":selected").val() == "default" )) {
			   		self.removerDatos("#listadoArchivosJuris", "Seleccione Archivo");
			   		self.mostrarObjeto("#listadoArchivosJuris",true,self.ArchJurisUrl,{ subtituloID: $('#listadoSubtitulosJuris').find(":selected").val(), divisionID: $('#listadoDivisionesJuris').find(":selected").val(), juriID:  $('#listadoJurisdicciones').find(":selected").val(), anioID: $('#listadoAniosJuris').find(":selected").val() });
			   	} else self.ocultarObjeto("#listadoArchivosJuris",true,"Seleccione Archivo");
		   		self.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris","#descripcionJuris");
		   });		   
		   
		   
		   /*
		    * JURISDICCIONES
		    * OBTENER ARCHIVO
		    */
		   $('#listadoArchivosJuris').change(function(e) {
			   if (!($('#listadoArchivosJuris').find(":selected").val() == "default"))
					self.habilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris",self.getUrlDescarga,{ id: $('#listadoArchivosJuris').find(":selected").val() },"#descripcionJuris");
			   else self.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris","#descripcionJuris");
		   });


		   /*
		    * CLICKS EN MENU
		    * 
		    */
	
			$("#lugConsulta").on("click",function(e) {
				e.preventDefault();
				self.cerrarDialogs();
				$( "#consulta" ).dialog( "open" );
				


			});
			
			$("#contact").on("click",function(e) {
				e.preventDefault();
				self.cerrarDialogs();
				$( "#contactenos" ).dialog( "open" );
				
			});
			

			
			/*
			 * 
			 * RESETEO DE DIALOGS
			 * 
			 */
			
			$('#alertaAceptar').on("click",function(e) {				
				$("#ALERTA").dialog("close");
				$("#alertaMensaje").empty();
			});
			
			
			
			 $('#selEstad').bind('dialogclose', function(event) {
				 self.cerrarTodo();
			 });
			 
			 $('#fuerJuris').bind('dialogclose', function(event) {
				 self.cerrarTodoJuris();
			 });
			 
			 $('#fallos').bind('dialogclose', function(event) {
				 self.cerrarFallos();
			 });
			 
			 $('#evolucion').bind('dialogclose', function(event) {
				self.cerrarEvolucion(); 
			 });
			 
			 $('#indicadores').bind('dialogclose', function(event) {
					self.cerrarIndicadores(); 
			});
};
	

	
	/*
	 * FUNCIONES DE RESET
	 */
	
Layout.prototype.cerrarDialogs = function() {
		if ($("#selEstad").dialog("isOpen")) {
			$("#selEstad").dialog("close");
		}
		if ($("#fuerJuris").dialog("isOpen")) {
			$("#fuerJuris").dialog("close");
		}
		if ($("#consulta").dialog("isOpen")) {
			$("#consulta").dialog("close");
		}
		if ($("#contactenos").dialog("isOpen")) {
			$("#contactenos").dialog("close");
		}
		if ($("#fallos").dialog("isOpen")) {
			$("#fallos").dialog("close");
		}
		if ($("#evolucion").dialog("isOpen")) {
			$("#evolucion").dialog("close");
		}	
		if ($("#indicadores").dialog("isOpen")) {
			$("#indicadores").dialog("close");
		}	
};
		
Layout.prototype.ocultarObjeto = function(obj,label,text) {
		var self = this;
		$(obj).attr('disabled', 'disabled').addClass('ui-state-disabled');
		if (label)
			self.removerDatos(obj,text);

};

Layout.prototype.mostrarObjeto = function(obj,label,url,json,async) {
		var self = this;
		var result = true;
		$(obj).removeAttr('disabled').removeClass('ui-state-disabled');
		if (label)
			result = self.obtenerDatos(url,obj,json,async);
		return result;
};
	

Layout.prototype.removerDatos = function(obj,text) {
   		$(obj + ' option').remove();
   		$(obj).append($("<option></option>").val("default").text(text));
};
	
	
Layout.prototype.obtenerDatos = function(url,obj,json,async) {
		var resultado = 0;
		$.ajax({
			url: url,
			data: json,
			type: 'POST',
			async: (!async),
			success: function(response, textStatus, xhr) {
				resultado = response.length;
				$.each(response, function() {
					$(obj)
					.append($("<option></option>")
							.val(this.id)
							.text(this.detalle)) 
				});
			},
			error: function(xhr, textStatus, errorThrown) {
                alert("ERROR: " + textStatus);
                return false;
            }
		});
		
		return (resultado != 0) ? true : false;
};
	
Layout.prototype.habilitarBoton = function(btn,url,json) {
		$.ajax({
			url: url,
			data: json,
			type: 'POST',
			async: false,
			success: function(response, textStatus, xhr) {
				$(btn).attr("href",response.link);
		
			},
			error: function(xhr, textStatus, errorThrown) {
                alert("ERROR: " + textStatus);
                return false;
            }
		});
		this.mostrarObjeto( btn , false );
};
	
Layout.prototype.deshabilitarBoton = function(btn) {
		this.ocultarObjeto( btn , false);
};
	
Layout.prototype.habilitarBotones = function(btn1,btn2,url,json,tArea) {
		var self = this;
		
		$.ajax({
			url:url,
			data:json,
			type:'POST',
			async:false,
			success: function(response, textStatus, xhr) {
				if (response.descarga) {
					$(btn2).attr("href",response.descarga);
					self.mostrarObjeto(btn2, false);					
				}
				else {
					self.ocultarObjeto(btn2, false);
					$(btn2).removeAttr("href");
				}
				
				
				
				if (response.link) {
					$(btn1).attr("href",response.link);
					self.mostrarObjeto( btn1, false);
					
				} else {
					self.ocultarObjeto(btn1, false);
					$(btn1).attr("href","javascript:void(0)");
				}
				
				
				
				if (tArea) {
					$(tArea).empty();
					$(tArea).html(response.descripcion ? response.descripcion : "No hay descripción disponible.");					
				}
				
				if (response.comentario) {
					self.showPopUp(response.comentario);
				}

			},
			error: function(xhr, textStatus, errorThrown) {
                alert("ERROR: " + textStatus);
                return false;
            }		
			
		});
	
		
};

Layout.prototype.showPopUp = function(mensaje) {
	$( "#ALERTA" ).dialog( "open" );
	$("#alertaMensaje").empty();
	$("#alertaMensaje").append(mensaje);	
};
	
Layout.prototype.deshabilitarBotones = function(abrirBtn,descargarBtn,tArea) {
		this.ocultarObjeto( abrirBtn, false);
		this.ocultarObjeto( descargarBtn, false);
		$(tArea).empty();
		$(tArea).html("Descripción del archivo a solicitar.");
		$(abrirBtn).attr("href","javascript:void(0)");
		$(descargarBtn).removeAttr("href");
};
	
Layout.prototype.cerrarFallos = function() {
		this.removerDatos( "#aniosFallos" , "Seleccione Año" );
		this.ocultarObjeto( "#tipoFallo", true, "Seleccione Tipo" );
		this.ocultarObjeto( "#archivoFallo",true, "Seleccione Fallo" );
		this.deshabilitarBoton( "#abrirFallo" );
};
	
Layout.prototype.cerrarEvolucion = function() {
		this.removerDatos( "#periodoEvolucion", "Seleccione Período");
		this.ocultarObjeto( "#archivoEvolucion",true, "Seleccione Archivo");
		this.deshabilitarBoton("#abrirEvolucion");		
};
	
Layout.prototype.cerrarIndicadores = function() {
		  this.removerDatos('#aniosIndicadores','Seleccione Año');
		  this.ocultarObjeto('#capituloIndicadores',true,'Seleccione Fuero/Jurisdicción');
		  this.ocultarObjeto('#archivoIndicadores', true, 'Seleccione Archivo');
		  this.deshabilitarBotones("#abrirIndicadores","#descargarIndicadores");
};
	
	
Layout.prototype.cerrarTodo = function() {
		  this.removerDatos('#listadoAnios','Seleccione Año');
		  this.ocultarObjeto('#listadoCapitulos', true, 'Seleccione Fuero/Jurisdicción');
		  this.ocultarObjeto('#listadoDivisiones', true, 'Seleccione Título');
		  this.ocultarObjeto('#listadoArchivos', true, 'Seleccione Archivo');
		  this.ocultarObjeto("#listadoSubtitulos", true,'Seleccione Subtítulo');
		  this.deshabilitarBotones("#abrirArchivo","#descargarArchivo","#descripcion");
};
	
	
Layout.prototype.cerrarTodoJuris = function() {
		  this.removerDatos('#listadoJurisdicciones','Seleccione Jurisdicción');
		  this.ocultarObjeto('#listadoAniosJuris', true, 'Seleccione Año');
		  this.ocultarObjeto('#listadoDivisionesJuris', true, 'Seleccione Título');
		  this.ocultarObjeto("listadoSubtitulosJuris", true, 'Seleccione Subtítulo')
		  this.ocultarObjeto('#listadoArchivosJuris', true, 'Seleccione Archivo');
		  this.deshabilitarBotones("#abrirArchivoJuris","#descargarArchivoJuris");
};
