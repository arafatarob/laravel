@extends('layout.dashboard')
@section('dashboard')
    <section class="home">
        <div class="content">
                    <div class="grid-4">
                        <div class="stat-card">
                            <div class="stat-label">📦 Total Orders</div>
                            <div class="stat-value">12</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">✅ Completed</div>
                            <div class="stat-value">10</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">⏳ Pending</div>
                            <div class="stat-value">2</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">💰 Total Spent</div>
                            <div class="stat-value">$8.5K</div>
                        </div>
                    </div>

                    <div class="card" style="margin-top: 30px;">
                        <h2 style="margin-bottom: 24px;">Recent Orders</h2>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-001</td>
                                        <td>Web Design</td>
                                        <td>2024-03-15</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td>$2,499</td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', '<div><strong>Order #ORD-001</strong><ul><li>Service: Web Design</li><li>Status: Completed</li><li>Amount: $2,499</li><li>Date: 2024-03-15</li></ul></div>', 'Cancel')">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-002</td>
                                        <td>Digital Marketing</td>
                                        <td>2024-03-18</td>
                                        <td><span class="badge badge-warning">In Progress</span></td>
                                        <td>$1,999</td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', '<div><strong>Order #ORD-002</strong><ul><li>Service: Digital Marketing</li><li>Status: In Progress</li><li>Amount: $1,999</li><li>Date: 2024-03-18</li></ul></div>', 'Cancel')">View</button></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-003</td>
                                        <td>Web Development</td>
                                        <td>2024-03-20</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td>$5,999</td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', '<div><strong>Order #ORD-003</strong><ul><li>Service: Web Development</li><li>Status: Completed</li><li>Amount: $5,999</li><li>Date: 2024-03-20</li></ul></div>', 'Cancel')">View</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection