        <label for = "inputType" class = "control-label">I want to add</label>
        <select id = "inputType" name = "inputType" class = "form-control">
            <option selected = "selected" style = "display: none" value="Select Option:"></option>
            <option value = "section"> a section</option>
            <option value = "subsection"> a subsection</option>
            <option value = "subsubsection"> a subsubsection</option>
            <option value = "paragraph"> a paragraph</option>
        </select>
        <label for = "inputTypeName" class = "control-label">named</label>
        <input type="text" class="form-control" id="inputTypeName" name="inputTypeName"/>
        <label for = "ssText" class = "control-label">With the text</label>
                    <textarea rows = "4" cols = "50" class = "form-control" id = "ssText" name = "ssText"
                              placeholder = "Your text here..."></textarea>
        <input type = "submit" class = "submit" value = "add" id = "addElement"/>
        <span class = "success2" style = "display:none">Success</span>