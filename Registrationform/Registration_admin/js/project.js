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
