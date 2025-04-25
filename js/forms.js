function showForm(formId) {
    const loginBox = document.getElementById('login-box');
    const registerBox = document.getElementById('register-box');
  
    if (formId === 'register-box') {
        loginBox.style.display = 'none';
        registerBox.style.display = 'block';
    } else {
        loginBox.style.display = 'block';
        registerBox.style.display = 'none';
    }
  }
  