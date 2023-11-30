
const checkall = document.querySelector(".check_all");
if(checkall){
const removeAll = document.querySelector(".removeAll");
const checkboxs = Array.from(document.querySelectorAll("input[type=checkbox]"));

const removes = document.querySelectorAll(".remove");
const elementas = document.querySelectorAll("a");
 let page = "";
 

if (elementas) {
   
    removes.forEach((remove) => {
        remove.onclick = function () {
            event.preventDefault();
            let checkbox = this.parentElement.parentElement.querySelector("input[type=checkbox]");
            
            let page = checkbox.dataset.page;
            const id = remove.parentElement.parentElement.querySelector(".id").textContent.trim();
            let resuilt = confirm("Bạn chắc chắn muốn xóa chứ");
            if (resuilt == true) {
                alert("Xoá thành công");
                window.location.href = `?act=delete&page=${page}&id=${checkbox.value}`;
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
    const checkbox = document.querySelector("input[type=checkbox]");
    if(checkbox){
        var page = checkbox.dataset.page;
    }
    checkboxs.forEach((checkbox) => {
        if (checkbox.checked) {
            pramator.push(checkbox.value);
        }

    })
    
    if (pramator.length > 0) {
       alert("Xoá thành công");
        window.location.href = `?act=rmAll&page=${page}&id=${pramator}`;
        
    }
    else {
        alert("Vui lòng lựa chọn ");
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
function uploadImgag(id,id_imageSigle= flase ,id_slider = false){
    const formaddRoom = document.querySelector(id);
    if(formaddRoom){
        if(id_imageSigle){
            UploadAvatar(id_imageSigle)
        }
        if(id_slider){
            UploadSlider(id_slider)
        }
       
       
        
        
    }
    function UploadAvatar(id){
    const avatar = formaddRoom.querySelector(id);
    if(avatar){
    avatar.addEventListener("change",handleLoadImage);
    function handleLoadImage(e){
    console.log(this);
     const loadAvatar = e.target.parentElement.querySelector(".room_input-avatar")
     const  file = e.target.files[0]
     const url  =  URL.createObjectURL(file);
     loadAvatar.innerHTML = `<img src="${url}"/>`;
    }
 }
}
function UploadSlider(id){
    const slider = document.querySelector(id);;
    if(slider){
        slider.addEventListener("change",handleLoadImage);
    }
    
    function handleLoadImage(e){
        const  loadSlider = e.target.parentElement.querySelector(".form_show-image")
        const files =Array.from(e.target.files);
        files.forEach(function(file){
            const url  =  URL.createObjectURL(file);
            const img  = document.createElement("img");
            img.classList.add("form_slide");
            const div = document.createElement("div");
            div.classList.add("col-md-3");
            img.src = url;
            div.appendChild(img);
          
            loadSlider.appendChild(div)
        })
    }
}
}

// Xử lý avatar
