  document.addEventListener('DOMContentLoaded', function () {
      const navbarHamburger = document.querySelector('.navbar-hamburger');
      const navbarLinks = document.querySelector('.navbar-link');

      navbarHamburger.addEventListener('click', function () {
        this.classList.toggle('active');
        navbarLinks.classList.toggle('active');
      });
    });

    function showMessage(message, type = 'success') {
      const messageBox = document.getElementById('messageBox');
      const typeClass = type === 'success' ? 'success-bg' : 'error-bg';

      messageBox.innerHTML = `
                <div class="message-content ${typeClass}">
                    <strong>${type === 'success' ? 'Sukses!' : 'Gagal!'}</strong> ${message}
                </div>
            `;
            
      messageBox.classList.add('show');

      setTimeout(() => {
        messageBox.classList.remove('show');
      }, 4000);
    }

    function getCssVar(name) {
      return getComputedStyle(document.documentElement).getPropertyValue(name).trim();
    }

    // Fungsi untuk validasi input sisi klien
    function validateClientForm() {
      let isValid = true;
      const form = document.getElementById('projectBookingForm');
      const data = {
        fullName: form.fullName.value.trim(),
        email: form.email.value.trim(),
        serviceType: form.serviceType.value,
        location: form.location.value.trim(),
        projectDescription: form.projectDescription.value.trim()
      };

      // Reset semua pesan error dan border input
      document.querySelectorAll('.error-message').forEach(el => el.style.display = 'none');
      document.querySelectorAll('.input-field').forEach(el => el.style.borderColor = '#d1d5db');


      // 1. Validasi Nama (minimal 3 karakter)
      if (data.fullName.length < 3) {
        document.getElementById('error-fullName').style.display = 'block';
        form.fullName.style.borderColor = getCssVar('--error-color');
        isValid = false;
      }

      // 2. Validasi Email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(data.email)) {
        document.getElementById('error-email').style.display = 'block';
        form.email.style.borderColor = getCssVar('--error-color');
        isValid = false;
      }

      // 3. Validasi Jenis Layanan
      if (data.serviceType === "") {
        document.getElementById('error-serviceType').style.display = 'block';
        form.serviceType.style.borderColor = getCssVar('--error-color');
        isValid = false;
      }

      // 4. Validasi Lokasi (minimal 2 karakter)
      if (data.location.length < 2) {
        document.getElementById('error-location').style.display = 'block';
        form.location.style.borderColor = getCssVar('--error-color');
        isValid = false;
      }

      // 5. Validasi Deskripsi (minimal 20 karakter)
      if (data.projectDescription.length < 20) {
        document.getElementById('error-projectDescription').style.display = 'block';
        form.projectDescription.style.borderColor = getCssVar('--error-color');
        isValid = false;
      }

      return isValid;
    }

    document.getElementById('projectBookingForm').addEventListener('submit', function (event) {

      if (!validateClientForm()) {
        event.preventDefault(); 
        showMessage('Harap lengkapi semua data formulir dengan benar.', 'error');
      } else {
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';

      }
    });
