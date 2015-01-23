//wat we willen: 

//zodra je het select met class menu-selector verandert, 


//dan, ga naar link die erbij hoort



$('.menu-selector').on('change', function() { //callback 
  //'this' is in dit geval, het veranderde select itempje
  var value = $(this).val(); //dit is de link die 'erbij' hoort.

  //scroll (liefst smooth) naar een element die dezelfde name heeft als value
  var selector = 'a[name="' + value + '"]'; //'a[name="'+value+'"]' 

  $('html, body').animate({
    scrollTop: $(selector).offset().top
  }, 1500);
});
