document.getElementById('show-login').addEventListener('click', function(e) {
    e.preventDefault();
    console.log("Switching to login form");

    document.getElementById('register-form').classList.add('hidden');
    document.getElementById('login-form').classList.remove('hidden');

    document.getElementById('login-form').classList.add('fade');
});

document.getElementById('show-register').addEventListener('click', function(e) {
    e.preventDefault();
    console.log("Switching to register form");

    document.getElementById('login-form').classList.add('hidden');
    document.getElementById('register-form').classList.remove('hidden');

    document.getElementById('register-form').classList.add('fade');
});