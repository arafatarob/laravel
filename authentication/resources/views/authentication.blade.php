<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                    <form id="signupForm" method="post" action="{{route('submit')}}">
                        @csrf

                        <div id="step1" class="step">
                            @include('auth.step1')
                        </div>
                        <div id="step2" class="step" style="display: none;">
                            @include('auth.step2')
                        </div>
                        <div id="step3" class="step" style="display: none;">
                            @include('auth.step3')
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button type="button" id="prevBtn" class="btn btn-secondary" style="display: none;">Previous</button>
                            <button type="button" id="nextBtn" class="btn btn-primary">Next</button>
                            <button type="submit" id="submitBtn" class="btn btn-success" style="display: block;">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let currentStep = 1;
    const totalSteps = 3;

    document.getElementById('nextBtn').addEventListener('click', function() {
        if (validateStep(currentStep)) {
            if (currentStep < totalSteps) {
                document.getElementById('step' + currentStep).style.display = 'none';
                currentStep++;
                document.getElementById('step' + currentStep).style.display = 'block';
                updateButtons();
            }
        }
    });

    document.getElementById('prevBtn').addEventListener('click', function() {
        if (currentStep > 1) {
            document.getElementById('step' + currentStep).style.display = 'none';
            currentStep--;
            document.getElementById('step' + currentStep).style.display = 'block';
            updateButtons();
        }
    });

    document.getElementById('submitBtn').addEventListener('click', function() {
        if (validateStep(currentStep)) {
            alert('Signup completed! (Frontend only)');
        }
    });

    document.getElementById('submitBtn').addEventListener('click', function() {
        if (validateStep(currentStep)) {
            alert('Signup completed! (Frontend only)');
        }
    });

    function validateStep(step) {
        let isValid = true;
        if (step === 1) {
            const firstName = document.getElementById('first_name').value.trim();
            const lastName = document.getElementById('last_name').value.trim();
            const number = document.getElementById('number').value.trim();
            if (!firstName) {
                alert('First name is required.');
                isValid = false;
            }
            if (!lastName) {
                alert('Last name is required.');
                isValid = false;
            }
            if (!number || !/^\d{10}$/.test(number)) {
                alert('Please enter a valid 10-digit phone number.');
                isValid = false;
            }
        } else if (step === 2) {
            const address = document.getElementById('address').value.trim();
            const country = document.getElementById('country').value.trim();
            const zipCode = document.getElementById('zip_code').value.trim();
            if (!address) {
                alert('Address is required.');
                isValid = false;
            }
            if (!country) {
                alert('Country is required.');
                isValid = false;
            }
            if (!zipCode || !/^\d{5}$/.test(zipCode)) {
                alert('Please enter a valid 5-digit zip code.');
                isValid = false;
            }
        } else if (step === 3) {
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            if (!email || !/\S+@\S+\.\S+/.test(email)) {
                alert('Please enter a valid email.');
                isValid = false;
            }
            if (!password || password.length < 6) {
                alert('Password must be at least 6 characters.');
                isValid = false;
            }
        }
        return isValid;
    }
</script>
</body>
</html>