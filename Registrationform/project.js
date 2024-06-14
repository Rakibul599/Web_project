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

function searchCards() {
    let input = document.getElementById('searchInput').value.toLowerCase();
    
    let cards = document.getElementsByClassName('card');


    for (let i = 0; i < cards.length; i++) {
        let title = cards[i].getElementsByClassName('title_r')[0];
        let description = cards[i].getElementsByClassName('des')[0];
        
        if (title || description) {
            let titleText = title.textContent || title.innerText;
            let descriptionText = description.textContent || description.innerText;
            
            if (titleText.toLowerCase().indexOf(input) > -1 || descriptionText.toLowerCase().indexOf(input) > -1) {
                cards[i].style.display = "";

            } else {
                cards[i].style.display = "none";

            }
        }
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

