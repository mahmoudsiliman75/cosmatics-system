$(document).ready(function () {

  // SELECT PROFILE IMG
  $(".image").on('change',function() {
    if (this.files && this.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(this.files[0]);
    }
});

  // SHOW AND HIDE HUSDEND NAME FIELD IN RESERVATION PAGE
  $('#reservation-husbend-name').css('display' , 'none');

  $("#marital-status").on('change' , function() {
    let optionValue = $("#marital-status").children('option:checked').val();
    if(optionValue == 0) {
      $('#reservation-husbend-name').css('display' , "block");
    } else if (optionValue == 1) {
      $('#reservation-husbend-name').css('display' , "none");
    }
  }); 

  // SHOW AND HIDE PREGNANCY DETAILS FIELDS IN ADD NEW PATIENT PAGE
  $('#gravida-container').css('display' , 'none');
  $('#para-container').css('display' , 'none');
  $('#abortion-container').css('display' , 'none');
  $('#vaginal-container').css('display' , 'none');
  $('#cs-container').css('display' , 'none');
  $('#last-birth-date-container').css('display' , 'none');
  $('#male-children-container').css('display' , 'none');
  $('#female-children-container').css('display' , 'none');
  $('#last-birth-details-container').css('display' , 'none');
  // $('#blanck-container').css('display' , 'none');

  $('#pregnancy-status').on('change' , function(){
    let pregnancyOptionValue = $('#pregnancy-status').children('option:checked').val();
    if ( pregnancyOptionValue == 0 ) {
      $('#gravida-container').css('display' , 'block');
      $('#para-container').css('display' , 'block');
      $('#abortion-container').css('display' , 'block');
      $('#vaginal-container').css('display' , 'block');
      $('#cs-container').css('display' , 'block');
      $('#last-birth-date-container').css('display' , 'block');
      $('#male-children-container').css('display' , 'block');
      $('#female-children-container').css('display' , 'block');
      $('#last-birth-details-container').css('display' , 'block');
      $('#blanck-container').css('display' , 'block');
    } else if (pregnancyOptionValue == 1) {
      $('#gravida-container').css('display' , 'none');
      $('#para-container').css('display' , 'none');
      $('#abortion-container').css('display' , 'none');
      $('#vaginal-container').css('display' , 'none');
      $('#cs-container').css('display' , 'none');
      $('#last-birth-date-container').css('display' , 'none');
      $('#male-children-container').css('display' , 'none');
      $('#female-children-container').css('display' , 'none');
      $('#last-birth-details-container').css('display' , 'none');
      $('#blanck-container').css('display' , 'none');
    }
  });

      // SHOW AND HIDE SURGERY DETAILS FIELD IN ADD NEW PATIENT PAGE
      $("#surgery-details-container").css('visibility' , 'hidden');

      $("#Surgery-status").on('change' , function() {
        let surgeryOptionValue = $('#Surgery-status').children('option:checked').val();
        if ( surgeryOptionValue == 0 ) {
          $("#surgery-details-container").css('visibility' , 'hidden');
        } else if ( surgeryOptionValue == 1 ) {
          $("#surgery-details-container").css('visibility' , 'visible');
        }
      });

      // SHOW AND HIDE MIDICINS DETAILS FIELD IN ADD NEW PATIENT PAGE
      $("#medicins-details-container").css('visibility' , 'hidden');

      $("#medicins-status").on('change' , function () { 
        let medicinOptionValue = $("#medicins-status").children('option:checked').val();
        console.log(medicinOptionValue)
        if ( medicinOptionValue == 0 ) {
          $("#medicins-details-container").css('visibility' , 'hidden');
        } else if ( medicinOptionValue == 1 ) {
          $("#medicins-details-container").css('visibility' , 'visible');
        } 
      });

      // SHOW AND HIDE EDEMA DETAILS FIELD IN PREGNANCY FOLLOW PAGE
      $("#edema-details-container").css("display" , "none");

      $("#edema-status").on('change' , function() {
        let edemaOptionValue = $("#edema-status").children("option:checked").val();
        if ( edemaOptionValue == 0 ) {
          $("#edema-details-container").css("display" , "none")
        } else if ( edemaOptionValue == 1 ) {
          $("#edema-details-container").css("display" , "block")
        }
      });


      $("#lmp-date-container").css("display" , "none");
      $("#edd-date-container").css("display" , "none");

      $("#pregnancy-follow-data").on('change' , function() {
        let edemaOptionValue = $("#pregnancy-follow-data").children("option:checked").val();
        if ( edemaOptionValue == 1 ) {
          $("#lmp-date-container").css("display" , "none");
          $("#edd-date-container").css("display" , "none");
        } else if ( edemaOptionValue == 0 ) {
          $("#lmp-date-container").css("display" , "block");
          $("#edd-date-container").css("display" , "block");
        }
      });

      // CLOSE NOTIFICATIONS
      $("#close-notification").on('click' , function(){
        $(".notification-container").css('display' , 'none')
      });
});

