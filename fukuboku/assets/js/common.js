$('.l-header__toggle').on('click',function (){
  $(this).toggleClass('js-active')
})

$('.l-header__navList').on('click',function (){
  $('.l-header__toggle').removeClass('js-active')
})


$(window).on('scroll load',function (){
  const scroll = $(this).scrollTop()
  const top = $('#about').offset().top
  console.log(top)

  if(top < scroll){
    $('.l-header').addClass('js-scroll')
  }else{
    $('.l-header').removeClass('js-scroll')
  }
})