// Hämta knappen för att logga ut
var logoutButton = document.getElementById("logout");

// Lägg till en klickhändelse för knappen för att logga ut
logoutButton.addEventListener("click", function() {
    // Placera din logik för att logga ut här
    alert("Du har loggat ut.");
    // Exempelvis: Skicka användaren till inloggningssidan
    window.location.href = "login.php";
});