
setActiveMenu();

function setActiveMenu() {
    console.log("starting");
    clearActiveMenu();
    $url = window.location.href;

    // set menu active for admin
    if ($url.includes("admin/home")) {
        $("#home").addClass("active");
    }

    if($url.includes("admin/product")) {
        $("#products").addClass("active");
    }

    if($url.includes("admin/order")) {
        $("#orders").addClass("active");
    }

    if($url.includes("admin/cash")) {
        $("#cash").addClass("active");
    }

    if($url.includes("admin/user")) {
        $("#users").addClass("active");
    }

    // set menu active for normal user
    if($url.includes("/product")) {
        $("#products").addClass("active");
    }

    if($url.includes("/contact")) {
        $("#contact").addClass("active");
    }

    if($url.includes("/about")) {
        $("#about").addClass("active");
    }

    if($url.includes("/login")) {
        $("#login").addClass("active");
    }

    if($url.includes("/register")) {
        $("#register").addClass("active");
    }

    // set menu active for logged user
    if($url.includes("/logged/home")) {
        $("#home").addClass("active");
    }

    if($url.includes("/logged/product")) {
        $("#products").addClass("active");
    }

    if($url.includes("/logged/order")) {
        $("#orders").addClass("active");
    }
    
}

function clearActiveMenu() {
    $("#home").removeClass("active");
    $("#products").removeClass("active");
    $("#orders").removeClass("active");
    $("#cash").removeClass("active");
    $("#users").removeClass("active");   
}