document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".dropdown > a");
    const submenu = document.querySelector(".submenu");

    dropdown.addEventListener("click", function (event) {
        event.preventDefault();
        submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function (event) {
        if (!dropdown.contains(event.target) && !submenu.contains(event.target)) {
            submenu.style.display = "none";
        }
    });

    const dropdownBottom = document.querySelector(".bottomNavigation .dropdown > a");
    const submenuBottom = document.querySelector(".bottomNavigation .submenu");

    dropdownBottom.addEventListener("click", function (event) {
        event.preventDefault();
        submenuBottom.style.display = submenuBottom.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function (event) {
        if (!dropdownBottom.contains(event.target) && !submenuBottom.contains(event.target)) {
            submenuBottom.style.display = "none";
        }
    });

    async function numCarrito(){
        let respOrderLines = await fetch('/api/orderLines');
        let orderLines = await respOrderLines.json();
        
        let numCarrito = document.querySelector('#numCarrito');
        let numCarritoBottom = document.querySelector('#numCarritoBottom');
        let numeroCarrito = 0;
        if(orderLines.length > 0 && orderLines != "error" && orderLines != "no hay order"){
            orderLines.forEach(linea =>{
                numeroCarrito = numeroCarrito + linea.quantity;
            });
        }  
        numCarrito.textContent = numeroCarrito;
        numCarritoBottom.textContent = numeroCarrito;

        
    }
    numCarrito();
});
