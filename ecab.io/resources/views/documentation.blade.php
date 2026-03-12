
@include('front.common.header')

<style>
    
    .breadcrumb {
        width: 100% !important;
        height: 40px;
        margin-top: 0px !important;
        padding: 0px 0px;
        display: block;
        background: transparent !important;
        margin-bottom: 0px !important;
    }

    aside {
        margin-top: 10px !important;
        float: left;
        line-height: 30px;
        padding-left: 6px;
        color: #fff;
    }

    .breadcrumb .nav-links ul li a {
        padding: 2px 15px 5px 5px;
        display: inline-block;
        background-image: url(/web/20240221204357im_/https://ecab.io/images/breadcrumb-blue.png);
        background-position: center right;
        background-repeat: no-repeat;
        font-size: 13px;
        color: #0072bb;
        text-decoration: none;
    }

    .breadcrumb .nav-links ul li {
        float: left;
        list-style: none;
    }
     .left-side-cont {
        float: left;
        width: 100%;
        border-radius: 5px;
        margin: 10px 0px 10px 10px;
    }

    .faqs_category {
        margin: 0;
        padding: 5px 10px 6px 50px;
        cursor: pointer;
        font-size: 20px;
        border: #cbdae1 1px solid;
        margin: 0 0 0px 0;
        text-align: left;
        color: #ffffff;
        width: 100%;
        font-weight: bolder;
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
    }

    .faqs .faq h3 {
        margin: 0;
        padding: 5px 10px 6px 50px;
        cursor: pointer;
        font-size: 24px;
        border: #cbdae1 1px solid;
        margin: 0 0 0px 0;
        text-align: left;
        color: #0A8FC8;
        width: 100%;
        background: linear-gradient(#ffffff, #ffffff 25%, #d0d0d0) !important;
    }


    .breadcrumb .nav-links ul li .aa {
        padding: 2px 15px 5px 5px;
        display: inline-block;
        background-image: url(https://web.archive.org/web/20240221204357im_/https://handio.fr/assets/system_design/images/breadcrumb-blue.png);
        background-position: center right;
        background-repeat: no-repeat;
        font-size: 19px;
        color: #0072bb;
        text-decoration: none;
    }

    .btn-primary {
        background: linear-gradient(to bottom, #44c0e5 0%, #35add1 39%, #0d85a8 100%) !important;
    }
</style>

<div class="container-fluid" style="background-color: rgba(235, 244, 255);">
<div class="breadcrumb" style="background-color: rgba(235, 244, 255);">
<div class="container">
<div class="row">
<aside class="nav-links">
<ul>
<li> <a href="https://web.archive.org/web/20240221204357/https://ecab.io/" class="aa font-bold"> Accueil </a> </li>
<li class="active font-bold"><a href="javascript:void(0)" style="font-size : 19px;">&nbsp;Downloads </a></li>
</ul>
</aside>
</div>
</div>
</div>
<div class="container">
<div class="row" style="background-color: rgba(235, 244, 255);">
<div class="col-md-8" style="padding-left: 0px !important;">
<div class="left-side-cont" style="margin:0px 0px 0px -2px;">
<article class="content">
<div class="faqs" style="margin-top:15px; margin-left : 50px ;">
<div class="faq-container">
<h3 style="padding: 15px 10px;font-size: 19px;" class="faqs_category">Category 1</h3>

<section>
<div style="display: flex; justify-content: space-between; background: linear-gradient(#ffffff, #ffffff 25%, #d0d0d0) !important; align-items: center; padding: 5px 13px !important;">
<div>
<h3 class style=" font-weight: bold; color: #0A8FC8; font-size: 19px;">
Download1 test file </h3>
</div>
<div>
<a class="btn btn-primary" style="margin-left: auto !important;" target="_blank" href download>
<span style="margin-left: auto !important; font-size: 17px; font-weight: bold;"> Download Now &nbsp;</span>
<i class="fa fa-download pull-right" style="font-size: 20px;"></i>
</a>
</div>
</div>
</section>
<section>
<div style="display: flex; justify-content: space-between; background: linear-gradient(#ffffff, #ffffff 25%, #d0d0d0) !important; align-items: center; padding: 5px 13px !important;">
<div>
<h3 class style=" font-weight: bold; color: #0A8FC8; font-size: 19px;">
Another test file for downloads. </h3>
</div>
<div>
<a class="btn btn-primary" style="margin-left: auto !important;" target="_blank" href download>
<span style="margin-left: auto !important; font-size: 17px; font-weight: bold;"> Download Now &nbsp;</span>
<i class="fa fa-download pull-right" style="font-size: 20px;"></i>
</a>
</div>
</div>
</section>

</div>
</div>
<div class="faqs" style="margin-top:5px;margin-left : 50px ;">
<div class="faq-container">
<h3 style="padding: 15px 10px; font-weight: bold;" class="faqs_category">Category2</h3>

<section>
<div style="display: flex; justify-content: space-between; background: linear-gradient(#ffffff, #ffffff 25%, #d0d0d0) !important; align-items: center; padding: 5px 13px !important;">
<div>
<h3 class style=" font-weight: bold; color: #0A8FC8;font-size: 19px;">
Test 3 documents </h3>
</div>
<div>
<a class="btn btn-primary" style="margin-left: auto !important;" target="_blank" href download>
<span style="margin-left: auto !important; font-size: 17px; font-weight: bold;"> Download Now &nbsp;</span>
<i class="fa fa-download pull-right" style="font-size: 20px;"></i>
</a>
</div>
</div>
</section>
</div>
</div>
</article>
</div>
</div>
<div class="col-md-6">
</div>
</div>
</div>
</div>


@include('front.common.footer')