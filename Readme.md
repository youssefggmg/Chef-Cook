# Site Web avec Multi-Rôles

## Description
A web application with multi-role functionality designed for users and chefs (administrators) to enhance culinary booking experiences.

### Roles:

#### Utilisateurs (Clients):
- Discover the menus proposed by the chef.
- Register, log in, and book a culinary experience.

#### Chiefs (Administrators):
- Log in and manage bookings (accept, decline, view statistics of requests, and manage their profile).

---

## Main Features

### Registration and Connection
- Users and chefs can sign up and log in.
- After successful authentication, users are redirected to specific pages based on their role (user or chef).

### User Page (Client):
- View the chef's menus and book culinary experiences (select date, time, and number of people).
- Manage bookings: view history, modify, or cancel reservations.

### Chef Page (Dashboard):
- Manage bookings: accept or refuse requests based on availability.
- View detailed statistics:
  - Number of pending requests.
  - Number of approved requests for the current day.
  - Number of approved requests for the next day.
  - Details of the next customer and their booking.
  - Total number of registered customers.

---

## Design

### Responsive Design:
- Fully compatible with mobile, tablet, and desktop screens.

### Aesthetics:
- Modern and elegant design with refined colors to reflect luxury.

### UX/UI:
- Intuitive and pleasant interface for smooth navigation.

---

## JavaScript Features

### Form Validation with Regex:
- Validate user inputs in forms (e.g., email, phone number, password) using regular expressions.

### Dynamic Menu Forms:
- Allow chefs to dynamically add multiple dishes to a menu.
- Input fields for dishes can be added or deleted without reloading the page.

### Dynamic Modals:
- Use modals to display information (e.g., booking details, action confirmations, error messages) without reloading the page.

### SweetAlerts:
- Integration of SweetAlert for visually appealing alerts for important actions (e.g., reservation confirmation, cancellation).

---

## Data Security

### Password Hashing:
- Secure techniques for hashing passwords.

### XSS Protection (Cross-Site Scripting):
- Clean and escape user inputs to prevent XSS attacks.

### SQL Injection Prevention:
- Use prepared queries to interact with the database and prevent SQL attacks.

### CSRF Protection (Bonus):
- Implement CSRF tokens to secure sensitive actions such as bookings, registrations, and profile updates.