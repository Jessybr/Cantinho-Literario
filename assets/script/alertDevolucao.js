const alertDevolucao=document.querySelector(".alert-devolucao");
const btnFinishEmprestimo=document.getElementById("finish-emprestimo");
const btnCancelDevolucao=document.getElementById("cancelDevolucaoBtn");

alertDevolucao.classList.add("hidden");

btnFinishEmprestimo.addEventListener("click",()=>{
    alertDevolucao.classList.remove("hidden");
    alertDevolucao.classList.add("visible");
})

btnCancelDevolucao.addEventListener("click", ()=>{
    alertDevolucao.classList.remove("visible");
    alertDevolucao.classList.add("hidden");
})