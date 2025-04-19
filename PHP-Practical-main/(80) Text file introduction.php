
<?php
// Specify the file name
$fileName = "about_me.txt";

// Content to be written in the file
$name = "Sarvesh Bhardwaj";
$introduction = "Hello, my name is Sarvesh Bhardwaj. I am a passionate software developer who loves exploring new technologies and solving challenging problems. In my free time, I enjoy playing playstation, hiking, and learning about artificial intelligence.";

$content = "Name: $name\nIntroduction: $introduction";

// Create and write to the file
if(file_put_contents($fileName, $content)) {
    echo "File '$fileName' has been created successfully!";
} else {
    echo "Failed to create the file.";
}

echo"This Program is written by Shaurya Ranjan 0221BCA058";
?>
