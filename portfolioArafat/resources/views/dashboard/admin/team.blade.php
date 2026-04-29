@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
        <!-- ============ MANAGE TEAM ============ -->
            <div id="manage-team" class="page">
                <div class="section-header">
                    <h1>Manage Team</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('team-modal')">+ Add Team Member</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Projects</th>
                                        <th>Joined</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Arif Rahman</td>
                                        <td>Lead Developer</td>
                                        <td>arif@company.com</td>
                                        <td>15</td>
                                        <td>2022-01-10</td>
                                        <td>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                            <button class="action-btn action-btn-delete">Remove</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sarah Harris</td>
                                        <td>UI/UX Designer</td>
                                        <td>sarah@company.com</td>
                                        <td>12</td>
                                        <td>2022-03-15</td>
                                        <td>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                            <button class="action-btn action-btn-delete">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="team-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add Team Member</span>
                        <button class="modal-close" type="button" onclick="closeModal('team-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" id="team-name" class="form-input" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <input type="text" id="team-role" class="form-input" placeholder="Enter role">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" id="team-email" class="form-input" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Projects</label>
                        <input type="number" id="team-projects" class="form-input" placeholder="Number of projects">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('team-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="saveTeamMember()">Add Member</button>
                    </div>
                </div>
            </div>

            <div id="team-modal-arif" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Edit Team Member</span>
                        <button class="modal-close" type="button" onclick="closeModal('team-modal-arif')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" id="team-name-arif" class="form-input" value="Arif Rahman">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <input type="text" id="team-role-arif" class="form-input" value="Lead Developer">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" id="team-email-arif" class="form-input" value="arif@company.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Projects</label>
                        <input type="number" id="team-projects-arif" class="form-input" value="15">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('team-modal-arif')">Cancel</button>
                        <button class="btn btn-primary" onclick="saveTeamMemberEdit('team-modal-arif')">Save</button>
                    </div>
                </div>
            </div>

            <div id="team-modal-sarah" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Edit Team Member</span>
                        <button class="modal-close" type="button" onclick="closeModal('team-modal-sarah')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" id="team-name-sarah" class="form-input" value="Sarah Harris">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <input type="text" id="team-role-sarah" class="form-input" value="UI/UX Designer">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" id="team-email-sarah" class="form-input" value="sarah@company.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Projects</label>
                        <input type="number" id="team-projects-sarah" class="form-input" value="12">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('team-modal-sarah')">Cancel</button>
                        <button class="btn btn-primary" onclick="saveTeamMemberEdit('team-modal-sarah')">Save</button>
                    </div>
                </div>
            </div>

    </section>
@endsection