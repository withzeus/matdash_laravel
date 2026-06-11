document.addEventListener("DOMContentLoaded", () => {
    // Select input element trackers
    const inputSidebarHex = document.querySelector('input[name="sidebar_color"]');
    const inputSidebarColor = document.querySelector('input[type="color"][value="#FFFFFF"]');
    const inputHeadingHex = document.querySelector('input[name="heading_color"]');
    const inputHeadingColor = document.querySelector('input[type="color"][value="#111827"]');
    
    // Select mock layout simulator targeting selectors
    const mockSidebar = document.getElementById('mockSidebar');
    const mockHeading = document.getElementById('mockHeading');

    // Handler for sidebar color change tracking operations
    function updateSidebarFill(colorHex) {
      const standardColor = colorHex.startsWith('#') ? colorHex : `#${colorHex}`;
      mockSidebar.style.backgroundColor = standardColor;
      inputSidebarHex.value = standardColor.replace('#', '').toUpperCase();
      inputSidebarColor.value = standardColor;
    }

    // Handler for headings color configurations
    function updateHeadingFill(colorHex) {
      const standardColor = colorHex.startsWith('#') ? colorHex : `#${colorHex}`;
      mockHeading.style.backgroundColor = standardColor;
      inputHeadingHex.value = standardColor.replace('#', '').toUpperCase();
      inputHeadingColor.value = standardColor;
    }

    // Bind Event Listeners for seamless updates
    inputSidebarHex.addEventListener('input', (e) => updateSidebarFill(e.target.value));
    inputSidebarColor.addEventListener('input', (e) => updateSidebarFill(e.target.value));
    inputHeadingHex.addEventListener('input', (e) => updateHeadingFill(e.target.value));
    inputHeadingColor.addEventListener('input', (e) => updateHeadingFill(e.target.value));
  });