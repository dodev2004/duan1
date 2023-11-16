const checkall = document.querySelector(".check_all");
if(checkall){
    const removeAll = document.querySelector(".removeAll");
const checkboxs = Array.from(document.querySelectorAll("input[type=checkbox]"));
const removes = document.querySelectorAll(".remove");
const elementas = document.querySelectorAll("a");
if (elementas) {
    removes.forEach((remove) => {
        remove.onclick = function () {
            event.preventDefault();
            const id = remove.parentElement.parentElement.querySelector(".id").textContent.trim();
            let resuilt = confirm("Bạn chắc chắn muốn xóa chứ");
            if (resuilt == true) {
                window.location.href = `./index.php?act=xoadm&id=${id}`;
            }
        }
    })
}


checkall.onclick = function () {

    checkboxs.forEach(function (cb) {
        cb.checked = "true";
    })
}
const checked_remove = document.querySelector(".checked_remove");
checked_remove.onclick = function () {
    console.log(checked_remove);

    checkboxs.forEach(function (cb) {
        cb.checked = "";

    })

}
removeAll.onclick = function (e) {
    e.preventDefault();
    let pramator = [];
    checkboxs.forEach((checkbox) => {
        if (checkbox.checked) {
            pramator.push(checkbox.value);
        }

    })
    if (pramator.length > 0) {
        window.location.href = `./index.php?act=rmAlldm&id=${pramator}`;
    }

}
}

// todolist : 
// Sử dụng kiến thức dom 
{
    const todolists = document.querySelectorAll(".admin-component_todolist>a");
  
    todolists.forEach((todolist) => {
        const heightNot = todolist.offsetHeight;
        const left = todolist.querySelector("a>i");
        const todolistElement  = todolist.parentElement
        const height = todolistElement.offsetHeight
        todolistElement.style.height  = `${heightNot}px`
        todolist.addEventListener("click",handleTodolist)
        function handleTodolist(e){
            e.preventDefault();
            let checked = todolistElement.className.includes("active");
            if(!checked){
                todolistElement.style.height = `${height}px`;
                todolistElement.classList.add("active");
                left.style.transform  = "rotate(93deg)";
            }
            else {
                todolistElement.style.height = `${heightNot}px`;
                todolistElement.classList.remove("active");
                left.style.transform  = "";
            }
    
           
    
        }
    })
   
}