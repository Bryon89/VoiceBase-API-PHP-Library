<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.js"></script>
    <script src="VBLibrary.js"></script>
</head>
<body>
    <div>
        <p>Use Forms to submit API requests. The information is passed to a new page where the function is run.</p>
        <p>Note that all API calls require a bearer token which can be configured in VBAPIs.php</p>
    </div>
    <div>
        <h1>UploadMediaUrl()</h1>
        <p>Allows you to submit a new audio recording url to the VoiceBase platform for analysis.</p>
        <p>Here is an example URL you can use, https://download.samplelib.com/mp3/sample-3s.mp3</p>
        <p>Additional JSON configuration (instruction settings for VoiceBase on how to process your audio/features) and metadata (metadata about the audio recording) can be included as JSON.</p>
        <form action="exampleUploadMediaUrl.php" id="UploadMediaUrl" class="UploadMediaUrl">
            <label for="mediaUrl">MediaUrl:</label><br>
            <input type="text" id="mediaUrl" name="mediaUrl" value="https://download.samplelib.com/mp3/sample-3s.mp3"><br>
            <label for="configuration">Configuration:</label><br>
            <input type="text" id="configuration" name="configuration" value='{"priority":"normal"}'><br>
            <label for="metadata">Metadata:</label><br>
            <input type="text" id="metadata" name="metadata" value='{"title":"test"}'><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div>
        <h1>UploadMediaFile()</h1>
        <p>Allows you to submit a new audio recording file to the VoiceBase platform for analysis.</p>
        <p>You can download this and then attach it as an example, https://download.samplelib.com/mp3/sample-3s.mp3</p>
        <p>Additional JSON configuration (instruction settings for VoiceBase on how to process your audio/features) and metadata (metadata about the audio recording) can be included as JSON.</p>
        <form action="exampleUploadMediaFile.php" enctype="multipart/form-data"  method="post" id="UploadMediaFile" class="UploadMediaFile">
            <label for="mediaFile">MediaFile:</label><br>
            <input type="file" id="mediaFile" name="mediaFile"><br>
            <label for="configuration">Configuration:</label><br>
            <input type="text" id="configuration" name="configuration" value='{"priority":"normal"}'><br>
            <label for="metadata">Metadata:</label><br>
            <input type="text" id="metadata" name="metadata" value='{"title":"test"}'><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div>
        <h1>getAllMedia()</h1>
        <p>Returns mediaIds (VoiceBase unique Ids) for the 20 most recent audio added to your VoiceBase account.</p>
        <form action="exampleGetAllMedia.php" id="getAllMedia" class="getAllMedia">
            <input type="submit" value="Submit">
        </form>
    </div>
    <div>
        <h2>getSingleMedia()</h1>
        <p>Returns the full results (transcription, analytics, etc) for a single audio that was previously uploaded to VoiceBase.</p>
        <p>Requires a mediaId.</p>
        <form action="exampleGetSingleMedia.php" id="getSingleMedia" class="getSingleMedia">
            <label for="mediaId">MediaId:</label><br>
            <input type="text" id="mediaId" name="mediaId" value=""><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
</body>
</html>