@section('styles-includes')
    @parent
    <link rel="stylesheet" href="assets/css/fullcalendar/fullcalendar.css">
@endsection

@extends('app.pages.site.main.main')

@section('title', 'Calendario de Agendamento')

@section('container-fluid')

<h1 class="text-center">Calendario de Agendamento</h1>
    <div class="container">
        @forelse($calendar as $calenda)
            <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span style="font-weight: 800;">Dados do Visitante</span>
                </div>
                <div class="panel-body">
                    <span class="text-info">Nome</span>: {{ $calenda->name }} <br>
                    <span class="text-info">Tipo de pessoa:</span> {{ $calenda->pessoa->pessoa }} <br>
                    <span class="text-info">E-mail:</span> {{ $calenda->email }} <br>
                    <span class="text-info">Telefone:</span> {{ $calenda->phone }} <br>
                    <span class="text-info">Celular:</span> {{ $calenda->cellphone }} <br>
                    <span class="text-info">Data do agendamento:</span> {{ $calenda->date }} <br>
                    <span class="text-info">Horário da visita:</span> {{ $calenda->horario->horario }} <br>
                    <span class="text-info">Serviços de interesse:</span> {{ $calenda->servicos }} <br>
                    <span class="text-info">Sua Mensagem:</span> {{ $calenda->message }} <br>
                    {{ $calendar->links() }}
                </div>
            </div>
            </div>
            @empty
            <p>Não há agendamento</p>
        @endforelse
        {{--<h2>{{ dd($calenda->horario) }}</h2>--}}
        <div class="col-md-6">
            <div class="info" data-dismiss="alert" aria-label="Close"></div>
            <div id='calendar'></div>
        </div>
    </div>
    {{--<div class="container">--}}
        {{--<div class="info" data-dismiss="alert" aria-label="Close"></div>--}}
        {{--<div id='calendar'></div>--}}
    {{--</div>--}}

@section('footer-section')
    @parent
@endsection

@endsection

@section('javascript-includes')
    @parent
    <script src="assets/js/moment/moment.js"></script>
    <script src="assets/js/moment/moment-pt-br.js"></script>
    <script src="assets/js/fullcalendar/fullcalendar.js"></script>
    <script src="assets/js/fullcalendar/fullcalendar-pt-br.js"></script>
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
          height: 380,
          customButtons: {
            myCustomButton: {
              text: 'Aviso!',
              click: function() {
                $('.info')
                  .addClass('alert alert-success')
                  .text('Colocar alguma informação para o cliente se guiar')
                  .css({'font-size': '14px','padding': '5px', 'margin-bottom': '10px', 'color': '#000'});
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
            center: 'agendaDay,agendaWeek,agendaFourDay',
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
    <script>
      $(document).ready(function(){
        var myNavBar = {

          flagAdd: true,

          elements: [],

          init: function (elements) {
            this.elements = elements;
          },

          add : function() {
            if(this.flagAdd) {
              for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
              }
              this.flagAdd = false;
            }
          },

          remove: function() {
            for(var i=0; i < this.elements.length; i++) {
              document.getElementById(this.elements[i]).className =
                document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
            }
            this.flagAdd = true;
          }

        };
        myNavBar.init(  [
          "header",
          "header-container",
          "brand"
        ]);

        function offSetManager(){

          var yOffset = 0;
          var currYOffSet = window.pageYOffset;

          if(yOffset < currYOffSet) {
            myNavBar.add();
          }
          else if(currYOffSet == yOffset){
            myNavBar.remove();
          }

        }

        window.onscroll = function(e) {
          offSetManager();
        }

        offSetManager();

      });
    </script>
@endsection
