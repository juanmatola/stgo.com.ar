window.addEventListener("load", () => {
            var login = document.getElementsByClassName('login__container');
            if(login.length != 0){
                setTimeout(() => {
                    login[0].classList.add('show');
                }, 400); 
            }
        })