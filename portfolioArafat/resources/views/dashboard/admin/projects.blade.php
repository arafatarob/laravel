@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
        <!-- ============ MANAGE PROJECTS ============ -->
            <div id="manage-projects" class="page">
                <div class="section-header">
                    <h1>Manage Projects</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('project-modal')">+ Add Project</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Client</th>
                                        <th>Service</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>TechStore Website</td>
                                        <td>TechStore Inc</td>
                                        <td>Web Design</td>
                                        <td>100%</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td>
                                            <button class="action-btn action-btn-view" onclick="openEntityModal('View Project', 'Show details for Creative Agency Project.', 'Cancel')">View</button>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>HealthFlow App</td>
                                        <td>HealthFlow</td>
                                        <td>Mobile App</td>
                                        <td>75%</td>
                                        <td><span class="badge badge-warning">In Progress</span></td>
                                        <td>
                                            <button class="action-btn action-btn-view" onclick="openEntityModal('View Project', 'Show details for HealthFlow App.', 'Cancel')">View</button>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="project-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add Project</span>
                        <button class="modal-close" type="button" onclick="closeModal('project-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Project Name</label>
                        <input type="text" id="project-name" class="form-input" placeholder="Enter project name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Client</label>
                        <input type="text" id="project-client" class="form-input" placeholder="Enter client name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Service</label>
                        <input type="text" id="project-service" class="form-input" placeholder="Enter service type">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('project-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="submitProjectForm()">Add Project</button>
                    </div>
                </div>
            </div>
    </section>
@endsection