
function validate(){
    var content= document.getElementById("content").value;
    var title= document.getElementById("title").value;
    var author= document.getElementById("author").value;
    var category= document.getElementById("category").value;
    var image= document.getElementById("picture").value;
    var types=["jpeg","jpg","png","jfif","JPEG","JPG","PNG","JFIF"];
    var extension=image.split(".");



    console.log(image);
    

    if(title.trim().length==0){
        alert("Please enter Title of your blog ");
    
    }

    else if(content.trim().length==0){
        alert("Please enter Content of your blog");
    }

    else if(author.trim().length==0){
        alert("Please enter your name or write Anonymous");
    }

    else if(category.length==0){
        alert("Please select a category");
    
    }

    else if(!types.includes(extension[1])){
        alert("Insert appropriate file type as image");
    }

    else{
        alert("Upload successfull");
    }

   
}

function loadImageFileAsURL()
{
    var filesSelected = document.getElementById("picture").files;
    
    if (filesSelected.length > 0)
    {
        var fileToLoad = filesSelected[0];
        console.log("In if");

        if (fileToLoad.type.match("image.*"))
        {
            var fileReader = new FileReader();
            fileReader.onload = function(fileLoadedEvent) 
            {
                var imageLoaded = document.createElement("img");
                imageLoaded.src = fileLoadedEvent.target.result;
                document.body.appendChild(imageLoaded);
            };
            fileReader.readAsDataURL(fileToLoad);
        }

        else{
            alert("Please select appropriate file type");
        }
    }

    console.log(filesSelected[0]);
}

function Likes(){
    console.log("hello");
    var x= document.getElementById("likes").value;
    var likes = parseInt(x);
    var result = likes+1;
    document.getElementById("newlike").innerHTML=result.toString()+" "+"Likes";
    
}

function Unlike(){
    var x= document.getElementById("likes").value;
    var likes = parseInt(x);
    var result = likes-1;
    document.getElementById("newlike").innerHTML=result.toString()+" "+"Likes";
}
