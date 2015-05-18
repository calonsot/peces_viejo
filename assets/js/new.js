$(function () {
  //  event.preventDefault();
  $("#slider").responsiveSlides({
    auto: true,
    pager: false,
    nav: false,
    speed: 2000,
    timeout: 4000,
    namespace: "rslides",
    before: function () {
    $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
    $('.events').append("<li>after event fired.</li>");
    }
    });

    
    $( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content",
      active: false
    });

    $( "#accordion2" ).accordion({
      collapsible: true,
      heightStyle: "content",
      active: false
    });

    $( "#s1, #s2, #s3, #s4, #s5" ).dialog({
    width: 600,
    autoOpen: false,
    show: {
      effect: "blind",
      duration: 1000
    },
    hide: {
      effect: "clip",
      duration: 350
    }
    });


    $('.veda').qtip({
      content: {text: $('#veda_tip')}
    });
    $('.arte_de_pesca').qtip({
      content: {text: $('#arte_de_pesca_tip')}
    });
    $('.tipo_pesca').qtip({
      content: {text: $('#tipo_pesca_tip')}
    });
    $('.carta_nacional').qtip({
      content: {text: $('#carta_nacional_tip')}
    });
    $('.estado_conservacion').qtip({
      content: {text: $('#estado_conservacion_tip')}
    });
    $('.recomendable').qtip({
      content: {text: $('#recomendable_tip')}
    });
    $('.precomendable').qtip({
      content: {text: $('#precomendable_tip')}
    });
    $('.nrecomendable').qtip({
      content: {text: $('#nrecomendable_tip')}
    });

    $( "#s1, #s2, #s3, #s4, #s5" ).dialog({
      width: 600,
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "clip",
        duration: 350
      }
    });
 
    $( "#opens1" ).click(function() {
      $( "#s1" ).dialog( "open" );
    });
  
    $( "#opens2" ).click(function() {
        $( "#s2" ).dialog( "open" );
      });
    
    $( "#opens3" ).click(function() {
        $( "#s3" ).dialog( "open" );
      });
    
    $( "#opens4" ).click(function() {
        $( "#s4" ).dialog( "open" );
      });
    
    $( "#opens5" ).click(function() {
        $( "#s5" ).dialog( "open" );
      });

    scrollTop({
      color:"rgba(50, 61, 44, 0.7)",
      top:400, 
      time:500,
      position:"bottom",
      speed: 300
      });

});
