$(document).ready(function() {    
    $('#datatable').DataTable({ 

		"order": [[ 1, "des" ]],
		"paging":   false,
        "ordering": true,
		"info":     false,  
		"buttons": true,
		"scrollX": true,

        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados para esta consulta, la Base de Datos no posee registros relacionados a este elemento en estos momentos.",
                "info": "Registros del _START_ al _END_ | Total: _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando los datos desde el servidor... por favor espere",
            },
        //para usar los botones   
        responsive: "true",
		dom: 'Bfotli',    
		//dom: 'Bfrtilp' original   
        buttons:[ 

			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel fa-lg"></i> Excel',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-dark',
				autoFilter: true,
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> PDF',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger',
				orientation: 'landscape',
				pageSize: 'LETTER',
				messageTop: 'FUNDELEC | Control de Accesos | Documento de Información Confidencial | Copía no Controlada'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> Imprimir',
				titleAttr: 'Imprimir',
				className: 'btn btn-warning',
				messageTop: 'FUNDELEC | Control de Accesos | Documento de Información Confidencial | Copía no Controlada',
			},

			
		]
		
	}); 
 
});
