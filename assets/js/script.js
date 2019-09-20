
  $(document).ready(function(){
    
    $('#slider-principal').slider({
      indicators: false
    });
  })

  /********************* SLIDER PRINCIPAL *********************/
$('#slider-principal-prev').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#slider-principal').slider('prev');
});
$('#slider-principal-next').on('click touchstart', e => {
  e.preventDefault();
  e.stopPropagation();
  $('#slider-principal').slider('next');
});
