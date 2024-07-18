<!-- app/Views/application_types/create.php -->
<form action="/create_application_type.php" method="POST" class="organizer-form">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <label for="deadline">Deadline:</label>
    <input type="date" id="deadline" name="deadline" required><br>

    <label for="cover_photo">Cover Photo URL:</label>
    <input type="text" id="cover_photo" name="cover_photo" required><br>

    <input type="submit" value="Create">
</form>
