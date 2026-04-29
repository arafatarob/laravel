@extends('layout.dashboard')
@section('dashboard')
    <section class="home">
         <!-- ============ MY ORDERS ============ -->
            <div id="my-orders" class="page">
                <div class="content">
                    <div class="card">
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Service</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                        <th>Progress</th>
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
                                        <td><div style="width: 100%; height: 6px; background: var(--dark); border-radius: 3px;"><div style="width: 100%; height: 100%; background: var(--success); border-radius: 3px;"></div></div></td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', '<div><strong>Order #ORD-001</strong><ul><li>Service: Web Design</li><li>Status: Completed</li><li>Amount: $2,499</li><li>Date: 2024-03-15</li></ul></div>', 'Cancel')">Details</button></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-002</td>
                                        <td>Digital Marketing</td>
                                        <td>2024-03-18</td>
                                        <td><span class="badge badge-warning">In Progress</span></td>
                                        <td>$1,999</td>
                                        <td><div style="width: 100%; height: 6px; background: var(--dark); border-radius: 3px;"><div style="width: 65%; height: 100%; background: var(--warning); border-radius: 3px;"></div></div></td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', '<div><strong>Order #ORD-002</strong><ul><li>Service: Digital Marketing</li><li>Status: In Progress</li><li>Amount: $1,999</li><li>Date: 2024-03-18</li></ul></div>', 'Cancel')">Details</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection