let dropDown1= document.getElementById("sn-dropdown0");
let dropDown2= document.getElementById("sn-dropdown1");
let dropDown3= document.getElementById("sn-dropdown2");
let closeSideNav = document.getElementById("close-side-navbar-icon");
let sideNav = document.getElementById("sidebar");
let hamBuger = document.getElementById("hamburger");

dropDown1.style.display = "none";

hamBuger.addEventListener("click", openSidebar);

function openSidebar(){
    if(sideNav.style.display === "none")
    {
        sideNav.style.display = "block";
    }
    else{
        sideNav.style.display = "none";
    }
}

closeSideNav.addEventListener("click",closeNav);

function closeNav(){
    if(sideNav.style.display=== "block")
    {
        sideNav.style.display = "none";
    }

}

//drop down - side nav bar 1 - instructor
document.getElementById("dropdown-button").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown0");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});

//drop down - side nav bar - programs/campaigns
document.getElementById("dp-db-2").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown1");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});


//
document.getElementById("dp-db-3").addEventListener("click", function() {
    var dropdown = document.getElementById("sn-dropdown2");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});