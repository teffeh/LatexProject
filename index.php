<!doctype html>
<html>
<body>
<form id = "startDocument" action="welcome.php" method="post" enctype="multipart/form-data">
  <input type="reset" value="New Document" name="newDoc"/>
  <p>I want to create
    <select name = "docType">
      <option selected="true" style="display: none";>Select Option:</option>
      <option value="article">an Article</option>
      <option value="IEEEtran">an article with the IEEE Transactions format</option>
      <option value="report">a report</option>
      <option value="book">a book</option>
      <option value="slides">some slides</option>
      <option value="memoir">a memoir</option>
      <option value="letter">a letter</option>
    </select> in <input name = "docFont" type="number" min="8" max="72" value="8"/>
    pt font named
    <input type="text" name = "docName"/>
  </p>
  <input type="submit" value="create">
</form>
</body>
</html>