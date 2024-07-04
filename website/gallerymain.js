document.addEventListener("DOMContentLoaded", function() {
    const eventContainer = document.getElementById('event-container');

    const event = {
        title: "Sample Event",
        date: "2024-07-02",
        description: "This is a detailed description of the sample event. It includes all necessary information about the event, including time, location, and other relevant details.",
        image: "https://via.placeholder.com/800x400", // Example placeholder image
        location: "123 Event Street, Event City, EV 12345",
        time: "10:00 AM - 4:00 PM"
    };

    const eventHTML = `
        <div class="event">
            <h2>${event.title}</h2>
            <img src="${event.image}" alt="${event.title}">
            <p><strong>Date:</strong> ${event.date}</p>
            <p><strong>Time:</strong> ${event.time}</p>
            <p><strong>Location:</strong> ${event.location}</p>
            <p>${event.description}</p>
        </div>
    `;

    eventContainer.innerHTML = eventHTML;
});
