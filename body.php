<body onload="setTitleBoxActive(true)">
<div class="container-fluid">
    <div class="page-header">
        <h1> Welcome to DummyTex</h1>
        <p> DummyTex is the visual LaTeX writing assistant</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form role="form" id="startDocument" action="buildDocument.php" method="post" enctype="multipart/form-data">
                <?php include("preamble.php") ?>
                <div class="well">
                    <label for="inputType" class="control-label">I want to add</label>
                    <select name="inputType" class="form-control">
                        <option selected="true" style="display: none" ;> Select Option:</option>
                        <option value="section"> a section</option>
                        <option value="subsection"> a subsection</option>
                        <option value="subsubsection"> a subsubsection</option>
                        <option value="paragraph"> a paragraph</option>
                    </select>
                    <label for="ssText" class="control-label">With the text</label>
                    <textarea rows="4" cols="50" class="form-control" name="ssText"
                              placeholder="Your text here..."></textarea>
                    <input type="button" class="btn btn-default" value="add" onclick="sectionAdded()"/>
                    <input type="submit" class="btn" value="Submit"/>
                </div>
            </form>
        </div>
        </form>
        <div class="form-group col-md-6" id="pdfFrame">
            <h1> Your pdf here</h1>
            <!--<iframe width='100%' height='450px' src=\"/LatexProject/Output/blankpdf.pdf\"></iframe>-->
        </div>
    </div>
</div>
</body>