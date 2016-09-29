# LatexProject
My dissertation project. A PHP driven, web based tool that used data entry forms to gather the requisite arguments for a LaTeX document's initial markup.
The gathered data was then used to generate the markup using a number of methods found in the php files in the root folder. This markup was placed into a .tex file that was compiled using a portable version of MiKTeX installed on the server. The user was supplied with either the .tex file so they could continue the document on another editor, or the compiled PDF of the document itself.
The UI was powered by Bootstrap (http://getbootstrap.com/), with a number of AJAX elements that allowed the user to dynamically update the file as they continued.

The code for this project was written using BDD, with the phpspec tool. (http://www.phpspec.net/en/stable/).
