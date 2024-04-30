window.addEventListener("load",function(){


    const pass=document.querySelector("#pass");
    const chec=document.querySelector("#chec");
    const img=document.querySelector("#img");
    const file=document.querySelector("#file");
   

    chec.addEventListener("change",function(){

        if(chec.checked){
            pass.setAttribute("type","text");
        }else{
            pass.setAttribute("type","password");
        }

    });

    file.addEventListener("change",function(){

        const FR=new FileReader();

        FR.readAsDataURL(file.files[0]);

        FR.onload=function(){
            img.setAttribute("src",FR.result);
        }

    });

});