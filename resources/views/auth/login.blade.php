<x-guest-layout title="Login" bodyClass="page-login">
    <h1 class="auth-page-title">Login</h1>

    <form id="loginForm" method="post">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" required />
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset">Reset Password</a>
        </div>
        <div id="message"></div>
        <button class="btn btn-primary btn-login w-full">Login</button>
    </form>

    <x-slot:createAccount>
        Don't have an account? -
        <a href="/signup.html"> Click here to create one</a>
    </x-slot:createAccount>
</x-guest-layout>


<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Get form data
        const formData = new FormData(this);

        // Send AJAX request
        fetch('/login', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content'), // Add CSRF token for Laravel
                },
            })
            .then(response => response.json())
            .then(data => {

              console.log({data})
                // Display success or error message
                const messageDiv = document.getElementById('message');
                if (data.url) {
                        location.href = data.url;
                } else if (data.errors) {
                    // Display validation errors
                    let errors = '';
                    for (const key in data.errors) {
                        errors += `<p style="color: red;">${data.errors[key][0]}</p>`;
                    }
                    messageDiv.innerHTML = errors;
                } else {
                    messageDiv.innerHTML =
                        '<p style="color: red;">Registration failed. Please try again.</p>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>
