<form method = "post">
    <div class = "well">
        <!-->
        <label for = "preambleDocumentFont" class = "control-label">Font size:</label>
        <input name = "preambleDocumentFont" id = "preambleDocumentFont" type = "number" min = "8" max = "72" value = "11"/>
        <!-->
        <label for = "preambleDocumentPaperType" class = "control-label">Paper type:</label>
        <select name = "preambleDocumentPaperType" id = "preambleDocumentPaperType" class = "dropdown">
            <option value = "a4paper">A4 (default)</option>
            <option value = "a5paper">A5</option>
            <option value = "b5paper">B5</option>
            <option value = "letterpaper">Letter paper</option>
            <option value = "executivepaper">Executive paper</option>
            <option value = "legalpaper">Legal paper</option>
        </select>
        <!-->
        <label for = "preambleDocumentOrientation" class = "control-label">Landscape?</label>
        <input type = "checkbox" name = "preambleDocumentOrientation" id = "preambleDocumentOrientation" class = "checkbox-inline"/>
        <input type = "hidden" name = "preambleDocumentOrientation" id = "preambleDocumentOrientation" value="off"/>
        <!-->
        <label for = "preambleDocumentTwoColumn" class = "control-label">Present document as two columns?</label>
        <input type = "checkbox" name = "preambleDocumentTwoColumn" id = "preambleDocumentTwoColumn" class = "checkbox-inline"/>
        <input type = "hidden" name = "preambleDocumentTwoColumn" id = "preambleDocumentTwoColumn" value="off"/>
        <!-->
        <label for = "preambleDocumentTitlePage" class = "control-label">Start a new page after the title page?</label>
        <input type = "checkbox" class = "checkbox-inline" id = "preambleDocumentTitlePage" name = "preambleDocumentTitlePage"/>
        <input type = "hidden" class = "checkbox-inline" id = "preambleDocumentTitlePage" name = "preambleDocumentTitlePage" value="off"/>
    </div>
    <div class = "well">
        <div class = "form-group">
            <!-->
            <Label for = "preambleDocumentType" class = "control-label">I want to create</Label>
            <select name = "preambleDocumentType" id = "preambleDocumentType" class = "dropdown">
                <option value = "article">an article</option>
                <option value = "report">a report</option>
                <option value = "book">a book</option>
                <option value = "slides">some slides</option>
                <option value = "memoir">a memoir</option>
                <option value = "letter">a letter</option>
            </select>
            <!-->
            <label for = "preambleDocumentName" class = "control-label"> named </label>
            <input type = "text" id = "preambleDocumentName" name = "preambleDocumentName" placeholder = "New Document" class = "form-control"/>
            <!-->
            <label for = "preambleDocumentTitleSameAsName" class = "control-label">Use filename as title?</label>
            <input type = "checkbox" name = "preambleDocumentTitleSameAsName" id = "preambleDocumentTitleSameAsName" class = "checkbox-inline" onclick = "setTitleBoxActive(this.checked)" checked = "checked"/>
            <input type = "hidden" name = "preambleDocumentTitleSameAsName" id = "preambleDocumentTitleSameAsName" value="off"/>
            <!-->
            <label for = "preambleDocumentMakeTitle" class = "control-label">Place title in document?</label>
            <input type = "checkbox" id = "preambleDocumentMakeTitle" name = "preambleDocumentMakeTitle" class = "checkbox-inline" onclick = "" checked = "checked"/>
            <input type = "hidden" id = "preambleDocumentMakeTitle" name = "preambleDocumentMakeTitle" value="off"/>
            <input type = "text" name = "preambleDocumentNewTitle" id = "preambleDocumentNewTitle" placeholder = "New Title" class = "form-control"/>
            <!-->
            <label for = "preambleDocumentSignAuthor" class = "control-label">Use author's name?</label>
            <input type = "checkbox" name = "preambleDocumentSignAuthor" id = "preambleDocumentSignAuthor" class = "checkbox-inline" onclick = "setAuthorBoxActive(!this.checked)"/>
            <input type = "hidden" name = "preambleDocumentSignAuthor" id = "preambleDocumentSignAuthor" value="off"/>
            <input type = "text" name = "preambleDocumentAuthor" id = "preambleDocumentAuthor" placeholder = "Author name" class = "form-control"/>
            <!-->

        </div>
        <input type = "submit" class = "btn" value = "Submit preamble" id = "submitPreamble"/>
        <span class = "success1" style = "display:none">Success</span>
    </div>
</form>