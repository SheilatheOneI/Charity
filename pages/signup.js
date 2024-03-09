// signup.js

function signup() {
    // Get values from the form
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Validate email format
    if (!validateEmail(username)) {
        alert('Invalid email address. Please enter a valid email.');
        return;
    }

    // Perform AJAX request to the signup.php file
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'signup.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Handle the response from the server
            console.log(xhr.responseText);
            // Assuming the response is "User registered successfully"
            alert("User registered successfully");
            // Redirect to the home page
            window.location.href = 'index.html';
        }
    };
    xhr.send('username=' + username + '&password=' + password);
}

// Function to validate the email format
function validateEmail(email) {
    // Regular expression for a simple email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

