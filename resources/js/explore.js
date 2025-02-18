document.addEventListener('DOMContentLoaded', function() {
    // Get all the Explore buttons
    const exploreButtons = document.querySelectorAll('.cssbuttons-io-button');

    // Attach a click event to each button
    exploreButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get the location from the data-location attribute
            const location = this.getAttribute('data-location');
            
            // Send the location to the server using AJAX
            fetch('/store-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // CSRF token for security
                },
                body: JSON.stringify({ location: location })
            })
            .then(response => response.json())
            .then(data => {
                // On success, redirect to the warehouse details page
                window.location.href = '/warehouse-details';
            })
            .catch(error => {
                console.error('Error storing session:', error);
            });
        });
    });
});
