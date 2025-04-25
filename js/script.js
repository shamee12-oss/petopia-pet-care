// Select the form and its fields
const form = document.querySelector('form');
const nameInput = document.querySelector('input[placeholder="Name"]');
const emailInput = document.querySelector('input[placeholder="Email"]');
const subjectInput = document.querySelector('input[placeholder="Subject"]');
const messageInput = document.querySelector('textarea[placeholder="Message"]');

// Add an event listener to handle form submission
if (form) {
  form.addEventListener('submit', (event) => {
    // Validate inputs before letting it submit
    if (!validateInputs()) {
      event.preventDefault(); // Stop form if validation fails
      return;
    }

    // Optional: You can still show an alert (will show before redirect)
    alert('Thank you for your message! We will get back to you shortly.');
    // The form will now be submitted normally and handled by your PHP
  });
}

// Function to validate form inputs
function validateInputs() {
  let isValid = true;

  if (nameInput && nameInput.value.trim() === '') {
    alert('Name is required!');
    nameInput.focus();
    isValid = false;
  } else if (emailInput && !validateEmail(emailInput.value)) {
    alert('Please enter a valid email address!');
    emailInput.focus();
    isValid = false;
  } else if (subjectInput && subjectInput.value.trim() === '') {
    alert('Subject is required!');
    subjectInput.focus();
    isValid = false;
  } else if (messageInput && messageInput.value.trim() === '') {
    alert('Message is required!');
    messageInput.focus();
    isValid = false;
  }

  return isValid;
}

// Function to validate email format
function validateEmail(email) {
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailPattern.test(email);
}

// Smooth scroll for links
document.querySelectorAll('.smooth-scroll').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth'
      });
    }
  });
});

// Scroll to contact section only if both exist
const scrollBtn = document.querySelector('.btn');
const contactSection = document.querySelector('#contact-us');

if (scrollBtn && contactSection) {
  scrollBtn.addEventListener('click', function (e) {
    e.preventDefault();
    contactSection.scrollIntoView({
      behavior: 'smooth'
    });
  });
}

// Handle booking buttons only if elements exist
const bookNowBtn = document.getElementById('bookNowBtn');
const bookNowBtn1 = document.getElementById('bookNowBtn1');
const bookNowBtn2 = document.getElementById('bookNowBtn2');

if (bookNowBtn && document.getElementById('confirmationMessage')) {
  bookNowBtn.addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('confirmationMessage').style.display = 'block';
    this.style.display = 'none';
  });
}

if (bookNowBtn1 && document.getElementById('confirmationMessage1')) {
  bookNowBtn1.addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('confirmationMessage1').style.display = 'block';
    this.style.display = 'none';
  });
}

if (bookNowBtn2 && document.getElementById('confirmationMessage2')) {
  bookNowBtn2.addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('confirmationMessage2').style.display = 'block';
    this.style.display = 'none';
  });
}
