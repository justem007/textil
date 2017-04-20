<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faça seu Agendamento</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/fullcalendar/fullcalendar.css">
    <link rel="stylesheet" href="css/site/bootstrap.css">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1 class="text-center">Calendario de Agendamento</h1>
<div class="container">
    <div class="info" data-dismiss="alert" aria-label="Close"></div>
    <div id='calendar'></div>
</div>

<script src="js/site/jquery.js"></script>
<script src="js/site/bootstrap.js"></script>
{{--<script src="js/app.js"></script>--}}
<script src="js/moment/moment.js"></script>
<script src="js/moment/moment-pt-br.js"></script>
<script src="js/fullcalendar/fullcalendar.js"></script>
<script src="js/fullcalendar/fullcalendar-pt-br.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#calendar').fullCalendar({
        eventClick: function(event, jsEvent, view) {
          $("#calendar").show().data('event', event);
        },
        editable: true,
        selectable: true,
        selectHelper: true,
        scroolTime: '24:00:00',
        minTime: '08:00:00',
        maxTime: '17:00:00',
        unselectAuto: true,
        height: 690,
        customButtons: {
          myCustomButton: {
            text: 'Aviso Importante!',
            click: function() {
              $('.info')
                .addClass('alert alert-success')
                .text('Colocar alguma informação para o cliente se guiar')
                .css({'font-size': '16px','padding': '5px', 'margin-bottom': '10px', 'color': '#000'});
            }
          }
        },
        eventClick : function(){
          $('.info');
        },
//        dayClick: function(date, jsEvent, view) {
//
//          console.log('Clicou em: ' + date.format('DD-MM-YYYY'));
//
//          console.log('Coordenadas: ' + jsEvent.pageX + ',' + jsEvent.pageY);
//
//          console.log('Visão atual: ' + view.name);
//
//          // change the day's background color just for fun
//          $(this).css('background-color', 'red');
//
//        },
        navLinks: true,
        navLinkDayClick: function(date, jsEvent) {
          console.log('day', date.format()); // date is a moment
          console.log('coords', jsEvent.pageX, jsEvent.pageY);
        },
        nowIndicator: true,
        events: [
          {
            title: 'Horário Ocupado',
            start: '2017-03-10T12:30:00',
            end: '2017-03-10T14:30:00',
            description: 'Marcos Fernandes da Silva, Visitas as 15:00 até as 17:00',
            allDay : false,
          },
        ],
        eventColor: '#CCC',
        eventBackgroundColor: '#000000',
        eventBorderColor: '#069069',
        eventTextColor: '#FFFFFF',
        header: {
          left: 'title, myCustomButton',
          center: 'agendaDay, agendaWeek, agendaFourDay',
          nextYear: 'right-double-arrow',// buttons for switching between views
        },
        views: {
          agendaFourDay: {
            type: 'agenda',
            duration: { days: 10 },
            buttonText: '10 dias'
          }
        },
        themeButtonIcons: {
          prev: 'circle-triangle-w',
          next: 'circle-triangle-e',
          prevYear: 'seek-prev',
          nextYear: 'seek-next'
        },
        businessHours: {
          dow: [ 1, 2, 3, 4 ],
          start: '10:00',
          end: '18:00',
        },
        weekends: false,
        weekNumbersWithinDays: true,
        color: 'yellow',   // an option!
        textColor: 'black',
        backgroundColor: 'black',
        timeFormat: 'H(:mm)'
      })
    });
</script>
</body>
</html>
