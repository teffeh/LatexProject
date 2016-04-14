<body onload = "setTitleBoxActive(true); setAuthorBoxActive(true)">
    <div class = "container-fluid">
        <div class = "page-header">
            <h1> Welcome to DummyTex</h1>
            <p> DummyTex is the visual LaTeX writing assistant</p>
        </div>
        <div class = "row">
            <div class = "col-md-6">
                <?php include("preamble.php"); ?>
                <form method = "post">
                    <div class = "well" id = "documentElement">
                        <?php include("documentelement.php"); ?>
                    </div>
                </form>
            </div>
            <div class = "form-group col-md-6">
                <form method="post"><input type="button" id = "generateDocumentButton" value="get pdf"/></form>
                <div id="pdfFrame"><h1> Your pdf here</h1></div>
<!--                <iframe width='100%' height='450    px' src=\"/LatexProject/Output/blankpdf.pdf\"></iframe>-->
            </div>
        </div>
    </div>
</body>