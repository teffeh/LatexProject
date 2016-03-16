<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to DummyTex</h1>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <form role="form" id="startDocument" action="" method="post" enctype="multipart/form-data">
        <div class="well-sm"><input type="reset" value="New Document" name="newDoc" class="btn btn-warning"/></div>
        <div class="well">
          <div class="form-group">
            I want to create
            <select name="docType" class="dropdown">
              <option selected="true" style="display: none" ;>Select Option:</option>
              <option value="article">an article</option>
              <option value="report">a report</option>
              <option value="book">a book</option>
              <option value="slides">some slides</option>
              <option value="memoir">a memoir</option>
              <option value="letter">a letter</option>
            </select> <br>in <input name="docFont" type="number" min="8" max="72" value="8"/>
            pt font
            <br>
            named <input type="text" name="docName"/>
          </div>
        </div>
        <div class="well">
          I want to add
          <select name="inputType">
            <option selected="true" style="display: none" ;>Select Option:</option>
            <option value="article">a section</option>
            <option value="article">a subsection</option>
            <option value="article">a subsubsection</option>
            <option value="article">a paragraph</option>
          </select>
          <br>With the text<br>
          <textarea rows="4" cols="50"></textarea>
          <input type="button" class="btn btn-default" value="Add" onclick="sectionAdded()"/>
        </div>
      </form>
      <button class="btn btn-success" onclick="docCreated()">Create document</button>
    </div>

    <div class="form-group">
      <div class="col-sm-6">
    <textarea rows="20" cols="75">
      \documentclass[14pt]{article}
      \title{Test Document}
      \maketitle
      \document{begin}
      \paragraph{Hello}
      \document{end}
    </textarea>
      </div>
    </div>
  </div>
  <script>
    function docCreated() {
      alert("Document created as .pdf file, proceed to download");
    }
    function sectionAdded() {
      alert("Section added");
    }
  </script>
</body>
</html>