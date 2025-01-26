// Select the form and its fields
const form = document.querySelector('form');
const nameInput = document.querySelector('input[placeholder="Name"]');
const emailInput = document.querySelector('input[placeholder="Email"]');
const subjectInput = document.querySelector('input[placeholder="Subject"]');
const messageInput = document.querySelector('textarea[placeholder="Message"]');

// Add an event listener to handle form submission
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the default form submission
  
  // Validate inputs
  if (!validateInputs()) {
    return;
  }

  // Show a success message or simulate sending
  alert('Thank you for your message! We will get back to you shortly.');

  // Reset the form
  form.reset();
});

// Function to validate form inputs
function validateInputs() {
  let isValid = true;

  if (nameInput.value.trim() === '') {
    alert('Name is required!');
    nameInput.focus();
    isValid = false;
  } else if (!validateEmail(emailInput.value)) {
    alert('Please enter a valid email address!');
    emailInput.focus();
    isValid = false;
  } else if (subjectInput.value.trim() === '') {
    alert('Subject is required!');
    subjectInput.focus();
    isValid = false;
  } else if (messageInput.value.trim() === '') {
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


document.querySelectorAll('.smooth-scroll').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});
document.querySelector('.btn').addEventListener('click', function(e) {
  e.preventDefault();
  document.querySelector('#contact-us').scrollIntoView({
      behavior: 'smooth'
  });
});
document.getElementById('bookNowBtn').addEventListener('click', function(e) {
  e.preventDefault(); // Prevents the default action (if any)

  // Show the confirmation message
  document.getElementById('confirmationMessage').style.display = 'block';
  
  // Optionally, hide the "Book Now" button after clicking
  this.style.display = 'none';

  // You can add more actions here (like submitting a form, redirecting, etc.)
});

document.getElementById('bookNowBtn1').addEventListener('click', function(e) {
  e.preventDefault(); // Prevents the default action (if any)

  // Show the confirmation message
  document.getElementById('confirmationMessage1').style.display = 'block';
  
  // Optionally, hide the "Book Now" button after clicking
  this.style.display = 'none';

  
});
document.getElementById('bookNowBtn2').addEventListener('click', function(e) {
  e.preventDefault(); // Prevents the default action (if any)

  // Show the confirmation message
  document.getElementById('confirmationMessage2').style.display = 'block';
  
  // Optionally, hide the "Book Now" button after clicking
  this.style.display = 'none';

  
});
