document.addEventListener('DOMContentLoaded', function() {


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
       events: baseURL + "/reserva/show",



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





});
calendar.render();
});

