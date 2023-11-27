
const form = document.querySelector('#form-book');
if (form) {
    const inputCheckIn = form.querySelector("input[name=check_in]");
    const inputCheckOut = form.querySelector("input[name=check_out]");
    let checked = true;
    inputCheckIn.onblur = function (e) {
        const eror_message = inputCheckIn.parentElement.querySelector(".eror_messsage");
        const timer = new Date(inputCheckIn.value).getTime();
        if (checkCurrentTime(timer)) {
            eror_message.style.display = "block ";
            eror_message.innerHTML = "Ngày lớn hơn hoặc bằng ngày hiện tại"
        }
        else {
            eror_message.style.display = "none";
            eror_message.innerHTML = ""
        }


    }
    inputCheckOut.onblur = function () {
        const eror_message = inputCheckOut.parentElement.querySelector(".eror_messsage");
        const timer = new Date(inputCheckOut.value).getTime();
        if (checkCurrentTime(timer)) {
            eror_message.style.display = "block ";
            eror_message.innerHTML = "Ngày lớn hơn hoặc bằng ngày hiện tại"
        }
        else {
            eror_message.style.display = "none";
            eror_message.innerHTML = ""
            if (new Date(inputCheckIn.value).getTime() >= new Date(inputCheckOut.value).getTime()) {
                eror_message.style.display = "block ";
                eror_message.innerHTML = "Thơi gian checkin phải lớn hơn checkout"
            }
            else {
                // var times = ; IN biến bên mua hàng
                const notification = form.querySelector(".notification")
                const notification_eror = form.querySelector(".notification_eror")
                for (var time of times) {
                    const checkIn = new Date(time["check_in"]).getTime();
                    const checkOut = new Date(time["check_out"]).getTime();

                    if (timeCheckin < checkIn && timeCheckout < checkIn || timeCheckin > checkOut && timeCheckout > checkOut) {
                      
                        notification.style.display = "block";
                        notification_eror.style.display = "none";
                        checked = true;
                    }
                    else {
                        notification.style.display = "none";
                        notification_eror.style.display = "block";
                        console.log("Phòng đã thuê ")
                        checked = false;
                    }
                }
            }
        }


    }
}


function checkCurrentTime(time) {
    let year = new Date().getFullYear();
    let month = new Date().getMonth() + 1;
    let day = new Date().getDate();
    const currentTime = new Date(`${year}-${month}-${day}`).getTime();
    return currentTime > time ? true : false;
}
