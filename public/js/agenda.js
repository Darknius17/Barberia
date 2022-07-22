document.addEventListener('DOMContentLoaded', function() {

    let formulario = document.querySelector("#formulariomodal");

   var calendarEl = document.getElementById('agenda');
   var calendar = new FullCalendar.Calendar(calendarEl, {
     initialView: 'dayGridMonth',
     locale: "es",

     headerToolbar: {
         left: 'prev,next today',
         center: 'title',
         right: 'dayGridMonth,timeGridWeek,timeGridDay'
       },

       hiddenDays: [0],
       events: "http://localhost:8080/barberia1/barberia/public/agenda/reserva/show",

       businessHours: [ // specify an array instead
  {
    daysOfWeek: [ 1, 2, 3,4,5 ], // Monday, Tuesday, Wednesday
    startTime: '11:00', // 8am
    endTime: '21:00' // 6pm
  },
  {
    daysOfWeek: [ 6], // Thursday, Friday
    startTime: '15:00', // 10am
    endTime: '22:00' // 4pm
  }
],



 dateClick:function(info){

    formulario.reset();


    formulario.dia.value=info.dateStr;
    formulario.start.value=info.startStr;
    formulario.end.value=info.endStr;





    $("#evento").modal("show");
 },
 eventClick:function(info){
 var evento = info.event;
 console.log(evento);

 axios.post("http://localhost:8080/barberia1/barberia/public/agenda/reserva/editar/"+info.event.id).then((respuesta) =>{

    formulario.id.value = respuesta.data.id;
    formulario.title.value = respuesta.data.title;
    formulario.start.value = respuesta.data.start;
    formulario.end.value = respuesta.data.end;
    formulario.nombreCliente.value = respuesta.data.nombreCliente;
    formulario.email.value = respuesta.data.email;
    formulario.rut.value = respuesta.data.rut;
    formulario.telefono.value = respuesta.data.telefono;
    formulario.dia.value = respuesta.data.dia;
    formulario.hora.value = respuesta.data.hora;
    formulario.comentario.value = respuesta.data.comentario;
    formulario.id_servicio.value = respuesta.data.id_servicio;
    $("#evento").modal("show");

  }
  ).catch(
      error=>{
          if(error.response){
              console.log(error.response.data);
          }
      }
  )

 }



  });



  document.getElementById("btnGuardar").addEventListener("click",function(){

    enviarDatos("http://localhost:8080/barberia1/barberia/public/agenda/reserva/crear");

    alert("Se a reservado con exito su hora");

  });

  document.getElementById("btnEliminar").addEventListener("click", function (){

    enviarDatos("http://localhost:8080/barberia1/barberia/public/agenda/reserva/borrar/"+formulario.id.value);

    alert("Se a Eliminado con exito su hora");

  });

  document.getElementById("btnModificar").addEventListener("click",function(){

    enviarDatos("http://localhost:8080/barberia1/barberia/public/agenda/reserva/actualizar/"+formulario.id.value);

    alert("Se a Modificado con exito su hora");


  });

    function enviarDatos(url){


    const datos= new FormData(formulario);
    axios.post(url, datos).then((respuesta) =>{

    calendar.refetchEvents();
    $("#evento").modal("hide");

  }
  ).catch(
      error=>{
          if(error.response){
              console.log(error.response.data);
          }
      }
  )



}

calendar.render();
});

