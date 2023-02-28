const form = document.getElementById('contact-form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const dobInput = document.getElementById('dob');
const genderInput = document.getElementById('gender');
const ageInput = document.getElementById('age');
const websiteInput = document.getElementById('website');
const attachmentInput = document.getElementById('attachment');
const phoneInput = document.getElementById('phone');
const newsletterInput = document.getElementById('newsletter');
const messageInput = document.getElementById('message');
const termsInput = document.getElementById('terms');

form.addEventListener('submit', (event) => {
  let errors = [];

  if (nameInput.value.trim() === '') {
    errors.push('Please enter your name.');
  }

  if (emailInput.value.trim() === '') {
    errors.push('Email is required.');
  } else if (!isValidEmail(emailInput.value.trim())) {
    errors.push('Invalid email address.');
  }

  if (passwordInput.value.trim() === '') {
    errors.push('Please enter your password.');
  }

  if (dobInput.value.trim() === '') {
    errors.push('Please enter your date of birth.');
  }

  if (genderInput.value === '') {
    errors.push('Please select your gender.');
  }

  const age = parseInt(ageInput.value);
  if (isNaN(age) || age < 18 || age > 120) {
    errors.push('Please enter a valid age between 18 and 120.');
  }

  if (websiteInput.value.trim() !== '' && !isValidUrl(websiteInput.value.trim())) {
    errors.push('Please enter a valid website URL.');
  }

  if (phoneInput.value.trim() !== '' && !isValidPhone(phoneInput.value.trim())) {
    errors.push('Please enter a valid phone number in the format 123-45-678.');
  }