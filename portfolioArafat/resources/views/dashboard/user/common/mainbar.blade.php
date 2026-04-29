<!-- ============ MAIN CONTENT ============ -->
        <div class="main-content">
            <!-- ============ USER DASHBOARD ============ -->
            <div id="user-dashboard" class="page active">
                <div class="section-header">
                    <div>
                        <h1>Welcome Back, User!</h1>
                        <p style="color: var(--text-muted); margin-top: 4px;">Manage your services and orders</p>
                    </div>
                </div>

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

            <!-- ============ ORDER SERVICE (3-STEP FORM) ============ -->
            <div id="order-service" class="page">
                <div class="section-header">
                    <h1>Order a Service</h1>
                </div>

                <div class="content">
                    <div class="step-form">
                        <!-- Step Indicator -->
                        <div class="step-indicator">
                            <div class="step-item active" id="step1-indicator">
                                <div class="step-number">1</div>
                                <div class="step-title">Choose Service</div>
                            </div>
                            <div class="step-item" id="step2-indicator">
                                <div class="step-number">2</div>
                                <div class="step-title">Service Details</div>
                            </div>
                            <div class="step-item" id="step3-indicator">
                                <div class="step-number">3</div>
                                <div class="step-title">Review & Submit</div>
                            </div>
                        </div>

                        <!-- Step 1: Choose Service -->
                        <div class="step-content active" id="step-1">
                            <h3 style="margin-bottom: 24px;">Select a Service</h3>
                            <div id="service-error" class="form-error"></div>
                            <div class="grid-2">
                                <div class="service-display-card" onclick="selectService('Web Design', 2499, this)">
                                    <div class="service-icon">🎨</div>
                                    <div class="service-name">Web Design</div>
                                    <div class="service-desc">Beautiful and modern website design</div>
                                    <div class="service-price">$2,499</div>
                                </div>

                                <div class="service-display-card" onclick="selectService('Web Development', 5999, this)">
                                    <div class="service-icon">💻</div>
                                    <div class="service-name">Web Development</div>
                                    <div class="service-desc">Full-stack web application development</div>
                                    <div class="service-price">$5,999</div>
                                </div>

                                <div class="service-display-card" onclick="selectService('Digital Marketing', 1999, this)">
                                    <div class="service-icon">📊</div>
                                    <div class="service-name">Digital Marketing</div>
                                    <div class="service-desc">Complete marketing strategy & execution</div>
                                    <div class="service-price">$1,999</div>
                                </div>

                                <div class="service-display-card" onclick="selectService('Mobile App Dev', 7999, this)">
                                    <div class="service-icon">📱</div>
                                    <div class="service-name">Mobile App Dev</div>
                                    <div class="service-desc">iOS and Android applications</div>
                                    <div class="service-price">$7,999</div>
                                </div>

                                <div class="service-display-card" onclick="selectService('E-Commerce', 4999, this)">
                                    <div class="service-icon">🛒</div>
                                    <div class="service-name">E-Commerce</div>
                                    <div class="service-desc">Complete online store setup</div>
                                    <div class="service-price">$4,999</div>
                                </div>

                                <div class="service-display-card" onclick="selectService('Consulting', 999, this)">
                                    <div class="service-icon">🔍</div>
                                    <div class="service-name">Consulting</div>
                                    <div class="service-desc">Expert digital consultation</div>
                                    <div class="service-price">$999</div>
                                </div>
                            </div>

                            <div id="selected-service-info" style="margin-top: 30px; padding: 20px; background: var(--dark); border-radius: 8px; border: 1px solid var(--border); display:none;">
                                <p style="color: var(--text-muted); margin-bottom: 8px;">Selected Service:</p>
                                <div style="font-size: 20px; font-weight: 700; margin-bottom: 8px;"><span id="selected-service-name">--</span></div>
                                <div style="font-size: 18px; color: var(--primary); font-weight: 700;"><span id="selected-service-price">$0</span></div>
                            </div>

                            <div class="step-buttons">
                                <div></div>
                                <button class="btn btn-step btn-next" onclick="nextStep(1)">Next Step →</button>
                            </div>
                        </div>

                        <!-- Step 2: Service Details -->
                        <div class="step-content" id="step-2">
                            <h3 style="margin-bottom: 24px;">Tell Us More About Your Project</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Project Name</label>
                                <input type="text" class="form-input" placeholder="Enter your project name" id="projectName">
                                <div id="projectName-error" class="form-error"></div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Project Description</label>
                                <textarea class="form-textarea" placeholder="Describe your project in detail" id="projectDesc"></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Timeline</label>
                                <select class="form-select" id="timeline">
                                    <option>Select timeline</option>
                                    <option>1-2 weeks</option>
                                    <option>2-4 weeks</option>
                                    <option>1-2 months</option>
                                    <option>2-3 months</option>
                                    <option>3+ months</option>
                                </select>
                                <div id="timeline-error" class="form-error"></div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Budget</label>
                                <select class="form-select" id="budget">
                                    <option>Select budget</option>
                                    <option>Under $1000</option>
                                    <option>$1000 - $5000</option>
                                    <option>$5000 - $10000</option>
                                    <option>$10000+</option>
                                </select>
                            </div>

                            <div class="step-buttons">
                                <button class="btn btn-step btn-back" onclick="prevStep(1)">← Back</button>
                                <button class="btn btn-step btn-next" onclick="nextStep(2)">Next Step →</button>
                            </div>
                        </div>

                        <!-- Step 3: Review & Submit -->
                        <div class="step-content" id="step-3">
                            <h3 style="margin-bottom: 24px;">Review Your Order</h3>
                            
                            <div style="background: var(--dark); border-radius: 12px; padding: 24px; margin-bottom: 24px; border: 1px solid var(--border);">
                                <div style="margin-bottom: 16px;">
                                    <span style="color: var(--text-muted); font-size: 13px;">Service</span>
                                    <div style="font-size: 18px; font-weight: 700; margin-top: 4px;"><span id="review-service">--</span></div>
                                </div>

                                <div style="margin-bottom: 16px; padding-top: 16px; border-top: 1px solid var(--border);">
                                    <span style="color: var(--text-muted); font-size: 13px;">Project Name</span>
                                    <div style="font-size: 16px; margin-top: 4px;"><span id="review-project">--</span></div>
                                </div>

                                <div style="margin-bottom: 16px; padding-top: 16px; border-top: 1px solid var(--border);">
                                    <span style="color: var(--text-muted); font-size: 13px;">Timeline</span>
                                    <div style="font-size: 16px; margin-top: 4px;"><span id="review-timeline">--</span></div>
                                </div>

                                <div style="padding-top: 16px; border-top: 1px solid var(--border);">
                                    <span style="color: var(--text-muted); font-size: 13px;">Total Amount</span>
                                    <div style="font-size: 28px; font-weight: 900; color: var(--primary); margin-top: 4px;"><span id="review-price">$0</span></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                    <input type="checkbox" style="width: 20px; height: 20px; cursor: pointer;">
                                    <span>I agree to the terms and conditions</span>
                                </label>
                            </div>

                            <div class="step-buttons">
                                <button class="btn btn-step btn-back" onclick="prevStep(2)">← Back</button>
                                <button class="btn btn-step btn-next" onclick="submitOrder()">✓ Submit Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ MY ORDERS ============ -->
            <div id="my-orders" class="page">
                <div class="section-header">
                    <h1>My Orders</h1>
                </div>

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
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', 'Order #ORD-001 for Web Design has been completed successfully.')">Details</button></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-002</td>
                                        <td>Digital Marketing</td>
                                        <td>2024-03-18</td>
                                        <td><span class="badge badge-warning">In Progress</span></td>
                                        <td>$1,999</td>
                                        <td><div style="width: 100%; height: 6px; background: var(--dark); border-radius: 3px;"><div style="width: 65%; height: 100%; background: var(--warning); border-radius: 3px;"></div></div></td>
                                        <td><button class="action-btn action-btn-view" onclick="openEntityModal('Order Details', 'Order #ORD-002 for Digital Marketing is in progress.')">Details</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============ PROFILE ============ -->
            <div id="profile" class="page">
                <div class="section-header">
                    <h1>My Profile</h1>
                </div>

                <div class="content">
                    <div class="card">
                        <h2 style="margin-bottom: 24px;">Profile Information</h2>
                        
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-input" value="John Doe">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-input" value="john@example.com">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-input" value="+1 234-567-8900">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-input" value="Tech Solutions Inc">
                        </div>

                        <button class="btn btn-primary" style="margin-top: 24px;">Save Changes</button>
                    </div>
                </div>
            </div>

            <!-- ============ SETTINGS ============ -->
            <div id="settings" class="page">
                <div class="section-header">
                    <h1>Settings</h1>
                </div>

                <div class="content">
                    <div class="card">
                        <h2 style="margin-bottom: 24px;">Preferences</h2>
                        
                        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid var(--border);">
                            <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
                                <div>
                                    <div style="font-weight: 700;">Email Notifications</div>
                                    <div style="color: var(--text-muted); font-size: 13px;">Receive updates about your orders</div>
                                </div>
                            </label>
                        </div>

                        <div style="margin-bottom: 20px;">
                            <label style="display: flex; align-items: center; gap: 12px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer;">
                                <div>
                                    <div style="font-weight: 700;">SMS Notifications</div>
                                    <div style="color: var(--text-muted); font-size: 13px;">Get important alerts via SMS</div>
                                </div>
                            </label>
                        </div>

                        <button class="btn btn-primary" style="margin-top: 24px;">Save Preferences</button>
                    </div>
                </div>
            </div>