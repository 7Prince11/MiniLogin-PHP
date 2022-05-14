var login = document.querySelector('#login');
var password = document.querySelector('#password');
var error_login = document.querySelector('.error_login');
var error_password = document.querySelector('.error_password');
var submit = document.querySelector('#submit');
var success = document.querySelector('.success_login');
submit.addEventListener('click', function () {
    var loginValue = login.value;
    var passwordValue = password.value;
    if (loginValue == '' && passwordValue == '') {
        error_login.innerText = 'Enter login';
        error_password.innerHTML = 'Enter password';
    }
    else if (loginValue == '' && passwordValue !== '') {
        error_login.innerHTML = 'you did not enter login';
    }
    else if (loginValue !== '' && passwordValue == '') {
        error_password.innerHTML = 'you did not enter password';
    }
    else if (loginValue.length < 4 && passwordValue.length < 4) {
        error_login.innerHTML = 'Login must be at least 4 characters';
        error_password.innerHTML = 'Password must be at least 4 characters';
    }
    else if (passwordValue.length < 4 && loginValue.length >= 4) {
        error_password.innerHTML = 'At least 4 characters';
    }
    else if (loginValue.length < 4 && passwordValue.length >= 4) {
        error_login.innerHTML = 'At least 4 characters';
    }
    else
        success.innerHTML = 'You are logged in';
});
