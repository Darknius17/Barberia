
document.addEventListener('DOMContentLoaded', function() {

   let formulario1 = document.querySelector("form");

  var calendarEl = document.getElementById('calendario');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",

    headerToolbar: {
        left: 'prev,next today myCustomButton',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      dateClick:function(infos){

        $("#events").modal("show");


      }


  });

  calendar.render();

  document.getElementById("btnSave").addEventListener("click", function(){

    const dates = new FormData(formulario1);
    console.log(formulario1.title.value);
    console.log(formulario1.descripcion.value);
    console.log(formulario1.start.value);

    axios.post("http://localhost:8080/barberia1/barberia/public/agendamiento/agregar", dates).
    then(


    (respuesta) => {

        $("#events").modal("hide");

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
