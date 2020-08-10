function Otros() {
	
};

Otros.prototype.init = function() {
	this.initTable();
};

Otros.prototype.initTable = function() {
	
	var self = this;
	
	self.oTable = $("#otrosTrabajos").dataTable({
		
	    "bscrollCollapse": false,
		"bAutoWidth": true,
		"bPaginate": false,
		"bFilter" : false,
		"bLengthChange": true,
		"bProcessing":true,
		"bInfo": true,
		"bSort": true,
		"bStateSave": true,
		"bJQueryUI": true,
	    "bScrollCollapse": false,
	    "bDestroy": true,
		"oLanguage": {
			"sSearch": "Filtrar:",
			"sEmptyTable": "No se encontraron resultados.",
			"sInfo": "<b>Total: _TOTAL_ resultado(s).</b>",
			"sInfoEmpty": "No se encontraron resultados.",
			"sZeroRecords": "No se encontraron resultados",
			"sInfoFiltered": " - de _MAX_ archivos",
			
		},		
		"aaData": self.aaData,
		"aoColumns" :  [ 
		                 { 
		                	 "sTitle": "Título",
		                	 "mData" : null,
		                	 "sWidth" : "100%",
		                	 "mRender": function( data, type, row) {
		                         return '<a href="' + row.assetLink + '" target="_blank"><b>' + row.detalle + '</b></a>';
		                     }
		                 },
		                 { 
		                   "sTitle": "Descarga",
		                   "mData" : null,
		                   "sWidth" : "100%",
		                   "mRender": function( data, type, row) {
		                	   return '<a href="' + row.assetDescarga + '"><img src=' + self.imagenDescarga + ' </b></a>';
		                    }
		                }
		               ]	,
		"aoColumnDefs": [
		  	               { "bSortable": false, "aTargets": [ 1 ] },
		  	               { "bSearchable": false, "aTargets": [ 1 ]},
		  	     		]
	});


};

