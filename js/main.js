$('document').ready(function(){

          // product info
        $('.product_info').hide();
        $('.fa-info-circle').on('click', showProductInfo);

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
        //payment
        var payment = $('.payment').hide();
        //show the payment
        $('.fa-shopping-cart').on('click', payment_show);
        function payment_show(){
           var payment_show = $('.payment').show();
        }
        //close the payment
        $('.payment_close').on('click', payment_close);
        function payment_close(){
           var payment_close = $('.payment').hide();
        }
// page ready
});
//javascript without frames
  //Video 
  var video = document.querySelector(".video");
  //the video seek
  var juice = document.querySelector(".blue_juice");
  //play and pause button
  var btn_video = document.getElementById('playpause');
  //Video_tite
  var video_title = document.getElementById('Video_title');
  //play and pause toggle function
  function toggle_play_pause(){
    if(video.paused){
      btn_video.className = 'pause';
      video.play();
    }
    else{
      btn_video.className  = 'play';
      video.pause();
    }
  }
btn_video.onclick = function(){
  toggle_play_pause();
}
//video duration 
video.addEventListener('timeupdate', function(){
  var juice_Position = video.currentTime / video.duration;
  juice.style.width = juice_Position * 100 + "%";
});
//music
//list of songs
var songs = ['song1.mp3'];
//song Title
var song_Title = document.getElementById('Music_title');
//song button
var btn_song = document.getElementById('music_Btn');
//fillbar
var song_fillBar = document.getElementById('fill');
//object of Audio
var song = new Audio();
//current song playing
var current_Song = 0;
//window loads
window.onload = display_song_info;
//song_info
function display_song_info(){
  //song source
  song.src = songs[current_Song]
  //song.title
  song_Title.textContent = songs[current_Song];
}
//song_play
function playpause(){
  if(song.paused){
        btn_song.className = 'Music_pause';
        song.play();
      }
      else{
        btn_song.className  = 'Music_play';
        song.pause();
      }
  }
btn_song.onclick = function(){
  playpause();
}
//pdfs
//pdf Location
const url = '../pdfs/pdf.pdf';
//pdf details
let pdf_Doc = null, 
    page_Num = 1,
    page_Is_Rendering = false,
    page_Is_Pedding = null;
//page size
const scale = 1.5,
  canvas = document.querySelector('#pdf_render');
  ctx = canvas.getContext('2d');
//Render the page
const render_Page = num =>{

}
//Get the pdf
pdfjsLib.getDocument(url).promise.then(pdf_Doc_=>{
  pdf_Doc = pdf_Doc_;
  console.log(pdf_Doc);
});

