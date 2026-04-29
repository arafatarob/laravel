

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designer || Md Arafat</title>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@0.2.28/bundled/lenis.js"></script>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link rel="shortcut icon" href="./img/site-logo/logo.jpg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('/assets/css/dashboard.css')}}">
</head>
<body>

    @include('dashboard.admin.common.header')

    <main>
        <div class="main-content">
            @yield('admin_dashboard')
        </div>
    </main>



    @include('dashboard.admin.common.sidebar')
    
    <div id="generic-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span id="generic-modal-title">Modal</span>
                <button class="modal-close" type="button" onclick="closeModal('generic-modal')">×</button>
            </div>
            <div class="modal-body" id="generic-modal-body"></div>
            <div class="step-buttons" style="justify-content: flex-end; gap: 12px; margin-top: 24px;">
                <button class="btn btn-secondary" type="button" onclick="closeModal('generic-modal')">Close</button>
                <button class="btn btn-primary" type="button" id="generic-modal-action" onclick="closeModal('generic-modal')">OK</button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/assets/js/cutome.js')}}"></script>
</body>
</html>