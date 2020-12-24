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

  $('.add-sec').on('click' , function(event) {
    event.preventDefault();
    let myMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Comments"> 
      </div>

      <span class="delete col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px"> Remove </span>

    </div>
    `;
    $('.comments-container').append(myMarkUp);

    $('.delete').on('click' , function() {
      $(this).parent().remove();
    });
  });
  // END:: RESERVATION PAGE

  // START:: DOCTOR INFO PAGE
  $('.add-complaints-sec').on('click' , function(event) {
    event.preventDefault();
    let complaintsMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Comments"> 
      </div>

      <span class="delete-complaint col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px"> Remove </span>

    </div>
    `;
    $('.complaints-comments-container').append(complaintsMarkUp);

    $('.delete-complaint').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.add-examination-sec').on('click' , function(event) {
    event.preventDefault();
    let examinationMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Comments"> 
      </div>

      <span class="delete-examination col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px"> Remove </span>

    </div>
    `;
    $('.examination-comments-container').append(examinationMarkUp);

    $('.delete-examination').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.add-diagnosis-sec').on('click' , function(event) {
    event.preventDefault();
    let diagnosisMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Comments"> 
      </div>

      <span class="delete-diagnosis col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px"> Remove </span>

    </div>
    `;
    $('.diagnosis-comments-container').append(diagnosisMarkUp);

    $('.delete-diagnosis').on('click' , function() {
      $(this).parent().remove();
    });
  });

  $('.add-plan-sec').on('click' , function(event) {
    event.preventDefault();
    let planMarkUp = `
    <div class="target grid grid-cols-12 gap-6 col-span-12 lg:flex-row pr-3 pl-3 -mx-5">

      <div class="col-span-8 md:col-span-10">
        <label class="text-gray-600 mb-3 text-lg">Comments</label>
        <input type="text" class="input w-full border mt-2" placeholder="Comments"> 
      </div>

      <span class="delete-plan col-span-4 md:col-span-2 button translate-y-3 my-3 mr-2 flex items-center justify-center bg-theme-6 text-white" style="margin-top:35px"> Remove </span>

    </div>
    `;
    $('.plan-comments-container').append(planMarkUp);

    $('.delete-plan').on('click' , function() {
      $(this).parent().remove();
    });
  });

  // END:: DOCTOR INFO PAGE

  // CLOSE NOTIFICATIONS
  $("#close-notification").on('click' , function(){
    $(".notification-container").css('display' , 'none')
  });
});

