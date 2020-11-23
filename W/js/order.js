// error message
const persons = document.getElementById('persons');
const time = document.getElementById('time');
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const errormsg = document.getElementById('errormsg');
const send = document.getElementById('send');
const err1 = document.getElementById('err1');
const err2 = document.getElementById('err2');
const err3 = document.getElementById('err3');
send.addEventListener('click', () => {
  if (
    persons.value === '請選擇'
      || time.value === '請選擇'
      || name.value === ''
      || phone.value === ''
      || email.value === ''
  ) {
    errormsg.innerHTML = '<i class="fas fa-exclamation-circle"></i> 資料填寫不完整';
    send.classList.add('next-btn2');
  } else {
    errormsg.innerHTML = '';
    send.classList.remove('next-btn2');
  }
  if (name.value === '') {
    err1.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err1.innerHTML = '';
  }
  if (phone.value === '') {
    err2.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err2.innerHTML = '';
  }
  if (email.value === '') {
    err3.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err3.innerHTML = '';
  }
});
