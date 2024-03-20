import './bootstrap';


jQuery(document).ready(function($) {

    // Activar y des activar panell de botones al escoger una provincia
    $('#province').change(function(){
        if($(this).val() != null){
            $('#addProvinceBtn').addClass('hidden');
            $('#editProvinceBtn').removeClass('hidden');
            $('#deleteProvinceBtn').removeClass('hidden');
            $('#cancelProvinceBtn').removeClass('hidden');
            if(!$('#saveProvinceForm').hasClass('hidden')){
                $('#saveProvinceForm .form-control').val('');
                $('#saveProvinceForm .form-control').addClass('hidden');
                $('#saveProvinceForm').addClass('hidden');
                $('#provinceForm').removeClass('hidden');
            }
            
        }else{
            $('#addProvinceBtn').removeClass('hidden');
            $('#editProvinceBtn').addClass('hidden');
            $('#deleteProvinceBtn').addClass('hidden');
            $('#cancelProvinceBtn').addClass('hidden');
        }
    })

    //Activar el panel agregar
    $('#addProvinceBtn').click(function(e){
        e.preventDefault();
        $('#provinceForm').addClass('hidden');
        $('#saveProvinceForm').removeClass('hidden');
        $('#saveProvinceInput').removeClass('hidden');
        $('#saveProvinceInput').attr('data-action', 'add');
    });

    //Activar el panel de edición
    $('#editProvinceBtn').click(function(e){
        e.preventDefault();
        $('#provinceForm').addClass('hidden');
        $('#saveProvinceForm').removeClass('hidden');
        $('#saveProvinceInput').removeClass('hidden');
        $('#saveProvinceInput').attr('data-action', 'edit');
        $('#saveProvinceInput').val($('select[name="province"] option:selected').text())        ;
    });

    // Guardar una provincia editada
    $('#saveProvince').click(function(e){
        e.preventDefault();
        let newValueProvince = $('#saveProvinceInput').val();
        let idProvince = $('#province').val();
        var settings;

        if($('#saveProvinceInput').attr('data-action') == 'add'){
            settings = {
                "url": "/api/addProvince",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                  "description": newValueProvince
                }),
            };
              
        } else {
            settings = {
                "url": "/api/updateProvince",
                "method": "PUT",
                "timeout": 0,
                "headers": {
                  "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                  "id": idProvince,
                  "description": newValueProvince
                }),
            };
        }
        
        $.ajax(settings).done(function (response) {
            console.log(response);
            location.reload();
        });
    
    });

    // Eliminar una provincia
    $('#deleteProvinceBtn').click(function(e){
        e.preventDefault();

        let idProvince = $('#province').val();
        var settings = {
            "url": "/api/deleteProvince/",
            "method": "DELETE",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "id": idProvince
            }),
        };

        $.ajax(settings).done(function (response) {
            console.log(response);
            location.reload();
        });
        
    });
    
    $('#cancelProvinceBtn').click(function(e){
        location.reload();
    });

    $('#cancelProvince').click(function(e){
        $('#saveProvinceForm .form-control').val('');
        $('#saveProvinceForm .form-control').addClass('hidden');
        $('#saveProvinceForm').addClass('hidden');
        $('#provinceForm').removeClass('hidden');
    });
})