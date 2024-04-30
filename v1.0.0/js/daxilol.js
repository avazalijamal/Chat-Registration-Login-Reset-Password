window.addEventListener("load",function(){

    const pass=document.querySelector("#pass");
    const chec=document.querySelector("#chec");

    chec.addEventListener("change",function(){

        if(chec.checked){
            pass.setAttribute("type","text");
        }else{
            pass.setAttribute("type","password");
        }

    });

});