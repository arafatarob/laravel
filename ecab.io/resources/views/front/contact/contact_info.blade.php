<div class="message">
   <div class="send-error contact_validation_error_b2" id="contact_validation_error_b21">
        <div style="display: flex
;
    justify-content: center;
    align-items: center;
    font-size: 13px;">
                 <img class="msgIcon" src="{{ url('assets_front/images/dangerIcon.png') }}" alt="Error Icon">
                <p class="validation__error__msg__txt">Merci de bien remplir toutes les informations requises</p>
        </div>
   </div>

   <div class="success__msg__box contact_validation_success_b2">
       <img class="msgIcon" src="{{ url('/assets_front/images/doneIcon.png') }}" alt="" srcset="" style=" margin-right: 3px; width: 20px; ">
       <p class="validation__success__msg__txt"></p>
   </div>
</div>
<div style="position: relative; margin-bottom: -66x; display: flex; flex-wrap: wrap; gap: 10px;">
   <!-- Civility -->
   <div class="form-group" id="conCivilite">
      <label>Civilité</label>
      <div class="input-group select-wrapper" id="con-Civilite">
          <div class="input-group-addon">
             <i class="fa fa-user"></i>
          </div>

         <select name="client_civility" id="conGender"  class="form-control" style="min-width: 50px; width: 65px;">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
            <option value="Mlle">Mlle</option>
         </select>

      </div>
   </div>
   <!-- First Name -->
   <div class="form-group" id="confirstName">
      <label style="padding-left: 5px">Prénom <small class="red">*</small></label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-user"></i>
          </div>

         <input type="text" id="con-firstName" name="client_first_name"  placeholder="Prénom *" class="form-control" />

      </div>
   </div>
   <!-- Last Name -->
   <div class="form-group" id="conlastName">
      <label>Nom <small class="red">*</small></label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-user"></i>
          </div>
         <input type="text" id="con-lastName" name="client_last_name"  placeholder="Nom *" class="form-control" />
      </div>
   </div>
   <!-- Organization -->
   <div class="form-group" id="organize">
      <label>Organisme ou Société</label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-building"></i>
          </div>
         <input type="text" id="organizetion" name="client_organization"  placeholder="Organisme ou Société" class="form-control" />
      </div>
   </div>
</div>

<div style="position: relative; margin-bottom: -2px; display: flex; flex-wrap: wrap; gap: 10px;">
   <!-- Phone -->
   <div class="form-group" id="phone">
      <label>Téléphone <small class="red">*</small></label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-phone"></i>
          </div>
         <input type="tel" id="PHone" name="client_phone"  placeholder="Téléphone *" style="width: 200px;" class="form-control"/>
      </div>
   </div>
   <!-- Email -->
   <div class="form-group" id="email">
      <label>E-mail <small class="red">*</small></label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-envelope"></i>
          </div>
         <input type="email" id="Email" name="client_email"  placeholder="Email *" class="form-control" style="width: 200px;"/>
      </div>
   </div>
   <!-- Fax -->
   <div class="form-group" id="fax">
      <label>{{ $lang['fax'] ?? 'Fax' }} </label>
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-print"></i>
          </div>
         <input type="text" id="Fax" name="client_fax"  placeholder="{{ $lang['fax'] ?? 'Fax' }}" class="form-control" style="width: 200px;"/>
      </div>
   </div>
</div>


<!-- Address Section -->
<div class="row" id="contactAddress">
   <div class="col-md-12">

<label>Adresse*</label>
<div class="address-section auto__place__container" id="conADDRESS" style="padding: 10px 10px 5px 10px; background: linear-gradient(to bottom, #fbfbfb 0%, #ececec 39%, #cecece 100%); border: 1px solid #2aa5c9; border-radius: 5px; width: 480px;">
   <!-- Address -->
   <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-map-marker"></i>
          </div>
         <input type="text" name="client_place_name"  placeholder="Nom du lieu ..." class="form-control auto__place__name">

      </div>
   </div>
   <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-map-marker"></i>
          </div>
         <input type="text" name="client_address"  placeholder="Adresse * ..." class="form-control auto__address">
         <div class="current__location__btn">
            <img src="{{ url('icons/target-a.svg') }}" alt="Location">
         </div>

      </div>
   </div>

   <!-- Zip Code & City -->
   <div style="display: flex;justify-content: space-between;" id="conZipTop">
      <div class="form-group" style="width:165px;" id="conzipMain">
         <div class="input-group">
             <div class="input-group-addon">
                <i class="fa fa-map-marker"></i>
             </div>
            <input type="text" name="client_zipcode" id="con-Zip"  placeholder="Code Postal*" class="form-control auto__zipcode">
            <div class="current__location__btn" id="conZip">
               <img src="{{ url('icons/target-a.svg') }}" alt="Location">
            </div>

         </div>
      </div>
      <div class="form-group" style="width:290px;">
         <div class="input-group">
             <div class="input-group-addon">
                <i class="fa fa-map-marker"></i>
             </div>
            <input type="text" name="client_city" id="con-ville"  placeholder="Ville*" class="form-control auto__city__name">
            <div class="current__location__btn" id="conVille">
               <img src="{{ url('icons/target-a.svg') }}" alt="Location">
            </div>

         </div>
      </div>
   </div>

   <!-- Additional Address -->
   <div class="form-group">
      <div class="input-group">
          <div class="input-group-addon">
             <i class="fa fa-map-marker"></i>
          </div>
         <input type="text" name="client_address_2"  placeholder="Adresse Complémentaire ..." class="form-control">

      </div>
   </div>
</div>

      
   </div>
</div>
<!-- End Address Section -->

<div class="row" id="conditionChecked">
   <div class="col-md-12">
      <!-- legal pages -->
      <div class="legal__pages__checked">
         <div class="form-group checkbox">
             <input type="checkbox" name="terms" id="terms" checked  style="position: unset;margin: unset;">
             <label for="terms" style="padding-left: 10px;margin: 0;">{{$lang['conditoin_of_sale_approval_text'] ?? "J'approuve la" }} <a href="" id="con-services" target="_blank">Conditions de Service </a></label>
         </div>
         <div class="form-group checkbox">
             <input type="checkbox" name="privacy" id="privacy" checked  style="position: unset;margin: unset;">
             <label for="privacy" style="padding-left: 10px;margin: 0;">{{$lang['privacy_policy_approval_text'] ?? "J'approuve la" }} <a href="" id="con-condition" target="_blank">Politique de Confidentialité </a></label>
         </div>
      </div>
   </div>
</div>
<!-- Submit Button -->
<div class="row" id="con-submit">
   <div class="col-md-12">

      <div style="display: flex; justify-content: space-between; margin-top: 10px; margin-bottom: 10px; align-items: center;">
         <div class="prev-booking-tab-btn" style="position: relative;">
               <button type="button" class="step__previous__btn"  onclick="prevfirstStepContactForm()"><span>Precedent</span></button>
         </div>
         <div class="next-booking-tab-btn" style="position: relative;">
           <button type="button" class="step__continue__btn" onclick="secondStepContactForm()"><span>SUIVANT</span></button>
        </div>
      </div>
   </div>
</div>

