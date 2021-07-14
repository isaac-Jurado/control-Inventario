$(document).ready(function(){
    //? funcion para que al dar clik en el boton  lea los datos
    $('#boton_iniciar').click(function(){
        if($('#no_empleado').val()==''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'No. Empleado vacio',
            })
        }else{
            if($('#login_contrasenia').val()==''){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Contrase;a vacio',
                })
            }else{
                //? se leen los datos para inicar sesion
                let usuario= $('#no_empleado').val()
                let contrasenia=$('#login_contrasenia').val()
                if(usuario=='1234' && contrasenia=='12345678'){
                    //? redirige a otra (url) vista
                    //! prguntar como hacer para regresar al login y no volver a entrar
                    //! hasta colocar los datos
                    window.location.href ='view/inicio_root.php'
                } else if(usuario=='12345' && contrasenia=='12345678'){
                    window.location.href ='view/inicio_consultor.php'
                }
            }
        }





         
    })

    
    
})