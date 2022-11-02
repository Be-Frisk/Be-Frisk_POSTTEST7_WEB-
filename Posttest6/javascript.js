
alert("WELCOME!!!");
// var nama = confirm("are you sure you want to continue?");




const h1 = document.getElementById("judul");

h1.style.color = "white";

// const p = document.getElementsByTagName("p");
// p[1].style.color = "blue";
// for(let i = 0; i<p.length; i++){
//     p[i].style.color = "blue";
//     p[i].style.fontWeight = "bold";
//     p[i].style.fontSize = "1.5em";
// }

// dom3 = document.getElementsByClassName("item");
// dom3[0].style.color = "red";

// function press(){
//     const ul = document.querySelector("section#query-slctr ul");
    
//     const li = document.createElement("li");
//     const item = document.createTextNode("Item 4");

//     li.appendChild(item);
//     ul.appendChild(li);
// }

const press = document.getElementById("btn-info1");
press.addEventListener("click", function(){
    const x = document.getElementsByTagName("section");
    if(x.style.display == "none"){
        x.style.display = "block";
    }
    else{
        x.style.display = "none";
    }
});