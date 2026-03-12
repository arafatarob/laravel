
<div class="container "  style="margin-top:10px;">
   <div id="breadcrumb">
      <a href="" style="color:#337ab7;"><i class="fa fa-home"></i> {{ $lang['home'] ?? "Accueil" }} <i class="fa-solid fa-chevron-right" style="font-size: 13px"></i></a>
      <a href="javascript:void(0)" style="color:#337ab7;">{{ $lang['contact'] ?? "Contact" }} </a>
   </div>
<div class="form-block">
   <div style="margin-bottom: 5px;">
      <div class="steps__container">
         <ul class="nav nav-wizard">
            <li class="active contact-steps contact-step-1" style="pointer-events: none;"><span class="step__arrow__b"></span><span class="steps">1</span><a>Message</a></li>
            <li class="contact-steps contact-step-2" style="pointer-events: none;"><span class="step__arrow__b"></span><span class="steps">2</span><a>Coordonnées</a></li>
            <li class="contact-steps contact-step-3" style="pointer-events: none;"><span class="step__arrow__b"></span><span class="steps">3</span><a>Récapitulatif</a></li>
         </ul>
      </div>
   </div>
   <div class="row contact-wrapper">
      <div class="col-md-12">
         <form method="post"  id="custom_contact_form"  class="custom__contact__form" action="" novalidate="novalidate" style="margin: 0;"  enctype="multipart/form-data">
           
            <input type="hidden" name="current_module_form_name" value="contact">
            <input type="hidden" class="get__login__view__route" value="">
            <input type="hidden" class="get__register__view__route" value="">
            <input type="hidden" class="get__user__contact__view__route" value="">

            <div class=            "contact_form">
               <div class="row form-with-labels">
                  <div class="contact__section__1">
                     @include('front/contact/section_1')
                  </div>
                  <div class="contact__section__2" style="display:none;" >
                     @include('front/contact/section_2')
                  </div>
                  <div class="contact__section__3"   style="display:none;">
                  </div>

               </div>
            </div>
         </form>
      </div>
   </div>
</div>



@endsection




<script>


contactBox.innerHTML = `
  <li><strong>${data.name}</strong></li>
  <li>${data.address}</li>
  <li><strong>Téléphone:</strong> ${data.phone}</li>
  <li><strong>Fax:</strong> ${data.fax}</li>
  <li><strong>Email:</strong> ${data.email}</li>
`;

</script>
