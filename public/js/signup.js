// document.getElementById('signupForm').addEventListener('submit', async function(e) {
//     e.preventDefault();

//     const username = document.getElementById('signupUsername').value.trim();
//     const email = document.getElementById('signupEmail').value.trim();
//     const phoneNumber = document.getElementById('signupPhone').value.trim();
//     const firstName = document.getElementById('signupFirstName').value.trim();
//     const lastName = document.getElementById('signupLastName').value.trim();
//     const password = document.getElementById('signupPassword').value;
//     const passwordRepeat = document.getElementById('signupPasswordRepeat').value;

//     // Basic client-side validation
//     if (!username || !email || !phoneNumber || !firstName || !lastName) {
//         document.getElementById('message').textContent = 'All fields are required.';
//         return;
//     }

//     if (!email.match(/^[^@\s]+@[^@\s]+\.[^@\s]+$/)) {
//         document.getElementById('message').textContent = 'Invalid email format.';
//         return;
//     }

//     if (password.length < 8 || !/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
//         document.getElementById('message').textContent = 'Password does not meet criteria.';
//         return;
//     }

//     if (password !== passwordRepeat) {
//         document.getElementById('message').textContent = 'Passwords do not match.';
//         return;
//     }

//     // Send data to the server
//     const response = await fetch('/api/users/register', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify({ username, email, phoneNumber, firstName, lastName, password }),
//     });

//     const data = await response.text();
//     document.getElementById('message').textContent = 'Signup: ' + data;
// });  
