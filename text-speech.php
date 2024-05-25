<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Text to Speech Converter</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    textarea {
        width: 80%;
        height: 200px;
        margin: 20px auto;
        padding: 10px;
        resize: none;
    }
    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }
    button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<h1>Text to Speech Converter</h1>
<textarea id="text-to-convert" placeholder="Enter text to convert..."></textarea>
<button onclick="convertTextToSpeech()">Convert to Speech</button>
<audio id="audio" controls style="display: none;"></audio>

<script>
function convertTextToSpeech() {
    const text = document.getElementById('text-to-convert').value;
    
    // Using Web Speech API for speech synthesis
    const speechSynthesis = window.speechSynthesis;
    const utterance = new SpeechSynthesisUtterance(text);
    
    // Synthesizing speech and playing
    speechSynthesis.speak(utterance);
    
    // Display audio player
    const audioElement = document.getElementById('audio');
    audioElement.src = URL.createObjectURL(new Blob([text], { type: 'audio/mp3' }));
    audioElement.style.display = 'block';
}
</script>
</body>
</html>
