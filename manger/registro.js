$(document).ready(function(){
    $('#boton_registrar').click(function(){
        if($('#nombre').val()==''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'campo nombre vacio',
            })
        } else{
            if($('#apellido_paterno').val()==''){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Apellido Paterno vacio',
                })
            }else{
                if($('#apellido_materno').val()==''){
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Apellido Materno vacio',
                    })
                }else{
                    if($('#empleado').val()==''){
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Numero de Empleado vacio',
                        })
                    }else{
                        if($('#email').val()==''){
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Correo Electronico vacio',
                            })
                        }else{
                            if($('#contrasenia').val()==''){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Contrasenia vacio',
                                })
                            }else{
                                if($('#confirmar_contrasenia').val()==''){
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: 'Confirmar Constrasenia vacio',
                                    })
                                
                                }else{
                                    if($("#contrasenia").val()==$('#confirmar_contrasenia').val()){
                                        console.log('genial')
                                        $.ajax({
                                            url:'../control/controlRegistro.php',
                                            data:$('#form').serialize(),
                                            type:'POST',
                                            success: (respuesta)=>{
                                                console.log(respuesta);
                                            }
                                        })
                                    }else{
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'contrasenia diferente intente de nuevo',
                                        })
                                    }
                                    
                                }
                            }
                        }
                    }
                }
            }
        }
    })
        


})
