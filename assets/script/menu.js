const menuIcon=document.getElementById("menu-icon");
const menuScreenSide=document.querySelector(".menu-screen-side");

menuIcon.addEventListener("click", ()=>{
    console.log("funciona");
    menuScreenSide.classList.toggle("visible");
})