@extends('layout.dashboard')
@section('dashboard')
    <section class="home">
        <!-- ============ SETTINGS ============ -->
            <div id="settings" class="page">

                <div class="content">
                    <div class="card">
                        <h2 style="margin-bottom: 24px;">Preferences</h2>
                        
                        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--border);">
                            <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
                                <div>
                                    <div style="font-weight: 700;">Email Notifications</div>
                                    <div style="color: var(--text-muted); font-size: 13px;">Receive updates about your orders</div>
                                </div>
                            </label>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
                                <div>
                                    <div style="font-weight: 700;">SMS Notifications</div>
                                    <div style="color: var(--text-muted); font-size: 13px;">Get important alerts via SMS</div>
                                </div>
                            </label>
                        </div>

                        <button class="btn btn-primary" style="margin-top: 24px;" onclick="openEntityModal('Save Preferences', 'Your preferences will be saved successfully.')">Save Preferences</button>
                    </div>
                </div>
            </div>
    </section>
@endsection