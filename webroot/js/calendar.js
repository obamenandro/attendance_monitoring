$( document ).ready( function(){
  
      var weekName = [{ 1: 'sun', 2: 'mon', 3: 'tue', 4: 'wed', 5: 'thu', 6: 'fri', 7: 'sat'}];
      var monthName = [{ 1: 'January', 2: 'February', 3: 'March', 4: 'April', 5: 'May', 6: 'June', 7: 'July', 8: 'August', 9: 'September', 10: 'October', 11: 'November', 12: 'December'}];
  
      // POPULATING DAYS OF WEEK
      weekName.forEach( function ( k,v ) {
        for ( var i = 1; i <= 7; i++ ) {
          $( '.js-week' ).append( '<li class="calendar__list-weeks"><div class="calendar__weeks-day '+ k[i] +'" >' + k[i] + ' </div></li> ' );
        }
      });

      var month = new Date().getMonth() + 1; // CURRENT MONTH
      var year =  new Date().getFullYear(); // CURRENT YEAR
      showMonth(month, year)
      // FUNCTION DISPLAYING DATA FROM JSON
      function showMonth( month, year ) {
      
          // MAKE BUTTONS CLICKABLE
          $( '.calendar' ).addClass('js-loading-opacity');
          $('.js-loading').show();
  
          $.ajax({
            type: 'POST',
            url:  '/files/calendar_event.json',
            data:  {
              'month':month,
              'year':year,
            },
            success: function( result ) {
                  var data = JSON.parse( result );
                  var startWeek = moment( data.year + '-' + data.month +'-'+ 1, "YYYY-MM-DD" ).startOf( 'month' ).week();
                  var endWeek = moment( data.year + '-' + data.month +'-'+ 1, "YYYY-MM-DD" ).endOf( 'month' ).week();
                  var calendar = [];
  
                  // GET MONTH AND YEAR
                  monthName.forEach( function ( k,v ) {
                      $( '.js-yearMonths' ).text( data.year + " " + k[data.month] );
                  });
  
                  // GET 7 DAYS IN 1 MONTH
                  if ( endWeek != 1 ) {
                      for ( var week = startWeek; week < endWeek + 1; week++ ) {
                        getWeek ( week, calendar, data );
                      }
                  }
                  else if ( startWeek > 48) {
                      for ( var week = startWeek; week < startWeek + 5 ; week++ ) {
                        getWeek ( week, calendar, data );
                      }
                  }
                  else {
                      for ( var week = startWeek; week < startWeek + 6 ; week++ ) {
                        getWeek ( week, calendar, data );
                      }
                  }
  
                  //POPULATE LIST OF DATES
                  var showDate ="";
                  var countWeek;
                  calendar.forEach( function( key, index, value ){
                      countWeek = Object.keys(value).length;
                      showDate = showDate + '<ul class="js-'+ index +'">'
                      for ( var a = 0; a <= 6; a++ ) {
                          showDate = showDate + '<li class="calendar__days-list date-' + a + '" ><div class="calendar__days-number" data-index="' + data.year + '-' + data.month + '-' + parseInt( moment(value[index].days[a]._d).format('DD') ) +'"><span>'+ parseInt( moment(value[index].days[a]._d).format('DD') ) +'</span></div></li>'
                      }
                      showDate = showDate + '</ul>'
                  });
  
  
  
                  $( '.js-populate-date' ).html(showDate);
  
                  // REMOVE DATE FROM PREVIOUS MONTH AND NEXT MONTH
                  var emptyDate = moment(data.year + '-' + data.month +'-'+ '01','YYYY-MM-DD').format('d');
                  var lastEmptyDate = moment(data.year + '-' + data.month +'-'+ '01', 'YYYY-MM-DD').endOf('month').format('d');
  
                  for ( var hide = 0; hide <= emptyDate - 1; hide++ ) {
                      $('.js-populate-date ul:first-child .date-' + hide ).find('div').addClass('js-no-date').removeAttr('data-index');
                  }
  
                  for ( var hide = parseInt( lastEmptyDate ) + 1; hide <= 7 ; hide++ ) {
                      $('.js-populate-date ul:last-child .date-' + hide ).find('div').addClass('js-no-date').removeAttr('data-index');
                  }

                  // DISABLED THE PREVIOUS DATE
                  data.currentMonth == true ? $( '.js-prev' ).attr( 'disabled','disabled' ) : $( '.js-prev' ).removeAttr( 'disabled' );
                  for ( var prevDate = 1; prevDate < parseInt( data.currentDate ); prevDate++ ) {
                      if ( data.currentMonth == true ) {
                          $('.calendar__days-number[data-index="' + data.year + '-' + data.month + '-' + prevDate +'"]').removeClass('js-request-accepted js-reserve-accepted js-only-few js-full-disabled').addClass('js-disabled');
                          $( '.js-prev' ).attr( 'disabled','disabled' );
                      }
                      else {
                          $( '.js-prev' ).removeAttr( 'disabled' );
                      }
                  }
  
                  // AVOID CLICKABLED WHEN LOADING
                  $( '.calendar' ).removeClass('js-loading-opacity');
                  $('.js-loading').hide();
              }
          });
      }

      // GET 7 DAYS IN 1 MONTH
      function getWeek ( week, calendar, data ) {
          calendar.push({
              week: week,
              days: Array.apply( null, { length: 7 } ).fill(0).map( function ( n, i, k ) {
                  return moment( data.year + '-' + data.month + '-' + 1, 'YYYY-MM-DD' ).week( week ).startOf( 'week' ).clone().add( n + i, 'day' );
              })
          });
      }
  });
  