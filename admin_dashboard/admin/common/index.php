
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/dashboard.css">
   <div class="main-content">
     <section class="adminHome">
        <div class="content">
                    <div class="grid-4">
                        <div class="stat-card">
                            <div class="stat-label">👥 Total Users</div>
                            <div class="stat-value">287</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">📦 Total Orders</div>
                            <div class="stat-value">1,245</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">💰 Revenue</div>
                            <div class="stat-value">$285K</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-label">⭐ Rating</div>
                            <div class="stat-value">4.8/5</div>
                        </div>
                    </div>

                    <div class="grid-2" style="margin-top: 30px;">
                        <div class="card">
                            <h2 style="margin-bottom: 24px;">Recent Orders</h2>
                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>User</th>
                                            <th>Service</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD-100</td>
                                            <td>John Doe</td>
                                            <td>Web Design</td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td>$2,499</td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-101</td>
                                            <td>Jane Smith</td>
                                            <td>Web Dev</td>
                                            <td><span class="badge badge-warning">In Progress</span></td>
                                            <td>$5,999</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <h2 style="margin-bottom: 24px;">Service Performance</h2>
                            <div style="margin-bottom: 16px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                    <span>Web Design</span>
                                    <span style="color: var(--primary);">145 orders</span>
                                </div>
                                <div style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 85%; height: 100%; background: linear-gradient(90deg, var(--primary), var(--secondary));"></div>
                                </div>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                    <span>Web Development</span>
                                    <span style="color: var(--primary);">128 orders</span>
                                </div>
                                <div style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 75%; height: 100%; background: linear-gradient(90deg, var(--primary), var(--secondary));"></div>
                                </div>
                            </div>
                            <div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                    <span>Digital Marketing</span>
                                    <span style="color: var(--primary);">98 orders</span>
                                </div>
                                <div style="width: 100%; height: 8px; background: var(--dark); border-radius: 4px; overflow: hidden;">
                                    <div style="width: 57%; height: 100%; background: linear-gradient(90deg, var(--primary), var(--secondary));"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
   </div>