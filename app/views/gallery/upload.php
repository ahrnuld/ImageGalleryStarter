<?php
include __DIR__ . '/../header.php';
?>

<div class="album py-5">
    <div class="container">
        <h1>Upload image</h1>
        <h4 class="my-4">Upload a new Image</h4>
        <!-- Make sure to modify the form to post to a controller function that handles the post request -->
        <!-- Also, note that the form requires the enctype to be set correctly for uploads to work -->
        <form>
            <div class="mb-3">
                <label for="fileUpload" class="form-label">File to upload:</label>
                <div class="custom-file">
                    <input type="file" class="form-control" id="fileUpload" name="fileUpload">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/../footer.php';
?>