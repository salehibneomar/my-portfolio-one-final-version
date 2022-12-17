function tokyo_tm_preloader(){

    const preloader = $('#preloader');

      setTimeout(function() {
        preloader.addClass('preloaded');
      }, 800);
      setTimeout(function() {
        preloader.remove();
      }, 2000);
  }

  function tokyo_tm_my_load(){
    const speed	= 500;
    setTimeout(()=>{tokyo_tm_preloader();},speed);
  }

  if(sessionStorage.isLoadedOnce===undefined){
      $(window).on('load', ()=>{
        tokyo_tm_my_load()
        sessionStorage.isLoadedOnce = true
      });
  }
  else{
      $('#preloader').hide()
  }
