<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div class="container">
        <h1>My Notes</h1>
        <div id="notes-container">
        </div>
        <div class="input-section">
            <textarea id="note-text" placeholder="Write your note here..."></textarea>
            <input type="text" id="start-time-input" placeholder="Selecteer Begin Tijd">
            <input type="text" id="end-time-input" placeholder="Selecteer Eind Tijd">

            <button onclick="addNote()">Voeg taak toe</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
