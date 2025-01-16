// Open the view box
function view_car(){
    const viewBox = document.getElementById("view-car");
    viewBox.classList.remove("hidden");
    viewBox.classList.add("visible");
  }
  
  // Close the view box
  function closeViewBox() {
    const viewBox = document.getElementById("view-car");
    viewBox.classList.remove("visible");
    viewBox.classList.add("hidden");
  }
  