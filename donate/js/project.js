let flag=0;
function search()
{
    let sh=document.getElementById('show');
    if(flag==0)
        {
            
            sh.style.display="block";
            flag=1;
        }
        else 
        {
            sh.style.display="none";
            flag=0;
        }

}
function show(str) {
    let submenu = document.getElementById(str);
    if (submenu) {
        submenu.style.display = "flex";
    }
}

function hide(str) {
    let submenu = document.getElementById(str);
    if (submenu) {
        submenu.style.display = "none";
    }
}