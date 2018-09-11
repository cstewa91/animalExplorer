# PROTOTYPE Animal Server - General Instructions
- in the HTML folder, there is a index.html and main.js
- in the main.js, there is an ajax call to read information and create dom elements for that information.

# Feature set 1 - dummy data
- The easiest way to test a connection is to use dummy data.  
- There is a dummy data file called html/test.js .  
- Connect the ajax call to test.js to see what the functionality of the front end should look like before creating the back end.
- The animal.js is what your backend should generate when we get it operational.
- Once operational, run the index.html file through MAMP 
  - start the MAMP server.  Make sure the Apache checkbox is green.
  - click on "open web start page"
  - remove ```MAMP/?language=English``` or anything like that from the URL and press enter
  - Navigate to the appropriate folder of your animalExplorer prototype
  - By default, when you get into the html folder, the index.html file should run
  - If animals appear, it is working correct.

# Feature set 2
## Feature set 2-1
- Serve the data up via Node
- Open the webserver.js file
- In the same folder as webserver.js,
  - open you terminal
  - npm install express ```npm install express```
- in the webserver.js file:
  - require express and load its contents into a variable named express
  - Use the express variable and run it like a function.  Put the contents into a variable called webserver
  - make your webserver listen to port 3000  ``` webserver.listen( PORT, FUNCTION TO CALL WHEN LISTEN HAS HAPPENED) ```
## Feature set 2-2
- in the webserver.js file:
  - run your webserver in node and make sure it doesn't explode.  Quit the server ```control + c ``` to do the next test.
  - Add a middleware static file server
    - webserver.use() is the function that loads middle ware
    - you want it to use the following as a parameter: 
      - express.static() sets a static folder to serve files from
      - give it the following combined parameter:
        - you need to give it the current directory ```__dirname``` (note the double underscores)
        - concatenate onto the end of __dirname the directory ```/html``` so that it picks the html folder to serve files from
    - at the end you should have  ```webserver.use ( EXPRESS STATIC STUFF ( THE DIRECTORY TO SERVE ) ) ```
  - Run your server and test the file is loading by going to your browser and navigating to ```localhost:3000``` and see if it pulls up your index.html file.  It whoudl automatically pick up the test.html in the same folder as well as the images.
## Feature set 2-3
- in the webserver.js file:
  - at the top of the file, import the animal.js file from the data folder.  Import it into a variable called animals
  - between the webserver.use and the webserver.listen add an endpoint listener
    - add webserver.get().  It will take an argument for the path to map to and the function to run when a connection happens
      - the path should be '/data'
      - the function should take parameters of ```request``` and ```response```
        - inside the function, json stringify the animal variable from above into a new string jsonAnimals
        - use ```response.send``` to send the jsonAnimals information to the requesting client
  - run the server and test the code by going directly to ```localhost:3000/data``` to see if you get appropriate JSON
## Feature set 2-3
- change your ajax URL to ```localhost:3000/data``` and see if your data loads appropriately.
