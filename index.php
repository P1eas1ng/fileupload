<!DOCTYPE html>
<html>
    <head>
        <title>Upload Files</title>
        <link href="/css/uploadfile.min.css" rel="stylesheet">
        <script src="/js/jquery-1.10.2.js"></script>
        <script src="/js/jquery.uploadfile.min.js"></script>
    </head>
    <body>
        <div id="multiple_file_uploader">Upload</div>
        <script>
        $(document).ready(function() {
            $("#multiple_file_uploader").uploadFile({
                fileName : "myfile",
                url : "upload.php",
                multiple : true,
                maxFileCount : 5,
                allowedTypes : "jpg,png,gif",
                showProgress : true
            });
        });
        </script>
    </body>
</html>
