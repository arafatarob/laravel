@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
        <!-- ============ MANAGE USERS ============ -->
            <div id="manage-users" class="page">
                <div class="section-header">
                    <h1>Manage Users</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('user-modal')">+ Add User</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Orders</th>
                                        <th>Joined</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>john@example.com</td>
                                        <td>12</td>
                                        <td>2023-12-01</td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td>
                                            <button class="action-btn action-btn-edit">Edit</button>
                                            <button class="action-btn action-btn-delete">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jane Smith</td>
                                        <td>jane@example.com</td>
                                        <td>8</td>
                                        <td>2024-01-15</td>
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

            <div id="user-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add User</span>
                        <button class="modal-close" type="button" onclick="closeModal('user-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" id="user-name" class="form-input" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" id="user-email" class="form-input" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Role</label>
                        <input type="text" id="user-role" class="form-input" placeholder="Enter role">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('user-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="submitUserForm()">Add User</button>
                    </div>
                </div>
            </div>
    </section>
@endsection