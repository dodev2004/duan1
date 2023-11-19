
    function validationForm (id){
        const form = document.querySelector(id);
        if(form){
         const inputs = Array.from(form.querySelectorAll("input[type=text]"));
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
         form.onsubmit = function(){
             let check = true;
             inputs.forEach(input =>{
                 const parentElement = input.parentElement;
                 const erorMessage = parentElement.querySelector(".valid-feedback")
              
                     let value = input.value
                     const message   =  checkInputIvalidate(value);
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
