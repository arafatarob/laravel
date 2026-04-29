@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
         <!-- ============ MANAGE SERVICES ============ -->
            <div id="manage-services" class="page">
                <div class="section-header">
                    <h1>Manage Services</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('service-modal')">+ Add Service</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Service Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Orders</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Web Design</td>
                                        <td>Beautiful website design</td>
                                        <td>$2,499</td>
                                        <td>145</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                            <button class="action-btn action-btn-delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Web Development</td>
                                        <td>Full-stack web development</td>
                                        <td>$5,999</td>
                                        <td>128</td>
                                        <td><span class="badge badge-success">Active</span></td>
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

            <div id="service-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add Service</span>
                        <button class="modal-close" type="button" onclick="closeModal('service-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Service Name</label>
                        <input type="text" id="service-name" class="form-input" placeholder="Enter service name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea id="service-description" class="form-textarea" placeholder="Enter service description"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="text" id="service-price" class="form-input" placeholder="$0">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('service-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="submitServiceForm()">Add Service</button>
                    </div>
                </div>
            </div>
       </section>
@endsection