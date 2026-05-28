// about me
const totalSlides = 4;
  let current = 0;
  let autoTimer = null;
  let progressTimer = null;
  let progressVal = 0;
  const AUTO_INTERVAL = 4000;

  const track = document.getElementById('track');
  const pbar = document.getElementById('pbar');
  const dotsEl = document.getElementById('dots');

  for (let i = 0; i < totalSlides; i++) {
    const d = document.createElement('div');
    d.className = 'dot' + (i === 0 ? ' active' : '');
    d.onclick = () => goTo(i);
    dotsEl.appendChild(d);
  }

  function updateDots() {
    document.querySelectorAll('.dot').forEach((d, i) => {
      d.classList.toggle('active', i === current);
    });
  }

  function goTo(n) {
    current = (n + totalSlides) % totalSlides;
    track.style.transform = `translateX(-${current * 100}%)`;
    updateDots();
    resetProgress();
  }

  function resetProgress() {
    clearInterval(autoTimer);
    clearInterval(progressTimer);
    progressVal = 0;
    pbar.style.width = '0%';
    startProgress();
    startAuto();
  }

  function startProgress() {
    progressTimer = setInterval(() => {
      progressVal += 100 / (AUTO_INTERVAL / 50);
      if (progressVal >= 100) progressVal = 100;
      pbar.style.width = progressVal + '%';
    }, 50);
  }

  function startAuto() {
    autoTimer = setTimeout(() => {
      goTo(current + 1);
    }, AUTO_INTERVAL);
  }

  document.getElementById('nextBtn').onclick = () => goTo(current + 1);
  document.getElementById('prevBtn').onclick = () => goTo(current - 1);

  resetProgress();

// client review

   const track = document.getElementById('sliderTrack');
  const cards = track.querySelectorAll('.rev-card');
  const dotsEl = document.getElementById('dots');
  const total = cards.length;
  const visible = 3;
  const maxIndex = total - visible;
  let current = 0;

  for (let i = 0; i <= maxIndex; i++) {
    const d = document.createElement('div');
    d.className = 'dot' + (i === 0 ? ' active' : '');
    d.onclick = () => goTo(i);
    dotsEl.appendChild(d);
  }

  function goTo(idx) {
    current = Math.max(0, Math.min(idx, maxIndex));
    const cardW = cards[0].offsetWidth + 20;
    track.style.transform = 'translateX(-' + (current * cardW) + 'px)';
    dotsEl.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === current));
  }

  document.getElementById('prevBtn').onclick = () => goTo(current - 1);
  document.getElementById('nextBtn').onclick = () => goTo(current + 1);

  let autoTimer = setInterval(() => goTo(current >= maxIndex ? 0 : current + 1), 300);
  track.addEventListener('mouseenter', () => clearInterval(autoTimer));
  track.addEventListener('mouseleave', () => { autoTimer = setInterval(() => goTo(current >= maxIndex ? 0 : current + 1), 3500); });
//   smooth scroll 

  // const lenis = new Lenis({
  //   duration: 0.5,
  //   easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  //   direction: 'vertical',
  //   gestureDirection: 'vertical',
  //   smooth: true,
  //   mouseMultiplier: 1,
  //   smoothTouch: false,
  //   touchMultiplier: 1,
  //   infinite: false,
  // })

  // // get scroll value
  // lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
  //   console.log({ scroll, limit, velocity, direction, progress })
  // })

  // function raf(time) {
  //   lenis.raf(time)
  //   requestAnimationFrame(raf)
  // }

  // requestAnimationFrame(raf)


//   smooth scroll 

// menu active on off

// 1. Shob section ebong nav links gulo select korun
const sections = document.querySelectorAll('section[id]'); // Jei section gulor id ache
const navLinks = document.querySelectorAll('.navbar-menu ul li a');

// 2. Observer options set korun
const options = {
    threshold: 0.6 // Section-er 60% jokhon screen-e ashbe, tokhon active hobe
};

// 3. Observer logic
if (sections.length && navLinks.length) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Shob link theke active class remove korun
                navLinks.forEach((link) => link.classList.remove('active'));

                // Sudhu current section-er sathe match kora link-e active class add korun
                const activeLink = document.querySelector(`.navbar-menu ul li a[href*="#${entry.target.id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, options);

    // 4. Protiti section-ke observe kora shuru korun
    sections.forEach((section) => {
        observer.observe(section);
    });
}


// header

const header = document.querySelector('header');
const menuBar = document.querySelector('.menu-bar');

window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        if (header) header.classList.add('nav_color');
        if (menuBar) menuBar.classList.add('nav_color');
    } else {
        if (header) header.classList.remove('nav_color');
        if (menuBar) menuBar.classList.remove('nav_color');
    }
});

const menuIcon = document.querySelector(".menu i");
const closeIcon = document.querySelector(".close i");
const navMenuList = document.querySelector(".navbar-menu ul");

if (menuIcon && navMenuList) {
    menuIcon.addEventListener("click", function(){
        navMenuList.classList.toggle("top-menu");
        if (closeIcon) closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    });
}

if (closeIcon && navMenuList) {
    closeIcon.addEventListener("click", function(){
        navMenuList.classList.toggle("top-menu");
        if (menuIcon) menuIcon.style.display = "block";
        closeIcon.style.display = "none";
    });
}

// sign up menu on off

const signUpBtn = document.querySelector(".signup");
const signUpIcon = document.querySelector(".signup i");
const dropDown = document.querySelector("#dropdown");

if (signUpBtn && dropDown) {
    signUpBtn.addEventListener('click', function(e){
        if (e.target.closest('#dropdown')) {
            return; 
        }
        e.stopPropagation();
        e.preventDefault();
        dropDown.classList.toggle('topToggle');
        if (signUpIcon) signUpIcon.classList.toggle('rotate');
    });
}


// dashboard js

let currentStep = 1;
let selectedService = null;
let selectedPrice = null;

// Sidebar Active State based on current URL
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname.replace(/\/$/, ""); // Remove trailing slash
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(nav => nav.classList.remove('active'));

    navItems.forEach(item => {
        const onclickAttr = item.getAttribute('onclick');
        if (!onclickAttr) return;

        const pathMatch = onclickAttr.match(/'([^']+)'/);
        if (!pathMatch) return;

        const targetPath = pathMatch[1].replace(/\/$/, "");
        if (currentPath === targetPath || currentPath.endsWith(targetPath)) {
            item.classList.add('active');
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
