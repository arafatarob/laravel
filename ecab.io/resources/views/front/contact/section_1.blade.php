@php
use App\Models\Config;
@endphp



<div class="message">
   <div class="send-error" id="contact_validation_error_b1">
      <img class="msgIcon" src="{{ url('assets_front/images/dangerIcon.png') }}" alt="" srcset=""> 
      Merci de bien remplir toutes les informations requises
   </div>
</div>
<div class="contact__main__container">
    <div class="left__section">
       

<div  style="position: relative; margin-bottom: 14px;display: flex;gap: 10px;">
   <!-- User Type -->
   <div class="form-group">
      <label>Type d'utilisateur <small class="red">*</small></label>
      <div class="input-group select-wrapper">
          <div class="input-group-addon">
             <i class="fa fa-user"></i>
          </div>
         
         <select name="user_type" class="form-control">
            @php
            $selectedUserGroup = "client";
            $user_groups = Config::$user_groups;
            @endphp

            @foreach($user_groups as $key => $user_group)
            <option {{ ($user_group['value_txt'] == $selectedUserGroup) ? 'selected' : ''}} value="{{$user_group['value_txt']}}">{{ucwords($lang[$user_group['value_txt']] ?? $user_group['label'])}}</option>
            @endforeach
         </select>
         
      </div>
   </div>
   <!-- department_id -->
   <div class="form-group">
      <label>{{$lang['department'] ?? 'Service'}} <small class="red">*</small></label>
      <div class="input-group select-wrapper">
          <div class="input-group-addon">
             <i class="fa fa-sitemap"></i>
          </div>
      
         <select  name="department_id"  class="form-control">
            <option value="">Sélectionner</option>
            @foreach($departments as $department)
            <option   {{ (strtolower($department->name) == 'client') ? 'selected' : '' }}  value="{{$department->id}}" data-name="{{ $department->name }}">{{ucwords($lang[strtolower($department->name)] ?? $department->name)}}</option>
            @endforeach
         </select>
         
      </div>
   </div>

   <!-- priority_id -->
   <div class="form-group">
      <label>Priorité <small class="red">*</small></label>
      <div class="input-group select-wrapper">
          <div class="input-group-addon">
             <i class="fa fa-bell"></i>
          </div>
         
         <select  name="priority_id"  class="form-control">
            <option value="">Sélectionner</option>
            @foreach($contact_priorities as $contact_priority)
            <option {{ (strtolower($contact_priority->name) == 'normale') ? 'selected' : '' }} value="{{ $contact_priority->id }}">{{ucwords($lang[strtolower($contact_priority->name)] ?? $contact_priority->name)}}</option>
            @endforeach
         </select>
        
      </div>
   </div>
   
   <div class="form-group" id="contactform-objet" >
         <label> Objet <small class="red">*</small></label>
         <div class="input-group select-wrapper">
             <div class="input-group-addon">
                <i class="fa fa-envelope"></i>
             </div>
            
            <select  name="purpose_id"  class="form-control" >
               <option value="">Sélectionner</option>
               @foreach($contact_purposes as $contact_purpose)
               <option {{ (strtolower($contact_purpose->name) == 'reservation') ? 'selected' : '' }} value="{{ $contact_purpose->id }}">{{ucwords($lang[strtolower($contact_purpose->name)] ?? $contact_purpose->name)}}</option>
               @endforeach
            </select>
            
         </div>
      </div>
</div>
<!--<div class="row">-->
<!--   <div class="col-md-12">-->
      <!-- Objet -->
      
<!--   </div>-->
<!--</div>-->
<div class="row">
   <div class="col-md-12 message">
      <div class="form-group">
         <label>Message <small class="red">*</small></label>
         
            <textarea id="contactText-Area"  class="required" name="message" placeholder="Message"></textarea>
         
      </div>
   </div>
</div>
<div style="margin-top:20px!important;display: flex;flex-wrap: wrap;justify-content: space-between;">
   <div>
      <div class="upload-btn-wrapper" onclick="addFileBox()">
         <p class="btn myfileButton" style="padding: 4px 25px;margin:0px;margin-bottom: 5;"><i class="fa-solid fa-plus fa-lg" style="font-weight: bolder; color:white!important;"></i> Joindre un fichier</p>
         <div id="list" style="float:left;width:100%;"></div>
      </div>
   

   <div id="fileBoxContainer"></div>
   </div>

   <div style="display: flex;">
   <!-- survey question and answer -->
   <!-- Survey Question -->
   @if($survey_question)

      <div class="form-group"  style="width: fit-content;">
          <label>{{ $survey_question->question }} <small class="red">*</small></label>
         <div class="input-group select-wrapper" id="selectWrapper">
             <div class="input-group-addon">
                <i class="fa fa-poll"></i>
             </div>
            <select  name="survey_answer_id"  class="form-control" style="min-width: 120px;">
               
                  <option value="">{{ $lang['select'] ?? "Select" }}</option>
                  @if($survey_answers)
                     @foreach ($survey_answers as $answer)
                           <option value="{{ $answer->id }}" > {{ $answer->answer }}</option>
                      @endforeach
                  @endif
            </select>  
         </div>
      </div>
   @endif
   <div id="Captcha" style="min-width: 200px;margin-left:10px;">
      <div class="text-left">
         <div class="capcha-math" style="margin: 0px;">
            <!-- captcha start -->
            <?php $var1 = rand(1, 10); ?>
            <?php $var2 = rand(1, 10); ?>
            <?php $varFinal = $var1 + $var2; ?>
            <?php
               $isContactCaptcha = 0;
               if ($company) {
                   $isContactCaptcha = ($company->is_contact_captcha == 1) ? 1 : 0;
               }
               
               ?>
            <input type="hidden" name="is_capcha_allow" id="is_capcha_allow" value="<?= $isContactCaptcha ?>">
            <?php if($isContactCaptcha == 1){ ?>
            <div class="form-group">
                 <label>&nbsp;<br></label>
               <div class="capcha-math contact-cap math" style="padding: 0px;margin:0px;">
                  <p style="color:#000">
                     <strong class="noselect" style="font-size:18px;cursor:pointer;color:black;padding: 1px 12px;" id=" captcha"><?php echo $var1; ?> + <?php echo $var2; ?></strong>
                     = <input type="text" name="custom_capcha_answer" id="custom_capcha_answer" autocomplete="off" class="" placeholder="?" style="min-width: 50px !important; padding: 6px 6px !important;height: 30px; line-height: 30px;">
                     <input type="hidden" name="actual_capcha_answer" id="actual_capcha_answer" value="<?= $varFinal ?>">
                  </p>
               </div>
            </div>
            <?php } ?>
            <!-- captcha end -->
         </div>
      </div>
   </div>
</div>
</div>

<div class="" style="display:flex;justify-content: flex-end;margin-top: 10px; margin-bottom: 10px;">
   
         <button type="button" class="step__continue__btn"  onclick="firstStepContactForm()"><span>SUIVANT</span></button>
   
</div>
    </div>
    <div class="divider__box "></div>
    <div class="right__section">
       <div class="map-container front__popup__zone__map__container">
             <div class="map-header">
                 <h4 class="text-center">{{ utf8_upper($lang['our_contact_details'] ?? 'Our Contact Details')}}</h4>
             </div>
              <div class="front__popup__zone__map" id="company_work_zone_map"></div>
       </div>
       @php
          $companyCity = $company->region;
           if (utf8_lower($company->region) == utf8_lower("Épinay sur Seine")) {
               $companyCity = str_replace(" ", "-", $company->region);
           }
       @endphp

       <input type="hidden" id="company_work_zone_name_val_f" value="{{ $companyCity  }}">
       <input type="hidden" id="overpass_by_city" value="{{ route('overpass.bycity', ['city' => '']) }}">
    </div>
</div>
<script>
   
    // Load both maps separately
    $(document).ready(function () {
        const companyWorkZoneName = $("#company_work_zone_name_val_f").val();
       
        setTimeout(() => {
           if (companyWorkZoneName) {
               loadOverPassMap(companyWorkZoneName,false, "company_work_zone_map", "#FF0000", ($location ?? null));
           }
          
        }, 2000);
    });

</script>
