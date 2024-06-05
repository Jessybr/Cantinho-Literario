const btnDelete=document.getElementById("btn-delete");
const alertDelete=document.querySelector(".alert-delete");
const btnCancelAction=document.getElementById("cancelBtn");

alertDelete.classList.add("hidden");

btnDelete.addEventListener("click", ()=>{
    alertDelete.classList.remove("hidden");
    alertDelete.classList.add("visible");
})

btnCancelAction.addEventListener("click", ()=>{
    alertDelete.classList.remove("visible");
    alertDelete.classList.add("hidden");
})




