@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
         <!-- ============ MANAGE TESTIMONIALS ============ -->
            <div id="manage-testimonials" class="page">
                <div class="section-header">
                    <h1>Manage Testimonials</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('testimonial-modal')">+ Add Testimonial</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Company</th>
                                        <th>Service</th>
                                        <th>Rating</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>TechStore Inc</td>
                                        <td>Web Design</td>
                                        <td>⭐⭐⭐⭐⭐</td>
                                        <td>2024-03-15</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                            <button class="action-btn action-btn-delete">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="testimonial-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add Testimonial</span>
                        <button class="modal-close" type="button" onclick="closeModal('testimonial-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Client Name</label>
                        <input type="text" id="testimonial-client" class="form-input" placeholder="Enter client name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Company</label>
                        <input type="text" id="testimonial-company" class="form-input" placeholder="Enter company name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rating</label>
                        <input type="text" id="testimonial-rating" class="form-input" placeholder="Enter rating e.g. ⭐⭐⭐⭐⭐">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('testimonial-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="submitTestimonialForm()">Add Testimonial</button>
                    </div>
                </div>
            </div>

    </section>
@endsection