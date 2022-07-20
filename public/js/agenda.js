
/*
document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("form");


  var calendarEl = document.getElementById('agenda');
  var calendar = new FullCalendar.Calendar(calendarEl, {

    initialView: 'dayGridMonth',
    locale:"es",

    headerToolbar: {

      left: 'prev,next today',
      center:'title',
      right: 'dayGridMonth,timeGridWeek,listWeek'

    },


    eventSource : [ "http://localhost:8080/barberia1/barberia/public/agenda/mostrar" ,
        {
          title  : 'formulario.nombreCliente',
          start  : 'formulario.dia',
          end    : 'fomrulario.dia'
        }




  ],





 dateClick:function(info){

    formulario.reset();

    formulario.nombreCliente=info.datos;
    formulario.dia.value=info.dateStr;

    $("#evento").modal("show");
 }



  });
  calendar.render();

  document.getElementById("btnGuardar").addEventListener("click",function(){
    const datos= new FormData(formulario);



    axios.post("http://localhost:8080/barberia1/barberia/public/agenda/crear", datos).then((respuesta) =>{
    $("#evento").modal("hide");

  }
  ).catch(
      error=>{
          if(error.response){
              console.log(error.response.data);
          }
      }
  )

  });



});
*/
