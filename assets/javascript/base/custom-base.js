import $ from "jquery";
    // 

$(document).ready( () => {
    let showInfo = true;
    $(".custom-user-log").on('click',() =>{
        if (showInfo) {
            setTimeout(() => $(".custom-user-info").show(),100);
            showInfo = false;
        } else {
            setTimeout(() => $(".custom-user-info").hide(),100);
            showInfo = true;
        }
    });

   const titleSide = document.querySelectorAll('.sidebar-item-title');
   const itemMenu = document.querySelectorAll('.sidebar-item-list');


   
    titleSide.forEach( (side,index)  => {
        var isShow = true;
        side.addEventListener('click',() =>{
            if (isShow) {
                itemMenu[index].style.display = 'block'; 
                isShow = false;
            }else{
                itemMenu[index].style.display = 'none'; 
                isShow = true;
            }
        })
    })
});