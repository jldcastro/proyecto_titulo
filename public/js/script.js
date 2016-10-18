$("#registro").click(function()
{
    var datos = $("#codigo_usuario","#name","#email","#password","apellido_paterno","#apellido_materno","#rut_usuario","#tipo_usuario","#tipo_usuario").val();
    var ruta = "/usuario";
    var token = $("#token").val();

    $.ajax({
        url: ruta,
        headers:{'X-CSRF-TOKEN':token},
        type:'POST',
        dataType:'json',
        data:{codigo_usuario, name,email,password,apellido_patterno, apellido_materno, rut_usuario, tipo_usuario:datos},

        success:function(){
            ("#mensaje-success").fadeIn();
        },
        error:function(msj){
            console.log(msj.responseJSON.usuario);
        }
    });
});