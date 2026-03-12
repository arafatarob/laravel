<link href="https://fonts.googleapis.com/css2?family=Gravitas+One&display=swap" rel="stylesheet">
<style>
.contact__statut_logo__info{
    position:relative;
}
.contact__statut__logo {

  border: 6px solid #f00;
  color: #ff0000;
  font-size: 20px;
  text-align: center;
  transform: rotate(-15deg);
  font-family: 'Gravitas One', cursive;
  text-transform: uppercase;
  padding: 6px 20px;
 
}
</style>
@php
    use App\Models\Contact;
    use App\Models\Config;
 
//status logo
$statutOpt = Config::$contact_status_opt[$contact->statut];
$statutValLabel = $statutOpt ? strtolower($statutOpt['value_txt']) : '';
$statutColor = $statutOpt ? $statutOpt['color'] : '';
$statutWidth = $statutOpt ? $statutOpt['width'] : '';

$statusLabelTxt = ucwords($lang[$statutValLabel] ?? '');

//status logo
    $contactDate = $contact->created_at->format('d/m/Y');
    $contactTime = $contact->created_at->format('H:i');
    $client_address = '';
    if (!empty($contact->client_place_name)) {
        $client_address = $contact->client_place_name . '<br>';
    }
    $client_address .= $contact->client_address;
    if (!empty($contact->client_address_2)) {
        $client_address .= '<br>' . $contact->client_address_2;
    }
    $client_address .= '<br>' . $contact->client_zipcode . ' ' . $contact->client_city;

    $clientAddressTop = '';
    $clientAddressTop .= $contact->client_address;
    if (!empty($contact->client_address_2)) {
        $clientAddressTop .= '<br>' . $contact->client_address_2;
    }
    $clientAddressTop .= '<br>' . $contact->client_zipcode . ' ' . $contact->client_city;
    //company info
    $capital = $company->capital;
    if ($default_currency) {
        $capital = getSelectedCurrencyAmount($default_currency, $company->capital ?? 0);
        $capital .= ' ' . $default_currency->symbol;
    }
    $company_address2 = !empty($company->address2) ? trim($company->address2) . ', ' : '';
    $companyCapital = intval($capital);
    $companyCapital = ($companyCapital > 1000) ?  number_format($companyCapital, 0, '', '.') : $companyCapital;

    $companyDataForFooterInfo =
        ($company->name) .
        ' ' .
        strtoupper($company->type) .
        ', ' .
        $company->address .
        ', ' .
        $company_address2 .
        ' ' .
        $company->zip_code .
        ' ' .
         str_replace('-', ' ', $company->city) .
        ', Capital : ' .
        ($companyCapital).' '.$default_currency->symbol .
        ',  SIRET : ' .
        $company->sirft .
        ', ' .
        ($lang['vat_no'] ?? 'VAT N°') .
        ' : ' .
        $company->numero_tva;
@endphp



<div class="message">
    <div class="send-success majortextsize"
        style="display: flex;text-align: left;padding: 10px 5px !important;font-size: 14.5px;align-items: center;">
        <img class="msgIcon" src="{{ url('/assets_front/images/doneIcon.png') }}" alt="" srcset=""
            style=" margin-right: 3px; width: 20px; ">
         Nous avons bien reçu votre demande et nous vous avons envoyè un rècapitulatif par email, nous reviendrons vers vous dès que possible par email ou/et téléphone.
    </div>
</div>
<div class="row majortextsize" style="padding:0px 15px;">
    <div class="contact__area">
        <div class="contact__logo">
            <a href="{{ route('home.index') }}">
                <img src="{{ url('images/company/' . $company->logo) }}" alt="company logo">
            </a>
        </div>
        <div class="contact__heading">
            <h3 class="majortextsize" style="text-align: center;">
                {{ $lang['support_ticket'] ?? 'Ticket De Support' }} N° :
                {{ createUniqueId($contact->created_at, $contact->id) }}
            </h3>
        </div>
    </div>
    <div class="conact__header__information__section">
        <div class="contact__first__information">
            <div class="company__info__box">
                <ul>
                    <li><b>{{ $company->name . ' ' . strtoupper($company->type) ?? '' }}</b>
                    </li>
                    <li>{{ $company->address ?? '' }}</li>
                    <li>{{ $company->zip_code ?? '' }} {{ $company->city ?? '' }}</li>
                    <li><i class="fa fa-phone"></i> <b>{{ $lang['phone'] ?? 'Téléphone' }} : </b>{{ $company->phone ?? '' }}</li>
                    <li><i class="fa fa-print"></i> <b>{{ $lang['fax'] ?? 'Fax' }} : </b>{{ $company->fax ?? '' }}</li>
                    <li><i class="fa fa-envelope"></i> <b>{{ $lang['email'] ?? 'Email' }} : </b>{{ $company->email ?? '' }}</li>
                    <li><i class="fa fa-globe"></i> <b>{{ $lang['website'] ?? 'Siteweb' }} : </b>{{ $company->dmain_text ?? '' }}</li>
                    <li><i class="fa fa-id-card"></i> <b>{{ $lang['license_no'] ?? 'License N°' }} : </b>{{ $company->licence ?? '' }}</li>

                </ul>
            </div>
        </div>
        <div class="contact__statut_logo__info">
            <div class="contact__statut__logo"><b>{{$statusLabelTxt}}</b></div>
        </div>
        <div  style="position: relative;padding-right: 65px;" class="contact__second__information">
            <div class="contact__client__info__box" style="display: flex;justify-content: center;">
                <ul>
                    @if (empty($contact->client_organization))
                        <li>
                            <b>{{ ucwords(strtolower($contact->client_civility . ' ' . $contact->client_first_name . ' ' . $contact->client_last_name)) }}</b>
                        </li>
                    @else
                        <li><b>{{ strtoupper($contact->client_organization) }}</b></li>
                        <li>
                            <b>{{ ucwords(strtolower($contact->client_civility . ' ' . $contact->client_first_name . ' ' . $contact->client_last_name)) }}</b>
                        </li>
                    @endif
                    <li>{!! $clientAddressTop !!}</li>
             </ul>
            </div>
            <div class="contact__client__info__box__2" style="padding-top: 10px;">
                <ul>
                   
                        
                    <li id="telePhone"><i class="fa fa-phone"></i> <b>{{ $lang['phone'] ?? 'Téléphone' }} : </b>{{ $contact->client_phone ?? '' }}</li>

                    @if(!empty($contact->client_fax ))
                    <li id="faX"><i class="fa fa-fax"></i> <b>{{ $lang['fax'] ?? 'Fax' }} : </b>{{ $contact->client_fax ?? '' }}</li>
                    @endif
                    
                    <li id="emaiL"><i class="fa fa-envelope"></i> <b>{{ $lang['email'] ?? 'Email' }} : </b>{{ $contact->client_email ?? '' }}</li>
                   
                </ul>
            </div>
           
        </div>
    </div>

    <div style="position: relative" class="contact__body__information_section majortextsize">
        
        <div class="contact__custom__b">
                <span class="majortextsize" style="margin-top: -0.1cm">{{ $lang['sent_on'] ?? 'Sent on'}} {{ $contactDate }} {{ $lang['at'] ?? 'at' }}
                    {{ $contactTime }} </span>
            </p>
            <p class="majortextsize" style=" text-align: right;">Fait à
                {{ str_replace('-', ' ', $company->city) }} le
                {{ $contactDate }} </p>
            <p>
                Nous avons bien reçu votre demande à l'attention de notre service {{ucwords($lang[strtolower($contact->department->name)] ?? $contact->department->name)}} concernant un(e) {{$lang[strtolower($contact->purpose->name)] ?? $contact->purpose->name}}, nous reviendrons vers vous dés que possible par email et/ou téléphone.
            </p>
            
        </div>
        <div class="contact__custom__b majortextsize" style="display:flex;">
            <div>
                <span class="majortextsize"><b>{{ $lang['user_type'] ?? "Type d'utilisateur" }} : </b>
                    {{ ucwords($lang[strtolower($contact->user_type)] ?? $contact->user_type) }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['department'] ?? 'Département' }} : </b>
                    {{ ucwords($lang[strtolower($contact->department->name)] ?? $contact->department->name) }}</span>
            </div>
            @php
            $responsibleUserValue = "";
            if ($contact->operatorUser) {
                $responsibleUserValue = ucwords($contact->operatorUser->civility ?? '') . ' ' .
                                        ucwords($contact->operatorUser->first_name ?? '') . ' ' .
                                        ucwords($contact->operatorUser->last_name ?? '');
            }
            @endphp
            <div>
                <span class="majortextsize"><b>{{ $lang['responsible'] ?? 'Responsible' }} : </b>
                    {{ $responsibleUserValue }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['priority'] ?? 'Priorité' }} : </b>
                    {{ ucwords($lang[strtolower($contact->contactPriority->name)] ?? $contact->contactPriority->name) }}</span>
            </div>
            @php
            $contactSince = formatTimeDifference($contact->created_at,$lang);
            @endphp
            <div>
                <span class="majortextsize"><b>{{ $lang['since'] ?? 'Since' }} : </b>
                    {{ $contactSince }}</span>
            </div>


            <div>
                @if ($lang['priority'])
                    @php
                        $status = 'Statut';
                    @endphp
                @else
                    @php

                        $status = 'Status';
                    @endphp
                @endif



                <span class="majortextsize"><b>{{ $status }} : </b>
                    Nouveau
                    {{-- {{ ucwords($lang[strtolower($contact->department->name)] ?? $contact->department->name) }}
                    concernant un(e)
                    {{ ucwords($lang[strtolower($contact->purpose->name)] ?? $contact->purpose->name) }} --}}</span>
            </div>
        </div>
        <div class="contact__custom__b majortextsize" style="display:flex;">
            <div>
                <span class="majortextsize"><b>{{ $lang['civility'] ?? 'Civilité' }} :
                    </b>{{ ucwords(strtolower($contact->client_civility)) }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['first_name'] ?? 'Prénom' }} : </b>
                    {{ ucwords(strtolower($contact->client_first_name)) }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['last_name'] ?? 'Nom' }} : </b>
                    {{ ucwords(strtolower($contact->client_last_name)) }}</span>
            </div>
            @if (!empty($contact->client_organization))
                <div>
                    <span class="majortextsize"><b>{{ $lang['organization_or_company'] ?? 'Organisme ou  Société' }} :
                        </b>
                        {{ strtoupper($contact->client_organization) }}</span>
                </div>
            @endif
        </div>
        <div class="contact__custom__b" style="display:flex;">
            <div>
                <span class="majortextsize"><b>{{ $lang['phone'] ?? 'Téléphone' }} : </b>
                    {{ $contact->client_phone }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['email'] ?? 'Email' }} : </b> {{ $contact->client_email }}
                </span>
            </div>
           
            <div>
                <span class="majortextsize" id="conFax"><b>{{ $lang['fax'] ?? 'Fax' }} : </b> {{ (!empty($contact->client_fax)) ? $contact->client_fax : ($lang['none'] ?? 'None') }}
                </span>
            </div>
           
        </div>
        <div class="contact__custom__b" style="display:flex;">
            <div class="majortextsize" style="display:flex;">
                <div>
                    <span class="majortextsize"><b>{{ $lang['address'] ?? 'Adresse' }} : </b></span>
                </div>
                <div>
                    <span class="majortextsize">{!! $client_address !!}</span>
                </div>
            </div>
        </div>
        <div class="contact__custom__b majortextsize">
            <div>
                <span class="majortextsize"><b>{{ $lang['purpose'] ?? 'Objet' }} : </b>
                    {{ ucwords($lang[strtolower($contact->purpose->name)] ?? $contact->purpose->name) }}</span>
            </div>
            <div>
                <span class="majortextsize"><b>{{ $lang['message'] ?? 'Message' }} : </b></span>
                <p class="majortextsize">{{ $contact->message }}</p>
            </div>
        </div>
        <div class="contact__custom__b majortextsize">
            <div>
                <span class="majortextsize"><b>{{ $lang['attachments_files'] ?? 'Fichier(s)  Attaché(s)' }} : </b>
                 {{ empty($contact->images) ? ($lang['none'] ?? 'None') : '' }}</span>
                <div>
                    @if ($contact->images != null)
                        @foreach (json_decode($contact->images) as $key => $image)
                            <div style="display:flex;gap:10px;">
                                <i>{{ $image }}</i>
                                <a href="{{ url('/') }}/images/contacts/{{ $image }}" download=""><i
                                        class="fa fa-download" aria-hidden="true"></i></a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="contact__custom__b">
            <p class="majortextsize">
                Veuillez agréer {{ ucwords(strtolower($contact->client_civility . ' ' . $contact->client_first_name . ' ' . $contact->client_last_name)) }} nos salutations distinguées.
            </p>
        </div>
    </div>

</div>
<div class="contact__footer__info__box majortextsize">
    <p>{{ $companyDataForFooterInfo }}</p>
</div>
