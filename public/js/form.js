
    function validationForm (id){
        const form = document.querySelector(id);
        if(form){
         const inputs = Array.from(form.querySelectorAll("input[type=text]"));
         const passwords =  Array.from(form.querySelectorAll("input[type=password]"));
         const repeat_password = form.querySelector("#repeat-password");
         if(passwords[1]){
                let password = passwords[0];
                const parentElement = password.parentElement;
                 const erorMessage = parentElement.querySelector(".valid-feedback")
                password.onblur = function(e){
                    let value = e.target.value
                    const message   =  checkInputIvalidate(value);
                    if(message){
                        erorMessage.innerText = message;
                        erorMessage.style.display = "block"
                    }
                    else {
                        erorMessage.innerText = message;
                        erorMessage.style.display = "none"
                    }
                }
                password.oninput = function(e){
                    let value = e.target.value
                    const message   =  checkInputIvalidate(value);
                    if(message){
                        erorMessage.innerText = message;
                        erorMessage.style.display = "block"
                    }
                    else {
                        erorMessage.innerText = message;
                        erorMessage.style.display = "none"
                    }
                }
            
         }
         if(repeat_password){
           
                const parentElement = repeat_password.parentElement;
                 const erorMessage = parentElement.querySelector(".valid-feedback")
                repeat_password.onblur = function(e){
                    let value = e.target.value
                    const message   =  checkInputIvalidate(value);
                    if(message){
                        erorMessage.innerText = message;
                        erorMessage.style.display = "block"
                    }
                    else {
                        erorMessage.innerText = message;
                        erorMessage.style.display = "none"
                        if(repeat_password.value.trim() !== passwords[0].value.trim()){
                         
                            erorMessage.innerText = "Mật khẩu không trùng khớp";
                            erorMessage.style.display = "block"
                        }
                        else {
                            message = "";
                            erorMessage.innerText = "";
                            erorMessage.style.display = "none"
                        }
                    }
                }
                repeat_password.oninput = function(e){
                    let value = e.target.value
                    const message   =  checkInputIvalidate(value);
                    if(message){
                        erorMessage.innerText = message;
                        erorMessage.style.display = "block"
                    }
                    else {
                        erorMessage.innerText = message;
                        erorMessage.style.display = "none"
                    }
                }
         }
         inputs.forEach(input =>{
             const parentElement = input.parentElement;
              const erorMessage = parentElement.querySelector(".valid-feedback")
             input.onblur = function(e){
                 let value = e.target.value
                 const message   =  checkInputIvalidate(value);
                 if(message){
                     erorMessage.innerText = message;
                     erorMessage.style.display = "block"
                 }
                 else {
                     erorMessage.innerText = message;
                     erorMessage.style.display = "none"
                 }
             }
             input.oninput = function(e){
                 let value = e.target.value
                 const message   =  checkInputIvalidate(value);
                 if(message){
                     erorMessage.innerText = message;
                     erorMessage.style.display = "block"
                 }
                 else {
                     erorMessage.innerText = message;
                     erorMessage.style.display = "none"
                 }
             }
         })
         form.onsubmit = function(e){
          
             let check = true;
                 const parentElement = passwords[0].parentElement;
                 const erorMessage = parentElement.querySelector(".valid-feedback")
              
                     let value = passwords[0].value
                     let message   =  checkInputIvalidate(value);
                     if(message){
                         erorMessage.innerText = message;
                         erorMessage.style.display = "block"
                         check = false;
                     }
                     else {
                         erorMessage.innerText = message;
                         erorMessage.style.display = "none"
                         
                     }
                     if(repeat_password){
                        const parentElement = repeat_password.parentElement;
                        const erorMessage = parentElement.querySelector(".valid-feedback")
                        let value = repeat_password.value
                        let message   =  checkInputIvalidate(value);
                    if(message){
                        erorMessage.innerText = message;
                        erorMessage.style.display = "block"
                        check = false;
                    }
                    else {
                        erorMessage.innerText = message;
                        erorMessage.style.display = "none"
                        if(repeat_password.value.trim() !== passwords[0].value.trim()){
                         
                            erorMessage.innerText = "Mật khẩu không trùng khớp";
                            erorMessage.style.display = "block"
                            check = false;
                        }
                        else {
                            message = "";
                            erorMessage.innerText = "";
                            erorMessage.style.display = "none"
                        }
                    }
                    }
                
             inputs.forEach(input =>{
                 const parentElement = input.parentElement;
                 const erorMessage = parentElement.querySelector(".valid-feedback")
              
                     let value = input.value
                     let message   =  checkInputIvalidate(value);
                     if(message){
                         erorMessage.innerText = message;
                         erorMessage.style.display = "block"
                         check = false;
                     }
                     else {
                         erorMessage.innerText = message;
                         erorMessage.style.display = "none"
                     }
                     
             })
             if(!check){
                 return false;
             }
         }
        }
        
        const checkInputIvalidate = function(value){
         return value.trim() !== "" ? "" : "Vui lòng nhập trường này";
        }
    }
// rating
const rating = document.querySelector(".btn_ratings");
if(rating){
    const rate = document.querySelector(".rate");
    const id_Phong = document.querySelector(".rate_content>form>input[name=id_Phong]");
    const id_book = document.querySelector(".rate_content>form>input[name=id_book]");
   const cancle = document.querySelector(".rate_content>form>.rate_title>i");
    rating.onclick = function(){
        event.preventDefault();
        id_Phong.value = this.dataset.id;
        id_book.value = this.dataset.bookid;
        rate.classList.add("active");
    }
    cancle.onclick = function(){
        rate.classList.remove("active");
    }
}