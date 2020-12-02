// error message
const account = document.getElementById('account');
const password = document.getElementById('inputpassword');

const errormsg = document.getElementById('errormsg');
const send = document.getElementById('send');
const err1 = document.getElementById('err1');
const err2 = document.getElementById('err2');
// const email_re = /([\w\-]+\@[\w\-]+\.[\w\-]+)/;
send.addEventListener('click', () => {
  if (
    account.value === ''
        || password.value === ''

  ) {
    errormsg.innerHTML = '<i class="fas fa-exclamation-circle"></i> 資料填寫不完整';
    send.classList.add('send');
  } else {
    errormsg.innerHTML = '';
    send.classList.remove('send');
  }

  if (account.value === '') {
    err1.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err1.innerHTML = '';
  }
  if (password.value === '') {
    err2.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  }
});
