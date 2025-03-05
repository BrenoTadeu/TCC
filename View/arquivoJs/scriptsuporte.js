function search(){
    let input = document.getElementById('searchbar').value 
    input = input.tolowerCase()
    let x = document.getElementsByClassName('animals')

    for(i = 0; i < x.length; i++){
        if(!x[i].innerHTML.toLowerCase().includes(input)){
            x[i].style.dispay = "none"
        }else{
            x[i].style.dispay = "List-item"
        }
    }
}