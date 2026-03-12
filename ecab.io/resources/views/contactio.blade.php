@include('front.common.header');



<div id="main-body-holder" class="container-fluid">
<section id="main-body">
<div class="container">
<div class="row">
<div class="col-xs-3"></div>

<div class="col-xs-9 main-content col-md-12 mainContent">
<div class="header-lined">
<ol class="breadcrumb">
<li>
<a style="font-size: 20px !important;" href="https://web.archive.org/web/20240221203250/https://ecab.io/"> Accueil</a>
</li>
<li class="active" style="font-size: 20px !important;">
Contact
</li>
</ol>
</div>
<form>
<div class="row">
<div class="col-md-2">
<label for>Civilite</label>
<select class="form-control bgWhite" id>
<option value="1">Mr</option>
<option value="2">Mme</option>
<option value="3">Mlle</option>
</select>
</div>
<div class="col-md-2">
<label for="lastName" class>Last Name</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
<div class="col-md-2">
<label for="lastName" class>First Name</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
<div class="col-md-2">
<label for="lastName" class>Company</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="lastName" class>E-mail</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label for="lastName" class>Telephone</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
</div>
<div class="row">
<div class="col-md-8">
<label for="lastName" class>Object</label>
<input type="text" class="form-control bgWhite" id="lastName" value>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="form-group">
<label for="message">Message</label>
<textarea class="form-control bgWhite" id="message" rows="10"></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-8">
<div class="row">
<div class="col-md-5 text-right">
<label for="exampleFormControlTextarea1"> 3+5 = ?</label>
</div>
<div class="col-md-2  p0">
<input type="text" class="form-control bgWhite w-50" id="lastName" value>
</div>
</div>
</div>
</div>
</form>
</div>
<div class="form-group">
<div class="col-md-8 text-center">
<button type="submit" id="submitBtn" class="btn btn-primary" style="background: #13d014 !important; padding-left: 24px !important; padding-right: 24px !important; font-size: 20px !important;">Envoyer</button>
</div>
</div>
<div class="clearfix"></div>
</div>
</div>
</section>
</div>


@include('front.common.footer');