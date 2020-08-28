$('document').ready(function(){

          // product info
        $('.product_info').hide();
        $('.info_pro').on('click', showProductInfo);

        function showProductInfo() {

            var product_info =  $('.product_info').show();
            var productInfo = product_info.length;
            for(i=0; i<productInfo; ++i){
                productInfo = i + 1;
                console.log(productInfo);
            }
        }
        //close the product info
        $('.close').on('click', closeProductInfo)
        function closeProductInfo(){
          var productClose = $('table').hide();
          var product_close = productClose.length;
          if(product_close > 0){
            $('.close').hide()
          }
        }
        //came operations
        $('.file_upload').on('click', photos_upload)
        function photos_upload(){
         var ads_show = $('.ads_details').show();
        }
        //closing ads panel
        $('.close').on('click', ads_close);
        function ads_close(){
           var ads_close = $('.ads_details').hide();
        }
        //Music collection and controls.
        var songs = ['song1.mp3', 'song2.mp3', 'song3.mp3'];
        var Music_Tittle = $('.Music_title');
        var fill_Bar = $('#fill');

        // Music
        var song = new Audio();
        var currentSong = 2;
        window.onload = playSong;
        function playSong(){
          song.src = songs[currentSong];
        }
// page ready
});
