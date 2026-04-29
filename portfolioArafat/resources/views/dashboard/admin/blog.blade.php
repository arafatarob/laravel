@extends('layout.admin_dashboard')
@section('admin_dashboard')
    <section class="adminHome">
        <!-- ============ MANAGE BLOG ============ -->
            <div id="manage-blog" class="page">
                <div class="section-header">
                    <h1>Manage Blog</h1>
                    <div class="section-header-actions">
                        <button class="btn btn-primary" onclick="openModal('blog-modal')">+ Add Post</button>
                    </div>
                </div>

                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Web Design Trends 2024</td>
                                        <td>Design</td>
                                        <td>Sarah Harris</td>
                                        <td>2024-03-15</td>
                                        <td>1,245</td>
                                        <td><span class="badge badge-success">Published</span></td>
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

            <div id="blog-modal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <span>Add Blog Post</span>
                        <button class="modal-close" type="button" onclick="closeModal('blog-modal')">×</button>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" id="blog-title" class="form-input" placeholder="Enter post title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <input type="text" id="blog-category" class="form-input" placeholder="Enter category">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Author</label>
                        <input type="text" id="blog-author" class="form-input" placeholder="Enter author name">
                    </div>
                    <div class="step-buttons" style="justify-content: flex-end; gap: 12px;">
                        <button class="btn btn-secondary" onclick="closeModal('blog-modal')">Cancel</button>
                        <button class="btn btn-primary" onclick="submitBlogForm()">Add Post</button>
                    </div>
                </div>
            </div>

    </section>
@endsection