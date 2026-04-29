@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
         <!-- ============ MANAGE PRICING ============ -->
            <div id="manage-pricing" class="page">
                <div class="section-header">
                    <h1>Manage Pricing</h1>
                </div>

                <div class="content">
                    <div class="grid-3">
                        <div class="card">
                            <h2 style="margin-bottom: 12px;">Web Design</h2>
                            <div style="font-size: 28px; font-weight: 900; color: var(--primary); margin-bottom: 16px;">$2,499</div>
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 12px;" onclick="openPriceModal('Web Design')">Edit Price</button>
                            <button class="btn btn-secondary" style="width: 100%;">View Details</button>
                        </div>

                        <div class="card">
                            <h2 style="margin-bottom: 12px;">Web Development</h2>
                            <div style="font-size: 28px; font-weight: 900; color: var(--primary); margin-bottom: 16px;">$5,999</div>
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 12px;" onclick="openPriceModal('Web Development')">Edit Price</button>
                            <button class="btn btn-secondary" style="width: 100%;">View Details</button>
                        </div>

                        <div class="card">
                            <h2 style="margin-bottom: 12px;">Digital Marketing</h2>
                            <div style="font-size: 28px; font-weight: 900; color: var(--primary); margin-bottom: 16px;">$1,999</div>
                            <button class="btn btn-primary" style="width: 100%; margin-bottom: 12px;" onclick="openPriceModal('Digital Marketing')">Edit Price</button>
                            <button class="btn btn-secondary" style="width: 100%;">View Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="price-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Edit Pricing</span>
                        <button class="modal-close" type="button" onclick="closeModal('price-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Service</label>
                        <input type="text" id="price-service" class="form-input" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">New Price</label>
                        <input type="text" id="price-value" class="form-input" placeholder="$0">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Notes</label>
                        <textarea id="price-notes" class="form-textarea" placeholder="Add any pricing notes"></textarea>
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end;">
                        <button class="btn btn-secondary" onclick="closeModal('price-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="savePrice()">Save</button>
                    </div>
                </div>
            </div>

    </section>
@endsection