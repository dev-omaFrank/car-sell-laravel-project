<x-guest-layout title="Signup" bodyClass="page-signup">
    <h1 class="auth-page-title">Signup</h1>

    <form method="POST" id="registrationForm">
        @csrf
        <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Your Password" required />
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Repeat Password" required />
        </div>
        <hr />
        <div class="form-group">
            <input type="text" name="first_name" placeholder="First Name" required />
        </div>
        <div class="form-group">
            <input type="text" name="last_name" placeholder="Last Name" required />
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="Phone" required />
        </div>

        <div id="message"></div>
        <button type="submit" class="btn btn-primary btn-login w-full">Register</button>
    </form>

    <x-slot:createAccount>
        <div class="login-text-dont-have-account">
            Already have an account? -
            <a href="/login.html"> Click here to login </a>
        </div>
    </x-slot:createAccount>
</x-guest-layout>


<script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting traditionally

        // Get form data
        const formData = new FormData(this);

        // Send AJAX request
        fetch('/signup', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content'), // Add CSRF token for Laravel
                },
            })
            .then(response => response.json())
            .then(data => {
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
