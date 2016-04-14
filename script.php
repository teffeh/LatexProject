<script src = "https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src = "https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type = "text/javascript" src = "http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script>
    function docCreated() {
        alert("Document created as .pdf file, proceed to download");
    }
    function sectionAdded() {
        alert("Section added");
    }
    function loadDoc(url, cFunc) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                cFunc(xhttp);
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
    }
    function setTitleBoxActive(status) {
        document.getElementById("preambleDocumentNewTitle").disabled = status;
    }
    function setAuthorBoxActive(status) {
        document.getElementById("preambleDocumentAuthor").disabled = status;
    }

    $(function () {
        $("#submitPreamble").click(function () {
            var data = {
                'preambleDocumentFont': $("#preambleDocumentFont").val(),
                'preambleDocumentPaperType': $("#preambleDocumentPaperType").val(),
                'preambleDocumentOrientation': $("#preambleDocumentOrientation:checked").val(),
                'preambleDocumentTwoColumn': $("#preambleDocumentTwoColumn:checked").val(),
                'preambleDocumentType': $("#preambleDocumentType").val(),
                'preambleDocumentName': $("#preambleDocumentName").val(),
                'preambleDocumentTitleSameAsName': $("#preambleDocumentTitleSameAsName:checked").val(),
                'preambleDocumentNewTitle': $("#preambleDocumentNewTitle").val(),
                'preambleDocumentMakeTitle': $("#preambleDocumentMakeTitle:checked").val(),
                'preambleDocumentSignAuthor': $("#preambleDocumentSignAuthor:checked").val(),
                'preambleDocumentAuthor': $("#preambleDocumentAuthor").val(),
                'preambleDocumentTitlePage': $("#preambleDocumentTitlePage:checked").val()
            };
            $.ajax(
                    {
                        type: 'post',
                        url: 'buildPreamble.php',
                        data: data,
                        success: function () {
                            $('.success1').fadeIn(1000).show();
                            $('.success1').fadeOut(1000).show();
                        }
                    });
            return false;
        });
    });
</script>
<script type = "text/javascript">
    $(function () {
        $("#addElement").click(function () {

            var inputType = $("#inputType").val();
            var inputTypeName = $("#inputTypeName").val();
            var ssText = $("#ssText").val();
            var dataString = "inputType=" + inputType + "&inputTypeName=" + inputTypeName + "&ssText=" + ssText;
            $.ajax({
                type: "POST",
                url: "buildDocument.php",
                data: dataString,
                success: function () {
                    $('.success2').fadeIn(1000).show();
                    $('.success2').fadeOut(1000).show();
                }
            });
            return false;
        });
    });
    $(function () {
        $("#pdfFrameButton").click(function () {
            document.getElementById("pdfFrame").innerHTML = <?php echo "Output/" . $_SESSION['newFilename'] . ".tex" ?>;
        });
    });

    $(function() {
        $("#generateDocumentButton").click(function () {
            $.ajax({
                type:"POST",
                url: "closeDocument.php",
                success: function() {
                    $('#pdfFrame').html("pdf submitted");
                }
            });
        });
        return false;
    });
</script>