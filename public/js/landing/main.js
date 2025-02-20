// ================Deal with navBar==================== //
const navIcon=document.querySelector("#navIcon");
const navMenuMobile=document.querySelector("#navMenuMobile");
console.log(navMenuMobile);

navIcon.addEventListener("click",()=>{
    console.log(navMenuMobile);
    navMenuMobile.classList.toggle('hidden')
    if(!navMenuMobile.classList.contains('hidden')) {
        navIcon.className="fa-solid fa-x flex cursor-pointer text-[30px] text-gray1";
        document.querySelector("#landing").classList.add('hidden')
    }else {
        navIcon.className="fa-solid fa-bars flex cursor-pointer text-[30px] text-gray1"
        document.querySelector("#landing").classList.remove('hidden')
    }
})

// ================script for success of sending a message from contact us form==================== //
document.addEventListener("DOMContentLoaded", function() {
    // Get the success message element
    var successMessage = document.getElementById('successMessage');

    if (successMessage) {
        successMessage.style.display = 'block';
        successMessage.style.marginTop = '20px';
        //hide the success message after 3 seconds
        setTimeout(function() {
            successMessage.style.display = 'none';
        successMessage.style.marginTop = '0px';
        }, 3000);
    }
});

// ================Current year==================== //
let currentYear=document.querySelector("#currentYear");
currentYear.innerHTML=new Date().getFullYear();