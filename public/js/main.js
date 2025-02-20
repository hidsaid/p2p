// ================Deal with navBar==================== //
const navIcon=document.querySelector("#navIcon");
const navMenuMobile=document.querySelector("#navMenuMobile")

navIcon.addEventListener("click",()=>{
    console.log(navMenuMobile);
    navMenuMobile.classList.toggle('hidden')
    if(!navMenuMobile.classList.contains('hidden')) {
        navIcon.className="fa-solid fa-x flex cursor-pointer text-[30px] font-extralight text-gray1";
        document.querySelector("#landing").classList.add('hidden')
    }else {
        navIcon.className="fa-solid fa-bars flex cursor-pointer text-[30px] font-extralight text-gray1"
        document.querySelector("#landing").classList.remove('hidden')
    }
})

// ================Current year==================== //
let currentYear=document.querySelector("#currentYear");
currentYear.innerHTML=new Date().getFullYear();


// ======================
// switch languages
// const languages=document.querySelectorAll("#ulLanguages li");
// console.log(languages);
// languages.forEach(elm=>{
//     elm.addEventListener("click",(e)=>{
//         languages.forEach(l=>l.classList.remove('active'));
//         e.target.classList.add('active');
//     })
// })




