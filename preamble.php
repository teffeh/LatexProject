<?php
echo '
            <div class = "well">
                        <!-->
                        <label for = "preambleDocumentFont" class = "control-label">Font size:</label>
                        <input name = "preambleDocumentFont" type = "number" min = "8" max = "72" value = "11"/>
                        <!-->
                        <label for = "preambleDocumentPaperType" class = "control-label">Paper type:</label>
                        <select name = "preambleDocumentPaperType" class="dropdown">
                            <option value="a4paper">A4 (default)</option>
                            <option value="a5paper">A5</option>
                            <option value="b5paper">B5</option>
                            <option value="letterpaper">Letter paper</option>
                            <option value="executivepaper">Executive paper</option>
                            <option value="legalpaper">Legal paper</option>
                        </select>
                        <!-->
                        <label for="preambleDocumentOrientation" class="control-label">Landscape?</label>
                        <input type="checkbox" name="preambleDocumentOrientation" class="checkbox-inline"/>
                        <!-->
                        <label for="preambleDocumentTwoColumn" class="control-label">Present document as two columns?</label>
                        <input type="checkbox" name="preambleDocumentTwoColumn" class="checkbox-inline"/>
                        <!-->
                    </div><div class = "well">
            <div class = "form-group">
                <!-->
                <Label for = "preambleDocumentType" class = "control-label">I want to create</Label>
                <select name = "preambleDocumentType" class = "dropdown">
                    <option selected = "true" style = "display: none" ;>Select Option:</option>
                    <option value = "article">an article</option>
                    <option value = "report">a report</option>
                    <option value = "book">a book</option>
                    <option value = "slides">some slides</option>
                    <option value = "memoir">a memoir</option>
                    <option value = "letter">a letter</option>
                </select>
                <!-->
                <label for = "preambleDocumentName" class = "control-label"> named </label>
                <input type = "text" name = "preambleDocumentName" placeholder = "New Document" class="form-control"/>
                <!-->
                <label for = "preambleDocumentTitleSameAsName" class = "control-label">Use filename as title?</label>
                <input type = "checkbox" name = "preambleDocumentTitleSameAsName" class="checkbox-inline" onclick="setTitleBoxActive(this.checked)" checked="checked"/>
                <!-->
                <label for = "preambleDocumentMakeTitle" class = "control-label">Place title in document?</label>
                <input type = "checkbox" name = "preambleDocumentMakeTitle" class="checkbox-inline" onclick="" checked="checked"/>
                <input type = "text" name = "preambleDocumentNewTitle" id="preambleDocumentNewTitle" placeholder = "New Title" class="form-control" />
                <!-->
                <label for = "preambleDocumentAuthor" class = "control-label">Use author\'s name?</label>
                <input type = "checkbox" name = "preambleDocumentSignAuthor" class="checkbox-inline" onclick="setAuthorBoxActive(!this.checked)" checked="checked"/>
                <input type = "text" name = "preambleDocumentAuthor" id="preambleDocumentAuthor" placeholder = "Author name" class="form-control"/>
                <!-->
                <label for="preambleTitlePage" class="control-label">Start a new page after the title page?</label>
                <input type="checkbox" class="checkbox-inline" name="preambleTitlePage"/>
            </div>
        </div>
        ';