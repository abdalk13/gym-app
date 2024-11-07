// Java script for date
function displayDate() {
    const currentDate = new Date();
    const dateDisplay = document.getElementById('date-display');
    dateDisplay.textContent = currentDate.toDateString();
}

// Call the function when the page loads
window.onload = displayDate;