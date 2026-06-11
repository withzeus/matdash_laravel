document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("sidebarToggleBtn");
    const sidebar = document.getElementById("mainSidebar");
    const headerLogo = document.getElementById("headerLogo");
    const workspaceArea = document.getElementById("workspaceArea");
    const backdrop = document.getElementById("sidebarBackdrop");
    const leftNavbar = document.getElementById("leftNavbar");

    // Internal State Tracking variable (starts expanded on desktop viewports)
    let isOpened = window.innerWidth >= 768;

    // Primary UI class updating state routine
    function applySidebarState() {
        if (isOpened) {
            // OPENED STATE: Show Sidebar, Logo, and reset left margins
            sidebar.classList.remove("-translate-x-full");
            headerLogo.classList.remove(
                "w-0",
                "opacity-0",
                "scale-x-0",
                "pointer-events-none",
                "mr-0",
            );
            headerLogo.classList.add(
                "w-auto",
                "opacity-100",
                "scale-x-100",
                "mr-4",
            );
            workspaceArea.classList.add("md:ml-64");
            leftNavbar.classList.add("w-64", "px-4");

            if (window.innerWidth < 768) {
                backdrop.classList.remove("hidden");
                setTimeout(() => backdrop.classList.add("opacity-100"), 10);
            }
        } else {
            // CLOSED/COLLAPSED STATE: Hide Sidebar, Collapse Logo container, pull Burger to left:0
            sidebar.classList.add("-translate-x-full");
            headerLogo.classList.remove(
                "w-auto",
                "opacity-100",
                "scale-x-100",
                "mr-4",
            );
            headerLogo.classList.add(
                "w-0",
                "opacity-0",
                "scale-x-0",
                "pointer-events-none",
                "mr-0",
            );
            workspaceArea.classList.remove("md:ml-64");
            backdrop.classList.remove("opacity-100");
            leftNavbar.classList.remove("w-64", "px-4");

            setTimeout(() => backdrop.classList.add("hidden"), 300);
        }
    }

    // Initial alignment pass checks based on active frame scaling parameters
    if (window.innerWidth < 768) {
        isOpened = false;
        applySidebarState();
    }

    // Event Click Trigger Listeners
    toggleBtn.addEventListener("click", function (e) {
        e.preventDefault();
        isOpened = !isOpened;
        applySidebarState();
    });

    backdrop.addEventListener("click", function () {
        isOpened = false;
        applySidebarState();
    });

    // Recalculate if user forces a viewport resize shift
    window.addEventListener("resize", function () {
        if (
            window.innerWidth >= 768 &&
            !isOpened &&
            !headerLogo.classList.contains("w-0")
        ) {
            isOpened = true;
            applySidebarState();
        }
    });
});
