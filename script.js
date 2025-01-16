
//popup code
// function openPopup() {
//   const popup = document.getElementById("popup");
//   popup.style.display = "block";
// }

// function closePopup() {
//   const popup = document.getElementById("popup");
//   popup.style.display = "none";
// }
// function openPopup() {
//   const popup = document.getElementById("popup");
//   if (popup) {
//       popup.style.display = "block";
//   } else {
//       console.error("Popup element not found!");
//   }
// }

// Function to validate form inputs
function validate() {
    // Get the input values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();

    // Validate Name
    if (!validateName(name)) {
        alert("Please enter a valid name (letters and spaces only).");
        return false;
    }

    // Validate Email
    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    // Validate Phone Number
    if (!validatePhone(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }

    // If all validations pass
    // alert("Form submitted successfully!");
    // return true;
}

// Helper function to validate name (only letters and spaces)
function validateName(name) {
    const nameRegex = /^[A-Za-z\s]+$/;
    return nameRegex.test(name);
}

// Helper function to validate email format
function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Helper function to validate phone number (10 digits)
function validatePhone(phone) {
    const phoneRegex = /^\d{10}$/;
    return phoneRegex.test(phone);
}


function toggleMenu() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const popupMenu = document.getElementById('popupMenu');

  // Toggle the cross class
  hamburgerMenu.classList.toggle('cross');

  // Toggle the visibility of the popup menu
  if (popupMenu.style.display === 'block') {
      popupMenu.style.display = 'none';
  } else {
      popupMenu.style.display = 'block';
  }
}
function toggleMenu() {
  const hamburgerMenu = document.querySelector('.hamburger-menu');
  const popupMenu = document.getElementById('popupMenu');

  // Toggle the cross class
  hamburgerMenu.classList.toggle('cross');

  // Toggle the visibility of the popup menu
  if (popupMenu.style.display === 'flex') {
      popupMenu.style.display = 'none';
  } else {
      popupMenu.style.display = 'flex';
  }
}

// location tracking 
// JavaScript for Real-Time Tracking
let map;
let marker;
let watchID;

// Function to initialize Google Map
function initMap() {
  const defaultLocation = { lat: 23.246881, lng: 72.646906 }; // Default location (New Delhi)

  // Create the map centered at the default location
  map = new google.maps.Map(document.getElementById("map"), {
    center: defaultLocation,
    zoom: 12,
  });

  // Create a marker on the map at the default location
  marker = new google.maps.Marker({
    position: defaultLocation,
    map: map,
    title: "Car Location",
  });

  // Start tracking location
  trackLocation();
}

// Function to track location using Geolocation API
function trackLocation() {
  if (navigator.geolocation) {
    // Watch the car's location in real-time
    watchID = navigator.geolocation.watchPosition(
      (position) => {
        const { latitude, longitude } = position.coords;
        const carLocation = { lat: latitude, lng: longitude };

        // Update marker position on the map
        marker.setPosition(carLocation);
        map.setCenter(carLocation);

        console.log(`Car is at: ${latitude}, ${longitude}`);
      },
      (error) => {
        console.error("Error tracking location: ", error);
        alert("Unable to fetch car location. Please check your settings.");
      },
      { enableHighAccuracy: true }
    );
  } else {
    alert("Geolocation is not supported by your browser.");
  }
}

// Stop tracking location if needed
function stopTracking() {
  if (watchID) {
    navigator.geolocation.clearWatch(watchID);
  }
}


// Admin panel
function confirmDelete(carName) {
  return confirm(`Are you sure you want to delete ${carName}?`);
}

document.querySelectorAll('.delete-btn').forEach(button => {
  button.addEventListener('click', function () {
      const carName = this.dataset.name;
      if (!confirmDelete(carName)) {
          event.preventDefault();
      }
  });
});
