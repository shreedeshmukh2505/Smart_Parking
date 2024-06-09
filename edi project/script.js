// const btnEl= document.querySelector('.parkbutton');
// btnEl.addEventListener('click',()=>{
//     btnEl.classList.add('special');
// });

const btnE1list=document.querySelectorAll('.parkbutton');
btnE1list.forEach(btnE1 =>{
    btnE1.addEventListener('click',()=>{
        btnE1.classList.add('special');
    });
})