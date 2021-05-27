$(document).ready(() => {

  $('#btn_limpiar').click(()=>{

    $('#color').val('');
    $('#mostrar_color').html('');

  });
  


  function validar_vacio(){
    
    if ($('#color').val() == '') {
      swal({
        title: "Upps..!",
        text: "No has Escrito un color",
        icon: "warning"
      });
    } else {

      $.ajax({

        type : 'POST',
        
        url : 'procesos/diccionario_color.php',

        data : {'color_seleccionado' : $('#color').val().toUpperCase()}, 

        success : respuesta =>{

          if(respuesta != "0"){

            if(respuesta == 'WHITE' || respuesta == 'YELLOW' || respuesta == 'LIME' || respuesta == "PINK" ){

              $('#mostrar_color').html(`
          
                <div class="alert text-center" role="alert" style = "color:${respuesta}; background-color: black";>
                  <h1>${respuesta}</h1>
                </div>
          
              `);

            } else {
              $('#mostrar_color').html(`
          
                <div class="alert text-center bg-light" role="alert" style = "color:${respuesta}; background-color: rgb(189, 189, 189)";>
                  <h1>${respuesta}</h1>
                </div>
          
              `);
            }

            
          } else {
            swal({
              title: "Upps..!",
              text: "No encontramos el color: " + $('#color').val(),
              icon: "error"
            });
            $('#color').val('');
            $('#mostrar_color').html('');
          }
          
        }



      });
    }
    
  }

  $('#btn_traducir').click(() => {
    validar_vacio();
  }); 


});