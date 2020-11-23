
const cancelBtn = document.getElementsById('cancel-btn');

cancelBtn.addEventListener('click',()=>{
    const r = confirm('是否確定取消訂位?');
    if (r == true) {
        alert('讚');
      }else{
        alert('您已取消訂位!');
      }
}

