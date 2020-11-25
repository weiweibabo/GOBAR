// const cardNumber = document.getElementsById('cardnumber');
// const name = document.getElementsById('name');
// const expirationDate = document.getElementsById('expirationdate');
const securitycode = document.getElementById('securitycode');

const confirmBtn = document.getElementById('confirm-btn');
const errormsg = document.getElementById('errormsg');

confirmBtn.addEventListener('click', () => {
  if (
    securitycode.value === ''
  ) {
    errormsg.innerHTML = '資料填寫不完整';
  }
});
