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
            // OPENED STATE: Show Sidebar, Logo, and reset structural sizes
            sidebar.classList.remove("-translate-x-full");
            
            // Restore sidebar visibility and width structural blocks on desktop viewports
            sidebar.classList.remove("md:w-0", "md:opacity-0", "md:pointer-events-none");
            sidebar.classList.add("w-64");

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
            
            if (leftNavbar) {
                leftNavbar.classList.add("w-64", "px-4");
            }

            // Mobile specific backdrop toggle handling
            if (window.innerWidth < 768) {
                backdrop.classList.remove("hidden");
                setTimeout(() => {
                    // Check state insurance rule to make sure user didn't instantly re-toggle
                    if (isOpened) backdrop.classList.add("opacity-100");
                }, 10);
            } else {
                // Clear any leftover mobile backdrop states if screen is wide
                backdrop.classList.remove("opacity-100");
                backdrop.classList.add("hidden");
            }
        } else {
            // CLOSED/COLLAPSED STATE: Hide Sidebar, Collapse Logo container
            sidebar.classList.add("-translate-x-full");
            
            // Set width to zero on desktop screens so workspace element captures full screen size
            sidebar.classList.remove("w-64");
            sidebar.classList.add("md:w-0", "md:opacity-0", "md:pointer-events-none");

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
            
            if (leftNavbar) {
                leftNavbar.classList.remove("w-64", "px-4");
            }

            // Animate mobile backdrop out cleanly
            backdrop.classList.remove("opacity-100");
            setTimeout(() => {
                if (!isOpened) backdrop.classList.add("hidden");
            }, 300);
        }
    }

    // Initial alignment pass checks based on active frame scaling parameters
    if (window.innerWidth < 768) {
        isOpened = false;
        applySidebarState();
    }

    // Event Click Trigger Listeners
    if (toggleBtn) {
        toggleBtn.addEventListener("click", function (e) {
            e.preventDefault();
            isOpened = !isOpened;
            applySidebarState();
        });
    }

    backdrop.addEventListener("click", function () {
        isOpened = false;
        applySidebarState();
    });

    // Recalculate and reset layouts completely when user scales/resizes display frames
    window.addEventListener("resize", function () {
        const isDesktop = window.innerWidth >= 768;

        if (isDesktop) {
            // Automatically clear mobile overlay artifacts when scaling up to desktop layout systems
            backdrop.classList.remove("opacity-100");
            backdrop.classList.add("hidden");

            // FIX: If transitioning from mobile to desktop, automatically force the tracking
            // state back to open (true) so the layout opens natively on widescreen monitors.
            if (!isOpened) {
                isOpened = true;
                applySidebarState();
            } else {
                // Insure classes are accurately maintained if already flagged true
                sidebar.classList.remove("-translate-x-full", "md:w-0", "md:opacity-0", "md:pointer-events-none");
                sidebar.classList.add("w-64");
                workspaceArea.classList.add("md:ml-64");
                if (leftNavbar) leftNavbar.classList.add("w-64", "px-4");
            }
        } else {
            // When shrinking down to a mobile viewport size, force the tracking state 
            // to false and reset sidebar tracking classes so it flies off-screen immediately.
            isOpened = false; 
            
            // Clean up desktop width overriding classes
            sidebar.classList.remove("md:w-0", "md:opacity-0", "md:pointer-events-none");
            
            // Ensure standard mobile hidden structural state styles are active
            sidebar.classList.add("-translate-x-full");
            sidebar.classList.remove("w-64");
            workspaceArea.classList.remove("md:ml-64");
            
            // Make sure backdrop hides instantly without any stuck opacity artifacts
            backdrop.classList.remove("opacity-100");
            backdrop.classList.add("hidden");
            
            // Clean up header logo state to match your mobile defaults
            headerLogo.classList.remove("w-auto", "opacity-100", "scale-x-100", "mr-4");
            headerLogo.classList.add("w-0", "opacity-0", "scale-x-0", "pointer-events-none", "mr-0");
            
            if (leftNavbar) {
                leftNavbar.classList.remove("w-64", "px-4");
            }
        }
    });
});