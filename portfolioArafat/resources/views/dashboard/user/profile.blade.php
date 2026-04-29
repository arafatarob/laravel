@extends('layout.dashboard')
@section('dashboard')
    <section class="home">
        <!-- ============ PROFILE ============ -->
            <div id="profile" class="page">

                <div class="content">
                    <div class="card">
                        <h2 style="margin-bottom: 24px;">Profile Information</h2>
                        
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-input" value="John Doe">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-input" value="john@example.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-input" value="+1 234-567-8900">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-input" value="Tech Solutions Inc">
                        </div>

                        <button class="btn btn-primary" style="margin-top: 24px;" onclick="openEntityModal('Save Changes', 'Your profile changes will be saved.')">Save Changes</button>
                    </div>
                </div>
            </div>

    </section>
@endsection