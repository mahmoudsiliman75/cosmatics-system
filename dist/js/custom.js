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

  // START:: RESERVATION PAGE
  $('#drug-allergy-comments').css('visibility' , 'hidden');
  $('#smoking-comments').css('visibility' , 'hidden');
  $('#blood-transfusion-comments').css('visibility' , 'hidden');
  $('#alcoholic-comments').css('visibility' , 'hidden');
  $('#prev-sergeries-comments').css('visibility' , 'hidden');
  $('#family-history-comments').css('visibility' , 'hidden'); 
  $('#drug-allergy-comments').css('visibility' , 'hidden'); 

  $("#drug-allergy").on('change' , function() {
    let DrugAllergyOptionValue = $("#drug-allergy").children('option:checked').val();
    if(DrugAllergyOptionValue == 0) {
      $('#drug-allergy-comments').css('visibility' , "hidden");
    } else if (DrugAllergyOptionValue == 1) {
      $('#drug-allergy-comments').css('visibility' , "visible");
    }
  }); 

  $("#smoking").on('change' , function() {
    let smokingOptionValue = $('#smoking').children('option:checked').val();
    if ( smokingOptionValue == 0 ) {
      $('#smoking-comments').css('visibility' , 'hidden');
    } else if ( smokingOptionValue == 1 ) {
      $('#smoking-comments').css('visibility' , 'visible');
    };
  });

  $("#blood-transfusion").on('change' , function() {
    let bloodTransfusionOptionValue = $('#blood-transfusion').children('option:checked').val();
    if (bloodTransfusionOptionValue == 0) {
      $('#blood-transfusion-comments').css('visibility' , 'hidden');
    } else if ( bloodTransfusionOptionValue == 1 ) {
      $('#blood-transfusion-comments').css('visibility' , 'visible');
    }
  });

  $("#alcoholic").on('change' , function() {
    let alcoholicOptionValue = $("#alcoholic").children('option:checked').val();
    if ( alcoholicOptionValue == 0 ) {
      $('#alcoholic-comments').css('visibility' , 'hidden');
    } else if ( alcoholicOptionValue == 1 ) {
      $('#alcoholic-comments').css('visibility' , 'visible');
    }
  });

  $("#prev-sergeries").on('change' , function() {
    let prevSergOptionValue = $("#prev-sergeries").children('option:checked').val();
    if ( prevSergOptionValue == 0 ) {
      $('#prev-sergeries-comments').css('visibility' , 'hidden');
    } else if ( prevSergOptionValue == 1 ) {
      $('#prev-sergeries-comments').css('visibility' , 'visible');
    }
  });

  $("#family-history").on('change' , function() {
    let familyOptionValue = $("#family-history").children('option:checked').val();
    if ( familyOptionValue == 0 ) {
      $('#family-history-comments').css('visibility' , 'hidden');
    } else if ( familyOptionValue == 1 ) {
      $('#family-history-comments').css('visibility' , 'visible');
    }
  });

  $("#drug-allergy").on('change' , function() {
    let drugOptionValue = $("#drug-allergy").children('option:checked').val();
    if ( drugOptionValue == 0 ) {
      $('#drug-allergy-comments').css('visibility' , 'hidden');
    } else if ( drugOptionValue == 1 ) {
      $('#drug-allergy-comments').css('visibility' , 'visible');
    }
  });

  $(".chronic-diseases-selector").on('change' , function() {
    // let optionText = $('.chronic-diseases-selector').children('option:checked').text();
    let appendMarkUp = $('#chronic-disease-comments').html();

    // $('.chronic-disease-name').text(optionText);
    $('.appended-elements-container').append(appendMarkUp);
  });

  $('.close-comments').on('click' , function() {
    $('#chronic-disease-comments').remove();
    console.log('Run CLick!');
  }); 
  // END:: RESERVATION PAGE

  // CLOSE NOTIFICATIONS
  $("#close-notification").on('click' , function(){
    $(".notification-container").css('display' , 'none')
  });
});

