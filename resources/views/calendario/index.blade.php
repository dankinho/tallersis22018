@extends('layout2')
<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 08-11-18
 * Time: 12:53 AM
 */
?>
@section('content')
    $('#calendar').fullCalendar({

    businessHours: {
    // days of week. an array of zero-based day of week integers (0=Sunday)
    dow: [ 1, 2, 3, 4 ], // Monday - Thursday

    start: '10:00', // a start time (10am in this example)
    end: '19:00', // an end time (6pm in this example)
    },

    editable: true,
    header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
    },
    defaultView: 'agendaWeek',
    height: 500,
    slotMinutes: 15,
    loading: function(bool){
    if (bool)
    $('#loading').show();
    else
    $('#loading').hide();
    },

    minTime: '10:00',
    maxTime: '19:00',
    selectable: true,

    events:
    $.ajax({

    type:'get',
    url:'events',
    success: function (data)
    {
    console.log(data);
    $('#calendar').fullCalendar({
    events: data
    });
    }
    }),

@endsection