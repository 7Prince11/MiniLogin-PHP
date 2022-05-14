const login : any = document.querySelector('#login');
const password : any = document.querySelector('#password');
const error_login : any = document.querySelector('.error_login');
const error_password : any = document.querySelector('.error_password');
const submit : any = document.querySelector('#submit');
const success : any = document.querySelector('.success_login');

submit.addEventListener('click', () => {
    
         

    const loginValue = login.value;
    const passwordValue = password.value;

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
    else  success.innerHTML = 'You are logged in'; 
      
    
   
    
});
