// Tab click functionality
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".tab");
  const forms = document.querySelectorAll(".ride-form");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Remove active from all
      tabs.forEach(t => t.classList.remove("active"));
      forms.forEach(f => f.classList.remove("active"));

      // Activate clicked
      tab.classList.add("active");
      const targetId = tab.getAttribute("data-tab");
      document.getElementById(targetId).classList.add("active");
    });
  });

  // Auto-fill current date & time
  const now = new Date();
  const yyyy = now.getFullYear();
  const mm = String(now.getMonth() + 1).padStart(2, '0');
  const dd = String(now.getDate()).padStart(2, '0');
  const dateVal = `${yyyy}-${mm}-${dd}`;

  const hr = now.getHours();
  const min = String(now.getMinutes()).padStart(2, '0');
  const ampm = hr >= 12 ? "PM" : "AM";
  const hr12 = hr % 12 || 12;
  const timeVal = `${hr12}:${min}`;

  document.querySelectorAll("input[type='date']").forEach(input => input.value = dateVal);
  document.querySelectorAll("input[name='time']").forEach(input => input.value = timeVal);
  document.querySelectorAll("select[name='ampm']").forEach(select => select.value = ampm);
});


// Smooth scroll for #booking-form links
document.querySelectorAll('a[href^="#booking-form"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const form = document.querySelector(this.getAttribute('href'));
    if (form) {
      form.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// outstation
document.addEventListener("DOMContentLoaded", () => {
  const tabs = document.querySelectorAll(".booking-tab");
  const forms = document.querySelectorAll(".booking-form");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      forms.forEach(f => f.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.getAttribute("data-tab")).classList.add("active");
    });
  });
});

// custom booking form
document.addEventListener("DOMContentLoaded", function () {
  const pageTitleInput = document.getElementById('page_title');
  if (pageTitleInput) {
    pageTitleInput.value = document.title;
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".custom-tab");
  const forms = document.querySelectorAll(".custom-booking-form");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      tabs.forEach(t => t.classList.remove("active"));
      forms.forEach(f => f.classList.remove("active"));

      tab.classList.add("active");
      const tabId = tab.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });

  const now = new Date();
  const yyyy = now.getFullYear();
  const mm = String(now.getMonth() + 1).padStart(2, '0');
  const dd = String(now.getDate()).padStart(2, '0');
  const dateStr = `${yyyy}-${mm}-${dd}`;

  const hr = now.getHours();
  const min = String(now.getMinutes()).padStart(2, '0');
  const ampm = hr >= 12 ? "PM" : "AM";
  const hr12 = hr % 12 || 12;
  const timeStr = `${String(hr12).padStart(2, '0')}:${min}`;

  document.querySelectorAll("input[name='pickup_date']").forEach(el => el.value = dateStr);
  document.querySelectorAll("input[name='pickup_time']").forEach(el => el.value = timeStr);
  document.querySelectorAll("select[name='ampm']").forEach(el => el.value = ampm);
});


// test_page
document.addEventListener("DOMContentLoaded", function () {
  const now = new Date();
  const yyyy = now.getFullYear();
  const mm = String(now.getMonth() + 1).padStart(2, '0');
  const dd = String(now.getDate()).padStart(2, '0');
  const hr = now.getHours();
  const min = String(now.getMinutes()).padStart(2, '0');
  const ampm = hr >= 12 ? "PM" : "AM";
  const hr12 = hr % 12 || 12;
  const timeStr = `${String(hr12).padStart(2, '0')}:${min}`;

  const dateStr = `${yyyy}-${mm}-${dd}`;

  document.querySelectorAll("input[name='pickup_date']").forEach(el => el.value = dateStr);
  document.querySelectorAll("input[name='pickup_time']").forEach(el => el.value = timeStr);
  document.querySelectorAll("select[name='ampm']").forEach(el => el.value = ampm);

  const tabs = document.querySelectorAll(".custom-tab");
  const forms = document.querySelectorAll(".custom-booking-form");
  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      forms.forEach(f => f.classList.remove("active"));
      tab.classList.add("active");
      const tabId = tab.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });
});