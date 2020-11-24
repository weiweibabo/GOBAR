// error message
const selectDate = document.getElementById('select-date');
const persons = document.getElementById('persons');
const time = document.getElementById('time');
const name = document.getElementById('name');
const phoneNumber = document.getElementById('phonenumber');
const email = document.getElementById('email');
const errormsg = document.getElementById('errormsg');
const sendWeb = document.getElementById('send-web');
const sendPhone = document.getElementById('send-phone');
const err1 = document.getElementById('err1');
const err2 = document.getElementById('err2');
const err3 = document.getElementById('err3');

const phoneId = document.getElementById('phone');

sendWeb.addEventListener('click', () => {
  if (
    persons.value === '請選擇'
      || time.value === '請選擇'
      || name.value === ''
      || phoneNumber.value === ''
      || email.value === ''
  ) {
    errormsg.innerHTML = '<i class="fas fa-exclamation-circle"></i> 資料填寫不完整';
    sendWeb.classList.add('next-btn2');
  } else {
    errormsg.innerHTML = '';
    sendWeb.classList.remove('next-btn2');
  }
  if (name.value === '') {
    err1.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err1.innerHTML = '';
  }
  if (phoneNumber.value === '') {
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

sendPhone.addEventListener('click', () => {
  if (
    selectDate.value === ''
      || persons.value === '請選擇'
      || time.value === '請選擇'
      || name.value === ''
      || phoneNumber.value === ''
      || email.value === ''
  ) {
    errormsg.innerHTML = '<i class="fas fa-exclamation-circle"></i> 資料填寫不完整';
    sendPhone.classList.add('next-btn2');
  } else {
    errormsg.innerHTML = '';
    sendPhone.classList.remove('next-btn2');
  }
  if (name.value === '') {
    err1.innerHTML = 'Error <i class="fas fa-exclamation-circle"></i>';
  } else {
    err1.innerHTML = '';
  }
  if (phoneNumber.value === '') {
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
