@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
        <!-- ============ ADMIN SETTINGS ============ -->
            <div id="admin-settings" class="page">

                <div class="content">
                    <div class="card">
                        <h2 style="margin-bottom: 24px;">System Settings</h2>
                        
                        <div class="form-group">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-input" value="Digital Pro Marketing">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Company Email</label>
                            <input type="email" class="form-input" value="contact@digitalpro.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-input" value="+1 (555) 123-4567">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Currency</label>
                            <select class="form-select">
                                <option>USD ($)</option>
                                <option>EUR (€)</option>
                                <option>GBP (£)</option>
                            </select>
                        </div>

                        <button class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
            </div>
    </section>
@endsection