const btnViewPhotoInput=document.getElementById("btnViewPhotoInput");
const inputPhoto=document.getElementById("inputPhoto");

inputPhoto.style.display="none";

btnViewPhotoInput.addEventListener("click", ()=>{
    btnViewPhotoInput.style.display="none";
    inputPhoto.style.display="block";
})