
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.querySelector('.update-password-form');

        form.addEventListener('submit', function (event) {
            var newPassword = document.getElementById('new-password').value;
            var confirmPassword = document.getElementById('new-password-confirm').value;

            if (newPassword !== confirmPassword) {
                event.preventDefault(); // Prevent the form submission

                // Display an error message or perform any other action
                alert('New Password and Confirm Password must match');
            }
        });
    });
