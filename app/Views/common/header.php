<!-- app/Views/common/header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Organizer Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <?php 
    // Determine the current script name and include the corresponding CSS file
    $script_name = basename($_SERVER['SCRIPT_NAME'], '.php');
    if (file_exists(__DIR__ . "/../../public/css/styles_$script_name.css")) {
        echo '<link rel="stylesheet" type="text/css" href="/styles_' . $script_name . '.css">';
    }
    ?>
</head>
<body>
<header>
    <div class="header-container">
        <a href="/"><img src="/images/logo.png" alt="Logo" class="logo"></a>
        <nav>
            <a href="/vendor.php">Vendor Application</a> | 
            <a href="/organizer.php">Organizer Dashboard</a> | 
            <a href="/view_applications.php">View Applications</a> | 
            <a href="/track_status.php">Track Application Status</a>
        </nav>
    </div>
</header>
