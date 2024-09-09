const optionmenu = document.querySelector(".color"),
       selectbtm = optionmenu.querySelector(".color-btm"),
       options= optionmenu.querySelectorAll(".option"),
        sb_text= optionmenu.querySelector(".btm-text");

selectbtm.addEventListener("click",() =>
optionmenu.classList.toggle("active"));

options.forEach(option =>{
 option.addEventListener("click",() =>{
    let selectoption = option.querySelector(".color-text").innerText;
    sb_text.innerText= selectoption ;
   
 });
});