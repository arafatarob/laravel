// dashboard js
let currentStep = 1;
let selectedService = null;
let selectedPrice = null;

// Sidebar Active State based on current URL
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname;
    const sidebarLinks = document.querySelectorAll('.sidebar .nav-item a');

    sidebarLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (!href || href === '#' || href === '') return;

        // ব্রাউজারের বর্তমান লোকেশন অনুযায়ী লিঙ্কের সঠিক পাথ বের করা
        const linkPath = new URL(href, window.location.href).pathname;
        
        // পাথ যদি হুবহু মিলে যায় তবেই active ক্লাস যোগ হবে
        if (currentPath === linkPath) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    // Clear validation errors when the user changes form fields
    const projectNameInput = document.getElementById('projectName');
    const timelineSelect = document.getElementById('timeline');

    if (projectNameInput) {
        projectNameInput.addEventListener('input', () => {
            projectNameInput.classList.remove('error');
            clearFieldError('projectName-error');
        });
    }
    if (timelineSelect) {
        timelineSelect.addEventListener('change', () => {
            timelineSelect.classList.remove('error');
            clearFieldError('timeline-error');
        });
    }

    // Initialize steps if on order page
    if (document.getElementById('step-1')) {
        updateSteps();
    }
});

        function switchRole(role, element) {
            const userNav = document.getElementById('user-nav');
            const adminNav = document.getElementById('admin-nav');
            const buttons = document.querySelectorAll('.role-btn');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            
            const target = element || (typeof event !== 'undefined' ? event.currentTarget || event.target : null);
            const activeBtn = target ? target.closest('.role-btn') : null;

            if (role === 'user') {
                if (activeBtn) activeBtn.classList.add('active');
                userNav.style.display = 'block';
                adminNav.style.display = 'none';
                showPage('user-dashboard');
            } else {
                if (activeBtn) activeBtn.classList.add('active');
                userNav.style.display = 'none';
                adminNav.style.display = 'block';
                showPage('admin-dashboard');
            }
        }

        function showPage(pageId, element) {
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            
            // Note: Sidebar active class is now handled by URL matching on DOMContentLoaded
            
            // Show selected page
            const targetPage = document.getElementById(pageId);
            if (targetPage) targetPage.classList.add('active');
            
            // Add active class to clicked nav item
        }

        function selectService(name, price, element) {
            selectedService = name;
            selectedPrice = price;
            
            // Highlight Selected Card
            document.querySelectorAll('.service-display-card').forEach(card => {
                card.style.borderColor = 'var(--border)';
                card.classList.remove('error');
            });
            if (element) element.style.borderColor = 'var(--primary)';

            clearFieldError('service-error');
            document.getElementById('selected-service-info').style.display = 'block';
            document.getElementById('selected-service-name').textContent = name;
            document.getElementById('selected-service-price').textContent = '$' + price.toLocaleString();
        }

        function showFieldError(elementId, message) {
            const errorEl = document.getElementById(elementId);
            if (!errorEl) return;
            errorEl.textContent = message;
            errorEl.style.display = 'block';
        }

        function clearFieldError(elementId) {
            const errorEl = document.getElementById(elementId);
            if (!errorEl) return;
            errorEl.textContent = '';
            errorEl.style.display = 'none';
        }

        function nextStep(step) {
            clearFieldError('service-error');
            clearFieldError('projectName-error');
            clearFieldError('timeline-error');

            const projectNameField = document.getElementById('projectName');
            const timelineField = document.getElementById('timeline');

            if (step === 1 && !selectedService) {
                    showFieldError('service-error', 'Please select a service.');
                    return;
                }
                
                if (step === 2) {
                    const projectName = projectNameField ? projectNameField.value.trim() : '';
                    const timeline = timelineField ? timelineField.value.trim() : '';
                    let valid = true;

                    if (!projectName) {
                        showFieldError('projectName-error', 'Please enter a project name.');
                        if (projectNameField) projectNameField.classList.add('error');
                        valid = false;
                    }
                    if (!timeline || timeline === 'Select timeline') {
                        showFieldError('timeline-error', 'Please select a timeline.');
                    valid = false;
                }

                if (!valid) {
                    return;
                }
            }
            
            if (currentStep < 3) {
                currentStep++;
                updateSteps();
            }
        }

        function prevStep(step) {
            currentStep--;
            updateSteps();
        }

        function updateSteps() {
            for (let i = 1; i <= 3; i++) {
                const content = document.getElementById('step-' + i);
                const indicator = document.getElementById('step' + i + '-indicator');
                
                if (!content || !indicator) continue;

                if (i < currentStep) {
                    indicator.classList.add('completed');
                    indicator.classList.remove('active');
                    content.classList.remove('active');
                } else if (i === currentStep) {
                    indicator.classList.add('active');
                    indicator.classList.remove('completed');
                    content.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                    indicator.classList.remove('completed');
                    content.classList.remove('active');
                }
            }

            // Update review section
            if (currentStep === 3) {
                const projectNameField = document.getElementById('projectName');
                const timelineField = document.getElementById('timeline');
                const projectName = projectNameField ? projectNameField.value : '';
                const timeline = timelineField ? timelineField.value : '';

                if(document.getElementById('review-service')) document.getElementById('review-service').textContent = selectedService;
                if(document.getElementById('review-project')) document.getElementById('review-project').textContent = projectName || '--';
                if(document.getElementById('review-timeline')) document.getElementById('review-timeline').textContent = timeline || '--';
                if(document.getElementById('review-price')) document.getElementById('review-price').textContent = '$' + (selectedPrice ? selectedPrice.toLocaleString() : '0');
            }
        }

        function submitOrder() {
            const body = `
                <div class="modal-success-card">
                    <div class="modal-success-icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div class="modal-success-text">
                        <h3>Order submitted successfully!</h3>
                        <p>Your request is now confirmed and our team will contact you soon.</p>
                    </div>
                </div>`;

            openEntityModal('Submission Complete', body, 'Continue', () => {
                closeModal('generic-modal');
                window.location.href = '/dashboard/user/my_order';
            });

            currentStep = 1;
            updateSteps();
        }

        function toggleProfileMenu(event) {
            event.stopPropagation();
            const menu = event.currentTarget.closest('.user-menu')?.querySelector('.profile-menu');
            if (!menu) return;
            menu.classList.toggle('open');
        }

        function openPriceModal(serviceName) {
            const serviceInput = document.getElementById('price-service');
            if (serviceInput) {
                serviceInput.value = serviceName;
            }
            openModal('price-modal');
        }

        function savePrice() {
            const priceValue = document.getElementById('price-value');
            if (priceValue && !priceValue.value.trim()) {
                priceValue.classList.add('error');
                return;
            }
            closeModal('price-modal');
        }

        function saveTeamMember() {
            const nameField = document.getElementById('team-name');
            const roleField = document.getElementById('team-role');
            const emailField = document.getElementById('team-email');

            let valid = true;
            [nameField, roleField, emailField].forEach(field => {
                if (field && !field.value.trim()) {
                    field.classList.add('error');
                    valid = false;
                } else if (field) {
                    field.classList.remove('error');
                }
            });

            if (!valid) {
                return;
            }
            closeModal('team-modal');
        }

        function saveTeamMemberEdit(modalId) {
            const modal = document.getElementById(modalId);
            if (!modal) return;

            const fields = modal.querySelectorAll('.form-input');
            let valid = true;

            fields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('error');
                    valid = false;
                } else {
                    field.classList.remove('error');
                }
            });

            if (!valid) {
                return;
            }
            closeModal(modalId);
        }

        document.addEventListener('click', function(e) {
            document.querySelectorAll('.profile-menu.open').forEach(menu => {
                const button = menu.parentElement?.querySelector('.user-menu-button');
                if (button && !button.contains(e.target) && !menu.contains(e.target)) {
                    menu.classList.remove('open');
                }
            });
        });

        function submitServiceForm() {
            const serviceNameField = document.getElementById('service-name');
            const serviceDescriptionField = document.getElementById('service-description');
            const servicePriceField = document.getElementById('service-price');

            const serviceName = serviceNameField ? serviceNameField.value.trim() : '';
            const serviceDescription = serviceDescriptionField ? serviceDescriptionField.value.trim() : '';
            const servicePrice = servicePriceField ? servicePriceField.value.trim() : '';

            let valid = true;
            [serviceNameField, serviceDescriptionField, servicePriceField].forEach(field => {
                if (!field) return;
                if (!field.value.trim()) {
                    field.classList.add('error');
                    valid = false;
                } else {
                    field.classList.remove('error');
                }
            });

            if (!valid) {
                return;
            }

            closeModal('service-modal');

            const body = `
                <div style="text-align: left; line-height: 1.6;">
                    <p style="font-size: 1rem; margin-bottom: 1rem;">Your new service has been added successfully.</p>
                    <p><strong>Service:</strong> ${serviceName}</p>
                    <p><strong>Price:</strong> ${servicePrice}</p>
                    <p style="margin-top: 1rem;">It will now appear in the dashboard list.</p>
                </div>`;

            openEntityModal('Service Added', body, 'Done');

            if (serviceNameField) serviceNameField.value = '';
            if (serviceDescriptionField) serviceDescriptionField.value = '';
            if (servicePriceField) servicePriceField.value = '';
        }

        function submitUserForm() {
            closeModal('user-modal');
        }

        function submitProjectForm() {
            closeModal('project-modal');
        }

        function submitBlogForm() {
            closeModal('blog-modal');
        }

        function submitTestimonialForm() {
            closeModal('testimonial-modal');
        }

        function openEntityModal(title, body, actionText = 'OK', actionCallback = null) {
            const modal = document.getElementById('generic-modal');
            const modalTitle = document.getElementById('generic-modal-title');
            const modalBody = document.getElementById('generic-modal-body');
            const modalAction = document.getElementById('generic-modal-action');

            if (!modal || !modalTitle || !modalBody || !modalAction) {
                console.warn('Generic modal elements not found.');
                return;
            }

            modalTitle.textContent = title;
            modalBody.innerHTML = body;
            modalAction.textContent = actionText;
            modalAction.onclick = () => {
                if (typeof actionCallback === 'function') {
                    actionCallback();
                } else {
                    closeModal('generic-modal');
                }
            };
            modal.classList.add('active');
        }

        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            if (!modal) {
                console.warn('Modal not found:', modalId);
                return;
            }
            modal.classList.add('active');
        }

        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            if (!modal) {
                console.warn('Modal not found:', modalId);
                return;
            }
            modal.classList.remove('active');
        }

        // Close modal when clicking outside
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    this.classList.remove('active');
                }
            });
        });
