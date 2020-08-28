$(document).ready(function () {
      var Shop_details = $('.Shop_details').hide();
      var commnucation = $('.commnucation').hide();
      var security = $('.security').hide();

        $('.To_shopDetatils').click(function(){
          $('.User_profile').hide();
          Shop_details.show();
          Shop_details.fadeIn();
        })

      $('.To_communication').click(function(){
        Shop_details.hide();
        commnucation.show();
      });

      $('.To_security').click(function(){
        commnucation.hide();
        Shop_details.hide();
        security.show();
      });

      //form validation
      //User_profile
    $('#Firstname_note').hide();//hide the text
    $('#Lastname_note').hide();//hide the text
    $('#Firstname_fill').hide();

    var Firstname_note = false;//make it false
    var Firstname_fill = false;
    var Lastname_note = false;//make it false

    //check if value of the first name is been filled
    function check_firstName() {
        var Firstname_Length = $('.Firstname').val().length;
        var Firstname = $('.Firstname').val();
        if(Firstname == " "){
          $('#Firstname_fill').html('file your Firstname');
          $('#Firstname_fill').show();
          Firstname_fill = true;
        }
        else if(Firstname_Length < 2){
            $('#Firstname_note').html('<i class="fa fa-question-circle"></i>  please your Firstname it\'s short ');
            $('#Firstname_note').show();
            Firstname_note = true;
        }
        else if(Firstname_Length > 10) {
          $('#Firstname_note').html('<i class="fa fa-question-circle"></i>  please your Firstname too it\'s long');
          $('#Firstname_note').show();
          Firstname_note = true;
        }
        else {
          $('#Firstname_note').hide();
          Firstname_note = false;
        }
    }
    $('.Firstname').focusout(function() {
        check_firstName();
    });

    //check if value of the first name is been filled
    function check_LastName() {
        var Lastname_Length = $('.Lastname').val().length;
        if(Lastname_Length < 2 || Lastname_Length > 15){
            $('#Lastname_note').html('<i class="fa fa-question-circle"></i>  please your Lastname it\'s short or too long');
            $('#Lastname_note').show();
            Lastname_note = true;
        }
        else {
          $('#Lastname_note').hide();
        }
    }

    $('.Lastname').focusout(function() {
        check_LastName();
    });

    //p
    $('.Shopname_note').hide();
    $('.Locationame_note').hide();

    var Shopname_note = false;
    var Locationame_note = false;
    //shop details
    function check_shopName() {
        var Shopname_length = $('.Shopname').val().length;
        if(Shopname_length < 2 || Shopname_Length > 15){
            $('#Shopname_note').html('<i class="fa fa-question-circle"></i>  please your Shopname it\'s short or too long');
            $('#Shopname_note').show();
            Shopname_note = true;
        }
        else {
          $('#Shopname_note').hide();
        }
    }

    $('.Shopname').focusout(function() {
        check_shopName();
    });
    //Location
    function check_Location(){
        var Location_Length = $('.Location').val().length;
        if(Location_Length < 2 || Location_Length > 15){
            $('#Locationame_note').html('<i class="fa fa-question-circle"></i>  please your Shopname it\'s short or too long')
            $('#Locationame_note').show();
            Locationame_note = true;
        }
        else{
            $('#Locationame_note').hide()
        }
    }
    $('.Location').focusout(function() {
        check_Location();
    });

// communication phone_number and email//
  $('.PhoneNumbername_note').hide();
    $('.email_note').hide();

    var PhoneNumbername_note = false;
    var email_note = false;

    //phoneNumbername details //
     function check_PhoneNumber() {
        var PhoneNumber_length = $('.Phonenumber').val().length;
        if( PhoneNumber_length< 2 || PhoneNumber_length > 15){
            $('#PhoneNumbername_note').html('<i class="fa fa-question-circle"></i>  please your Shopname it\'s short or too long');
            $('#PhoneNumbername_note').show();
            PhoneNumbername_note = true;
        }
        else {
          $('#PhoneNumbername_note').hide();
        }
    }
    $('.Phonenumber').focusout(function() {
        check_PhoneNumber();
    });

    //emali //
});
